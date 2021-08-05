<?php

require_once "Db.php";
  
  // echo "<pre>";
  // print_r($_POST);

  // process registration
  if (!empty($_POST['register'])) {
      extract($_POST);
      $errors = [];

      // check if username is empty
      if (empty($username)) {
          $errors["username"] = "Please enter username";
      }

      // check if email is empty
      if (empty($email)) {
          $errors["email"] = "Please enter email";
      }

      // check if password is empty
      if (empty($password)) {
          $errors["password"] = "Please enter password";
      }

      // check if photo is empty
      if (empty($photo)) {
          $errors["photo"] = "Please enter photo";
      }

      // check if fullname is empty
      if (empty($errors)) {
         $password = sha1($password);
         $sql = "INSERT INTO `users`(`username`,`email`,`password`,`photo`) VALUES('$username','$email','$password','$photo')";
         $result = $conn->query($sql);

         if($result){
          $success = "Congrats You just registered";
         header("Refresh:2; url=login.php");
         }else{
            $error = "Data did not insert";
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

      <h1>Register with us and make money</h1>
      <form action="<?=$_SERVER["PHP_SELF"]?>"
        method="POST">

        <?php if(!empty($success)){ ?>
           <p style="color:green;text-align:center;"><?=$success?></p>
        <?php  }elseif(!empty($error)){ ?>
           <p style="color:red;text-align:center;"><?=$error?></p>
        <?php  } ?>



        <div class="form-row">
          <label for="username">username</label>
          <input type="text" name="username" id="username" placeholder="Enter username">
          <?php  if (!empty($errors["username"])) { ?>
          <span class="danger"><?=$errors["username"]?></span>
          <?php } ?>
        </div>

        <div class="form-row">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter email">
                    <?php  if (!empty($errors["email"])) { ?>
          <span class="danger"><?=$errors["email"]?></span>
          <?php } ?>
        </div>

                <div class="form-row">
          <label for="photo">photo</label>
          <input type="text" name="photo" id="photo" placeholder="Enter photo">
          <?php  if (!empty($errors["photo"])) { ?>
          <span class="danger"><?=$errors["photo"]?></span>
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