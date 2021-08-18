<?php 

 require_once "../config/config.php"; 
 require_once "../core/Database.php";
 require_once "../controllers/Category.php";

 if(!empty($_POST["add-category"])){

    extract($_POST);
    $flag = false;

    // check if a category already exists
    if(Category::exists($name)){
        $error  = "Category already exists";
        $flag = true;
    }

    if(!$flag){
        $result = Category::add($name);
        if($result){
            $success = "Category added successfully";
        }else{
            $error = "Failed to add category";
        }
    }



 }


?>
<!doctype html>
<html lang="en">
<head>
        
    <?php require_once "../includes/admin-css.php"; ?>
</head>

    <body data-sidebar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">  

          <?php require_once "../includes/admin-top-bar.php"; ?>

          <?php require_once "../includes/admin-sidebar.php"; ?>

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">

                           <div class="col-md-12">
                               <?php if(!empty($success)){ ?>
                                <p class="alert alert-success text-center"><?=$success?></p>
                               <?php }elseif(!empty($error)){ ?>
                                <p class="alert alert-danger text-center"><?=$error?></p>
                               <?php } ?>
                             

                           </div>

                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Category</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Add Category Form</h4>

                                        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" > 
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Category Name</label>
                                                <input require type="text" class="form-control" id="formrow-firstname-input" name="name">
                                            </div>


                                            <div>
                                                <button type="submit" name="add-category" value="Submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->


                        </div>


                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
          <?php require_once "../includes/admin-footer.php"; ?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

          <?php require_once "../includes/admin-js.php"; ?>


    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/dashboard-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Feb 2021 11:53:43 GMT -->
</html>
