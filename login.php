<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>登入</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body><script id="__bs_script__">//<![CDATA[
    document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>

    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->

        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">

                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="palatinNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand" style="color:white;"><img src="logo.png" width=40px ;height=40px alt=""> 聖心教學旅館</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">首頁</a></li>
                                    <!-- <li><a href="about-us.html">About Us</a></li> -->
                                    <li><a href="blog.php">公告區</a></li>
                                    <?php if ($_SESSION["level"] != 1) { ?>
                                        <li><a href="rooms.php">房型一覽</a></li><?php } else { ?>
                                        <li><a href="rooms.php">營運報表</a></li>
                                        <li><a href="rooms.php">後臺管理</a></li>

                                    <?php } ?>
                                    <?php if ($_SESSION["level"] == 2) { ?>
                                        <li class="active"><a href="rooms.php"><?php echo $_SESSION["name"] ?> , 您好</a>
                                            <ul class="dropdown">
                                                <li class="active"><a href="myreserve.php">我的預約</a></li>
                                                <li class="active"><a href="logout.php">登出</a></li>
                                            </ul>
                                        </li>
                                    <?php } else if ($_SESSION["level"] == 1) { ?>
                                        <li class="active"><a href="logout.php"><?php echo $_SESSION["name"] ?> , 登出</a></li><?php } else { ?>
                                        <li class="active"><a href="login.php">登入</a></li><?php } ?>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->

    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-8.jpg);">
        <div class="bradcumbContent">

        </div>
    </section>

    <!-- ##### Breadcumb Area End ##### -->





    <!-- ##### Contact Form Area Start ##### -->
    <section class="contact-form-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <div class="line-"></div>
                        <h2>登入</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <form action="logincheck.php" method="post">
                    <div class="row">
                        <div class="col-lg-9">
                            <h4>Account - 帳號 </h4>
                            <input type="text" class="form-control" name="account" placeholder="請輸入帳號" required>
                        </div>
                        <div class="col-lg-9">
                            <h4>Password - 密碼</h4>
                            <input type="password" class="form-control" name="password" placeholder="請輸入密碼" required>
                        </div>


                        <div class="col-12">
                            <button type="submit" class="btn palatin-btn mt-50">登入</button>
                        </div>

                    </div>
                </form>

            </div>
            <div class="row">
                <a href="insert.php" class="btn palatin-btn mt-50">註冊</a>
            </div>
        </div>
        </div>
    </section>
    <!-- ##### Contact Form Area End ##### -->

    <!-- ##### Google Maps ##### -->
    <!--
    <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
                    -->


    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>