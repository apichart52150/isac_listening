<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Minton - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Lightbox css -->
        <link href="{{ asset('public/assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo text-center">
                            <span class="logo-lg">
                                <img src="{{ asset('public/assets/images/logo-light.png') }}" alt="" height="20">
                                <!-- <span class="logo-lg-text-light">Xeria</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">X</span> -->
                                <img src="{{ asset('public/assets/images/logo-sm.png') }}" alt="" height="24">
                            </span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

        </header>
        <!-- End Navigation Bar-->

    
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Extras</a></li>
                                    <li class="breadcrumb-item active">Gallery</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Gallery</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <!-- Filter -->
                <div class="row">
                    <div class="col-12">
                        <div class="text-center filter-menu">
                            <a href="javascript: void(0);" class="filter-menu-item active" data-rel="all">All</a>
                            <a href="javascript: void(0);" class="filter-menu-item" data-rel="web">Web Design</a>
                            <a href="javascript: void(0);" class="filter-menu-item" data-rel="graphic">Graphic Design</a>
                            <a href="javascript: void(0);" class="filter-menu-item" data-rel="illustrator">Illustrator</a>
                            <a href="javascript: void(0);" class="filter-menu-item" data-rel="photography">Photography</a>
                        </div>
                    </div>
                </div>
                <!-- end row-->

                <div class="row filterable-content">

                    <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
                        <div class="gal-box">
                            <a href="{{ asset('public/assets/images/small/img-1.jpg') }}" class="image-popup" title="Screenshot-1">
                                <img src="{{ asset('public/assets/images/small/img-1.jpg') }}" class="img-fluid" alt="work-thumbnail">
                            </a>
                            <div class="gall-info">
                                <h4 class="font-16 mt-0">Man wearing black jacket</h4>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('public/assets/images/users/avatar-3.jpg') }}" alt="user-img" class="rounded-circle" height="24" />
                                    <span class="text-muted ml-1">Justin Coke</span>
                                </a>
                                <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-muted"></i></a>
                            </div> <!-- gallery info -->
                        </div> <!-- end gal-box -->
                    </div> <!-- end col -->

                    <div class="col-sm-6 col-xl-3 filter-item all graphic photography">
                        <div class="gal-box">
                            <a href="{{ asset('public/assets/images/small/img-2.jpg') }}" class="image-popup" title="Screenshot-2">
                                <img src="{{ asset('public/assets/images/small/img-2.jpg') }}" class="img-fluid" alt="work-thumbnail">
                            </a>
                            <div class="gall-info">
                                <h4 class="font-16 mt-0">Snow covered mountain</h4>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('public/assets/images/users/avatar-2.jpg') }}" alt="user-img" class="rounded-circle" height="24" />
                                    <span class="text-muted ml-1">Toni Sanchez</span>
                                </a>
                                <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-danger"></i></a>
                            </div> <!-- gallery info -->
                        </div> <!-- end gal-box -->
                    </div> <!-- end col -->

                    <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
                        <div class="gal-box">
                            <a href="{{ asset('public/assets/images/small/img-3.jpg') }}" class="image-popup" title="Screenshot-3">
                                <img src="{{ asset('public/assets/images/small/img-3.jpg') }}" class="img-fluid" alt="work-thumbnail">
                            </a>
                            <div class="gall-info">
                                <h4 class="font-16 mt-0">Woman sitting on rock</h4>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('public/assets/images/users/avatar-4.jpg') }}" alt="user-img" class="rounded-circle" height="24" />
                                    <span class="text-muted ml-1">Maria Crowder</span>
                                </a>
                                <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-muted"></i></a>
                            </div> <!-- gallery info -->
                        </div> <!-- end gal-box -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                       2016 - 2019 &copy; Minton theme by <a href="">Coderthemes</a> 
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <!-- Vendor js -->
        <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>

        <!-- Magnific Popup-->
        <script src="{{ asset('public/assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <!-- Gallery Init-->
        <script src="{{ asset('public/assets/js/pages/gallery.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('public/assets/js/app.min.js') }}"></script>
        
    </body>
</html>