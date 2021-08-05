<?php

require_once "Db.php";
  
  // echo "<pre>";
  // print_r($_POST);

  // process registration
  if (!empty($_POST['register'])) {
      extract($_POST);
      $error = "";


      // check if email is empty
      if (empty($email)) {
          $error= "Invalid Login Detail";
      }

      // check if password is empty
      if (empty($password)) {
          $error = "Invalid login Detail";
      }

      // check if fullname is empty
      if (empty($error)) {
          $password =  sha1($password);
          $sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              $userData  = $result->fetch_assoc();
              $success = "Loggedin successfully";

          } else {
              $error = "Invalid Login Detail";
          }
      }
  }


?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
    <style>
      .danger{
        color:red;
      }
    </style>
  </head>

  <body>
    <div class="container">

      <h1>Login Here</h1>
      <form action="<?=$_SERVER["PHP_SELF"]?>"
        method="POST">

        <?php if (!empty($success)) { ?>
           <p style="color:green;text-align:center;"><?=$success?></p>
        <?php  } elseif (!empty($error)) { ?>
           <p style="color:red;text-align:center;"><?=$error?></p>
        <?php  } ?>




        <div class="form-row">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter email">
                    <?php  if (!empty($errors["email"])) { ?>
          <span class="danger"><?=$errors["email"]?></span>
          <?php } ?>
        </div>



        <div class="form-row">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter password">
                    <?php  if (!empty($errors["password"])) { ?>
          <span class="danger"><?=$errors["password"]?></span>
          <?php } ?>
        </div>




        <div class="form-row">
          <input type="submit" name="register" value="Register Now">
        </div>


      </form>

    </div>
  </body>

</html>