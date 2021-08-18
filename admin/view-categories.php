<?php 

 require_once "../config/config.php"; 
 require_once "../core/Database.php";
 require_once "../controllers/Category.php";

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

                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Category List</h4>
                                        <p class="card-title-desc">A total of <?=count($allCategories)?> categories. </p>

                                        <table class="table">
                                            <thead>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($allCategories as $key => $value) { ?>
                                                <tr>
                                                    <td><?=$key+1?></td>
                                                    <td><?=ucwords($value->name)?></td>
                                                    <td><?=date("d M, Y h:s A",strtotime($value->created_at))?></td>
                                                    <td>
                                                      <a href="<?=APP_URL?>admin/edit-category.php?id=<?=$value->id?>" class="btn btn-success">Edit</a>
                                                      <a href="" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php } ?>

                                   
                                            </tbody>
                                        </table>
        
               
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
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
