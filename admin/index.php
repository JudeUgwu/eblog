<?php require_once "../config/config.php"; ?>
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
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Blog</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">

                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                
                                                <div class="d-flex flex-wrap">
                                                    <div class="me-3">
                                                        <p class="text-muted mb-2">Total Post</p>
                                                        <h5 class="mb-0">120</h5>
                                                    </div>
    
                                                    <div class="avatar-sm ms-auto">
                                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                            <i class="bx bxs-book-bookmark"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="card blog-stats-wid">
                                            <div class="card-body">

                                                <div class="d-flex flex-wrap">
                                                    <div class="me-3">
                                                        <p class="text-muted mb-2">Pages</p>
                                                        <h5 class="mb-0">86</h5>
                                                    </div>
    
                                                    <div class="avatar-sm ms-auto">
                                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                            <i class="bx bxs-note"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card blog-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap">
                                                    <div class="me-3">
                                                        <p class="text-muted mb-2">Comments</p>
                                                        <h5 class="mb-0">4,235</h5>
                                                    </div>
    
                                                    <div class="avatar-sm ms-auto">
                                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                            <i class="bx bxs-message-square-dots"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->


                        
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
