<?php 
 require_once "../config/config.php";
 require_once "../core/Database.php";
 require_once "../controllers/User.php";
 require_once "../controllers/Helper.php";

 
 $url = APP_URL."admin/index.php";
 if(!empty($_SESSION['admin_id'])){
    header("Location:$url");
    exit();
 }



 if(!empty($_POST["login-admin"])){
    extract($_POST);
    $result = User::login($email,sha1($password));
    if(!empty($result)){
      //set session
      $_SESSION['admin_id'] = $result->id;
      //redirect to dashboard
      
      header("Location:$url");
      exit();
    }else{
        $error = "Invalid Login Detail";
    }
 }


?>
<!doctype html>
<html lang="en">

<head>
    <?php require_once "../includes/admin-css.php"; ?>
</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Login As Administrator</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-body pt-0">

                            <div class="p-2">
                                <form class="form-horizontal" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input required type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input  name="password" required minlength="6" type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                    <div class="mt-3 d-grid">
                                        <button name="login-admin" value="login" class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->
    <?php require_once "../includes/admin-js.php"; ?>

</body>


</html>