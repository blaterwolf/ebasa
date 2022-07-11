<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin Dashboard | EBASA 📚</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EBASA Logo -->

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('assets/css') ?>/custom.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons CSS -->
    <link href="<?php echo base_url('assets/css') ?>/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css -->
    <link href="<?php echo base_url('assets/css') ?>/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Toastr Notifications -->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/node_modules') ?>/toastr/build/toastr.min.css">
</head>

<body data-sidebar="light">
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="<?php echo base_url('assets') ?>/images/logo.svg" alt="" height="25">
                            </span>
                            <span class="logo-lg">
                                <img src="<?php echo base_url('assets') ?>/images/logo-dark.png" alt="" height="25">
                            </span>
                        </a>
                    </div>
                    <!-- Button for Sidebar Collapse -->
                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>
                <div class="d-flex">
                    <span class="px-3">You are logged in as:</span>
                    <span class="badge rounded-pill bg-primary" id="currentUserType"></span>
                </div>
                <div class="d-flex">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" id="userProfilePicture" alt="Header Avatar">
                            <span id="userFullNameTopBar" class="d-none d-xl-inline-block ms-1" key="t-henry"></span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item d-block" href="#"><i
                                    class="bx bx-wrench font-size-16 align-middle me-1"></i> <span
                                    key="t-settings">Settings</span></a>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item text-danger" data-bs-toggle="modal"
                                data-bs-target="#logoutModal">
                                <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                                <span key="t-logout">Logout</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Core</li>
                        <li>
                            <a href="/ebasa/admin/dashboard" class="waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-calendar">Dashboard</span>
                            </a>
                        </li>

                        <li class="menu-title">Admin Powers</li>

                        <li>
                            <a href="#" class="waves-effect">
                                <i class='fa fa-user'></i>
                                <span key="t-chat">Admin</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="waves-effect">
                                <i class='fa fa-book-reader'></i>
                                <span key="t-chat">Librarian</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="waves-effect">
                                <i class='bx bx-body'></i>
                                <span key="t-chat">Residents</span>
                            </a>
                        </li>

                        <li class="menu-title">Library Related</li>

                        <li>
                            <a href="#" class="waves-effect">
                                <i class='bx bx-camera'></i>
                                <span key="t-chat">Visit Log</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Starter Page</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- container-fluid -->
                <div class="row px-3">
                    <div class="col-md">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted fw-medium">Total Users</p>
                                        <h4 class="mb-0" id="totalUsersCount"></h4>
                                    </div>

                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                        <span class="avatar-title bg-primary">
                                            <i class="bx bxs-group font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted fw-medium">Admins</p>
                                        <h4 class="mb-0" id="totalAdminsCount"></h4>
                                    </div>

                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bxs-cool font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted fw-medium">Librarians</p>
                                        <h4 class="mb-0" id="totalLibrariansCount"></h4>
                                    </div>

                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-book font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted fw-medium">Residents</p>
                                        <h4 class="mb-0" id="totalResidentsCount"></h4>
                                    </div>

                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-body font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                            document.write(new Date().getFullYear())
                            </script> © EBASA
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by BSIT 3-1
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="<?php echo base_url('assets/node_modules') ?>/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/node_modules') ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/node_modules') ?>/metismenu/dist/metisMenu.min.js"></script>
    <script src="<?php echo base_url('assets/node_modules') ?>/simplebar/dist/simplebar.min.js"></script>
    <script src="<?php echo base_url('assets/node_modules') ?>/node-waves/dist/waves.min.js"></script>
    <script src="<?php echo base_url('assets/node_modules') ?>/parsleyjs/dist/parsley.min.js"></script>
    <script src="<?php echo base_url('assets/node_modules') ?>/toastr/build/toastr.min.js"></script>
    <!-- App js -->
    <script src="<?php echo base_url('assets') ?>/js/app.js"></script>
    <script src="<?php echo base_url('public/js') ?>/constant.js"></script>
    <script src="<?= base_url('public/js') ?>/app.js"></script>
    <script src="<?= base_url('public/js') ?>/ajax/admin/info.ajax.js"></script>
    <script src="<?= base_url('public/js') ?>/ajax/admin/users.ajax.js"></script>
</body>

</html>