<?php 

 require_once "../config/config.php"; 
 require_once "../core/Database.php";
 require_once "../controllers/Helper.php";
 require_once "../controllers/Category.php";




 if(empty($_SESSION['admin_id'])){
    $url  = APP_URL."auth/login.php";
    header("Location: $url");
    exit();
}


if(!empty($_POST['add-post'])){
  
  $imageUrl = Helper::uploadImage($_FILES['image']);
  echo $imageUrl;
  die();

}

$allCategories = Category::getAll();

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
                                    <h4 class="mb-sm-0 font-size-18">Add Post</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Add Post Form</h4>

                                        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data" > 
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Post Title</label>
                                                <input require type="text" class="form-control" id="formrow-firstname-input" name="title">
                                            </div>

                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Post Category</label>
                                                <select class="form-control" required name="category_id" id="">
                                                    <option value="">Select Category</option>
                                                    <?php foreach($allCategories as $key => $category){ ?>
                                                     <option value="<?=$category->id?>"><?=$category->name?></option>
                                                    <?php } ?>

                                                </select>
                                              
                                            </div>


                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Post Image</label>
                                                <input require type="file" accept="image/*" class="form-control" id="formrow-firstname-input" name="image">
                                            </div>

                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Post Content</label>
                                                <textarea required name="content" id="content" class="form-control" placeholder="Write an article" ></textarea>
                                            </div>


                                            <div>
                                                <button type="submit" name="add-post" value="Submit" class="btn btn-primary w-md">Submit</button>
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

          <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
          <script>
                        CKEDITOR.replace( 'content' );
                </script>
    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/dashboard-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Feb 2021 11:53:43 GMT -->
</html>
