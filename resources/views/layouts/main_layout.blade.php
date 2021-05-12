<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>iSAC - Listening</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/assets/images/club4.png') }}">

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
                
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('public/assets/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    Nik Patel <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-settings"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-wallet"></i>
                                    <span>My Wallet <span class="badge badge-success float-right">3</span> </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>            

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="#" class="logo text-center">
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

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="mdi mdi-view-dashboard"></i>Dashboards <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="index.html">Dashboard 1</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-2.html">Dashboard 2</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="mdi mdi-layers"></i>Apps <div class="arrow-down"></div>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="apps-kanbanboard.html">Kanban Board</a>
                                    </li>
                                    <li>
                                        <a href="apps-companies.html">Companies</a>
                                    </li>
                                    <li>
                                        <a href="apps-calendar.html">Calendar</a>
                                    </li>
                                    <li>
                                        <a href="apps-filemanager.html">File Manager</a>
                                    </li>
                                    <li>
                                        <a href="apps-tickets.html">Tickets</a>
                                    </li>
                                    <li>
                                        <a href="apps-team.html">Team Members</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Email <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="email-inbox.html">Inbox</a>
                                            </li>
                                            <li>
                                                <a href="email-read.html">Read Email</a>
                                            </li>
                                            <li>
                                                <a href="email-compose.html">Compose Email</a>
                                            </li>
                                            <li>
                                                <a href="email-templates.html">Email Templates</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"> <i class="mdi mdi-page-layout-body"></i>Layouts <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="layouts-menubar-dark.html">Menubar Dark</a>
                                    </li>
                                    <li>
                                        <a href="layouts-topbar-light.html">Topbar Light</a>
                                    </li>
                                    <li>
                                        <a href="layouts-center-menu.html">Center Menu</a>
                                    </li>
                                    <li>
                                        <a href="layouts-preloader.html">Preloader</a>
                                    </li>
                                    <li>
                                        <a href="layouts-normal-header.html">Unsticky Header</a>
                                    </li>
                                    <li>
                                        <a href="layouts-boxed.html">Boxed</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"> <i class="mdi mdi-briefcase"></i>UI Elements <div class="arrow-down"></div></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="ui-buttons.html">Buttons</a>
                                            </li>
                                            <li>
                                                <a href="ui-cards.html">Cards</a>
                                            </li>
                                            <li>
                                                <a href="ui-portlets.html">Portlets</a>
                                            </li>
                                            <li>
                                                <a href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                            </li>
                                            <li>
                                                <a href="ui-modals.html">Modals</a>
                                            </li>
                                            <li>
                                                <a href="ui-progress.html">Progress</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="ui-notifications.html">Notifications</a>
                                            </li>
                                            <li>
                                                <a href="ui-ribbons.html">Ribbons</a>
                                            </li>
                                            <li>
                                                <a href="ui-spinners.html">Spinners</a>
                                            </li>
                                            <li>
                                                <a href="ui-general.html">General UI</a>
                                            </li>
                                            <li>
                                                <a href="ui-typography.html">Typography</a>
                                            </li>
                                            <li>
                                                <a href="ui-grid.html">Grid</a>
                                            </li>
                                        </ul>
                                    </li>
                        
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="mdi mdi-black-mesa"></i>Components <div class="arrow-down"></div>
                                </a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#"><i class="mdi mdi-trophy-variant mr-1"></i> Admin UI <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="admin-sweet-alert.html">Sweet Alert</a>
                                            </li>
                                            <li>
                                                <a href="admin-nestable.html">Nestable List</a>
                                            </li>
                                            <li>
                                                <a href="admin-treeview.html">Treeview</a>
                                            </li>
                                            <li>
                                                <a href="admin-range-slider.html">Range Slider</a>
                                            </li>
                                            <li>
                                                <a href="admin-carousel.html">Carousel</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="widgets.html"><i class="mdi mdi-mine mr-1"></i> Widgets </a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#"><i class="mdi mdi-cards mr-1"></i> Forms <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="forms-elements.html">General Elements</a>
                                            </li>
                                            <li>
                                                <a href="forms-advanced.html">Advanced</a>
                                            </li>
                                            <li>
                                                <a href="forms-validation.html">Validation</a>
                                            </li>
                                            <li>
                                                <a href="forms-pickers.html">Pickers</a>
                                            </li>
                                            <li>
                                                <a href="forms-wizard.html">Wizard</a>
                                            </li>
                                            <li>
                                                <a href="forms-summernote.html">Summernote</a>
                                            </li>
                                            <li>
                                                <a href="forms-quilljs.html">Quilljs Editor</a>
                                            </li>
                                            <li>
                                                <a href="forms-file-uploads.html">File Uploads</a>
                                            </li>
                                            <li>
                                                <a href="forms-x-editable.html">X Editable</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#"><i class="mdi mdi-table mr-1"></i> Tables <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="tables-basic.html">Basic Tables</a>
                                            </li>
                                            <li>
                                                <a href="tables-datatables.html">Data Tables</a>
                                            </li>
                                            <li>
                                                <a href="tables-editable.html">Editable Tables</a>
                                            </li>
                                            <li>
                                                <a href="tables-tablesaw.html">Tablesaw Tables</a>
                                            </li>
                                            <li>
                                                <a href="tables-responsive.html">Responsive Tables</a>
                                            </li>
                                            <li>
                                                <a href="tables-footables.html">FooTables</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#"><i class="mdi mdi-chart-arc mr-1"></i> Charts <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="charts-flot.html">Flot Charts</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex.html">Apex Charts</a>
                                            </li>
                                            <li>
                                                <a href="charts-morris.html">Morris Charts</a>
                                            </li>
                                            <li>
                                                <a href="charts-chartjs.html">Chartjs Charts</a>
                                            </li>
                                            <li>
                                                <a href="charts-c3.html">C3 Charts</a>
                                            </li>
                                            <li>
                                                <a href="charts-peity.html">Peity Charts</a>
                                            </li>
                                            <li>
                                                <a href="charts-chartist.html">Chartist Charts</a>
                                            </li>
                                            <li>
                                                <a href="charts-sparklines.html">Sparklines Charts</a>
                                            </li>
                                            <li>
                                                <a href="charts-knob.html">Jquery Knob Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#"><i class="mdi mdi-parachute mr-1"></i> Icons <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="icons-remix.html">Remix Icons</a>
                                            </li>
                                            <li>
                                                <a href="icons-feather.html">Feather Icons</a>
                                            </li>
                                            <li>
                                                <a href="icons-mdi.html">Material Design Icons</a>
                                            </li>
                                            <li>
                                                <a href="icons-font-awesome.html">Font Awesome</a>
                                            </li>
                                            <li>
                                                <a href="icons-themify.html">Themify</a>
                                            </li>
                                            <li>
                                                <a href="icons-weather.html">Weather</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#"><i class="mdi mdi-map mr-1"></i> Maps <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="maps-google.html">Google Maps</a>
                                            </li>
                                            <li>
                                                <a href="maps-vector.html">Vector Maps</a>
                                            </li>
                                            <li>
                                                <a href="maps-mapael.html">Mapael Maps</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"> <i class="mdi mdi-google-pages"></i>Pages <div class="arrow-down"></div></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="pages-starter.html">Starter</a>
                                            </li>
                                            <li>
                                                <a href="pages-login.html">Log In</a>
                                            </li>
                                            <li>
                                                <a href="pages-register.html">Register</a>
                                            </li>
                                            <li>
                                                <a href="pages-recoverpw.html">Recover Password</a>
                                            </li>
                                            <li>
                                                <a href="pages-lock-screen.html">Lock Screen</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="pages-logout.html">Logout</a>
                                            </li>
                                            <li>
                                                <a href="pages-confirm-mail.html">Confirm Mail</a>
                                            </li>
                                            <li>
                                                <a href="pages-404.html">Error 404</a>
                                            </li>
                                            <li>
                                                <a href="pages-404-alt.html">Error 404-alt</a>
                                            </li>
                                            <li>
                                                <a href="pages-500.html">Error 500</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"> <i class="mdi mdi-file-document-box-multiple"></i>Extra Pages <div class="arrow-down"></div></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="extras-profile.html">Profile</a>
                                            </li>
                                            <li>
                                                <a href="extras-timeline.html">Timeline</a>
                                            </li>
                                            <li>
                                                <a href="extras-invoice.html">Invoice</a>
                                            </li>
                                            <li>
                                                <a href="extras-faqs.html">FAQs</a>
                                            </li>
                                            <li>
                                                <a href="extras-tour.html">Tour Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="extras-pricing.html">Pricing</a>
                                            </li>
                                            <li>
                                                <a href="extras-maintenance.html">Maintenance</a>
                                            </li>
                                            <li>
                                                <a href="extras-coming-soon.html">Coming Soon</a>
                                            </li>
                                            <li>
                                                <a href="extras-gallery.html">Gallery</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">

                @yield('content')
                    
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