<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>LearnUp - قالب HTML دوره آنلاین و آموزش</title>

    <!-- Custom CSS -->
    <link href="<?php echo WEP_PLUGIN_ASSETS_STYLE . 'styles.css' ?>" rel="stylesheet">

    <!-- Custom Color Option -->
    <link href="<?php echo WEP_PLUGIN_ASSETS_STYLE . 'colors.css' ?>" rel="stylesheet">

</head>

<body class="red-skin rtl">


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->


        <!-- ============================ Dashboard: Dashboard Start ================================== -->
        <section class="gray pt-5">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-3 col-md-3">
                        <div class="dashboard-navbar">
                            <?php $current_user = wp_get_current_user() ?>
                            <div class="d-user-avater">
                                <?php echo get_avatar($current_user->user_email, 120) ?>
                                <!-- <img src="assets/img/user-3.jpg" class="img-fluid avater" alt=""> -->
                                <h4><?php echo $current_user->display_name ?></h4>
                                <span>تاریخ عضویت: <?php echo $current_user->user_registered ?></span>
                            </div>

                            <div class="d-navigation">
                                <ul id="side-menu">
                                    <li><a href="dashboard.html"><i class="ti-user"></i>داشبورد</a></li>
                                    <li><a href="my-profile.html"><i class="ti-heart"></i>اکانت من</a></li>
                                    <li><a href="add-listing.html"><i class="ti-plus"></i>افزودن دوره جدید</a></li>
                                    <li><a href="saved-courses.html"><i class="ti-heart"></i>دوره های ذخیره شده</a></li>
                                    <li class="dropdown">
                                        <a href="all-courses.html"><i class="ti-layers"></i>لیست دوره ها<span class="ti-angle-right"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li><a href="all-courses.html">همه</a></li>
                                            <li><a href="javascript:void(0);">منتشر شده</a></li>
                                            <li><a href="javascript:void(0);">در حال بررسی</a></li>
                                            <li><a href="javascript:void(0);">بسته شده</a></li>
                                            <li><a href="javascript:void(0);">پیش نویس</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="my-order.html"><i class="ti-shopping-cart"></i>سفارشات من</a></li>
                                    <li class="active"><a href="settings.html"><i class="ti-settings"></i>تنظیمات</a></li>
                                    <li><a href="reviews.html"><i class="ti-comment-alt"></i>لیست نظرات</a></li>
                                    <li><a href="#"><i class="ti-power-off"></i>خروج</a></li>
                                </ul>
                            </div>

                        </div>


                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12">

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">تنظیمات</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- /Row -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <!--layouts -->
                                <?php include WEP_PLUGIN_VIEWS . $view; ?>
                            </div>
                        </div>
                        <!-- /Row -->

                    </div>

                </div>
                <!-- Row -->

            </div>
        </section>
        <!-- ============================ Dashboard: My Order Start End ================================== -->


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo WEP_PLUGIN_ASSETS_JS . 'bootstrap.min.js' ?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="assets/js/metisMenu.min.js"></script>
    <script>
        $('#side-menu').metisMenu();
    </script>

</body>

</html>