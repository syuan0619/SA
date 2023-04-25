<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>聖心教學旅館</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
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
                        <a href="index.php" class="nav-brand" style="color:white;"><img src="logo.png" width=40px ;height = 40px alt=""> 聖心教學旅館</a>

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
                                    <li class="active"><a href="blog.php">公告區</a></li>
                                    <?php if ($_SESSION["level"] != 1) { ?>
                                        <li><a href="rooms.php">房型一覽</a></li><?php } else { ?>
                                        <li><a href="rooms.php">營運報表</a></li>
                                        <li><a href="allreserve.php">後臺管理</a></li>

                                    <?php } ?>
                                    <?php if ($_SESSION["level"] == 2) { ?>
                                        <li><a href="rooms.php"><?php echo $_SESSION["name"] ?> , 您好</a>
                                            <ul class="dropdown">
                                                <li><a href="myreserve.php">我的預約</a></li>
                                                <li><a href="logout.php">登出</a></li>
                                            </ul>
                                        </li>
                                    <?php } else if ($_SESSION["level"] == 1) { ?>
                                        <li><a href="logout.php"><?php echo $_SESSION["name"] ?> , 登出</a></li><?php } else { ?>
                                        <li><a href="login.php">登入</a></li><?php } ?>
                                </ul>

                                <!-- Button -->
                                

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
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-7.jpg);">
        <div class="bradcumbContent">
            <h2>公告區</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <br>

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php if ($_SESSION["level"] == 1) { ?>
                    <a href="#" class="btn btn" data-bs-toggle="modal" data-bs-target="#addModal" style="border-radius:100px;width:100px;margin-left:1100px"><img src="img/plus.png"></button></a>
                   <?php }?>
                    <div class="palatin-blog-posts">

                        <!-- ##### Single Blog Post ##### -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Post Thumb -->
                            <div class="blog-post-thumb">

                                <img src="img/blog-img/1.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">

                                <!-- Post Date-->
                                <a href="#" class="post-date btn palatin-btn">六月 25, 2018</a>
                                <?php if ($_SESSION["level"] == 1) { ?>
                                    <a href="#" class="btn btn-light" style="border-radius:100px;width:60px" data-bs-toggle="modal" data-bs-target="#editModal"><img src="img/edit.png"></a>
                                    <a href="#" onclick="confirm('確定刪除公告?')"class="btn btn-light" style="border-radius:100px;width:60px"><img src="img/delete.png"></a>

                                <?php } ?>

                                <!-- Post Title -->

                                <a href="#" class="post-title"></a>
                                <!-- Post Meta -->

                                <div class="post-meta d-flex justify-content-center">
                                    <!-- Catagory -->
                                    <a href="#" class="post-catagory">In Hotel</a>
                                    <!-- Comments -->
                                    <a href="#" class="post-comments">3 comments</a>
                                </div>
                                <!-- Post Excerpt -->
                                <p></p>
                            </div>
                        </div>
                        <div class="col-6">
                                            <button type="submit" class="btn palatin-btn mt-50" data-bs-toggle="modal" data-bs-target="#editModal" style="border-radius:300px;background-color:cornflowerblue">編輯資料</button>
                                            </div>
                         <!-- Modal彈窗-->
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">修改公告</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">公告日期:</label>
                                                <input type="date" class="form-control" id="date">
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">公告標題:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">公告內容:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">公告圖片:</label>
                                                <input type="file" class="form-control" id="recipient-name">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                                        <button type="button" class="btn btn-primary">修改</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ##### Single Blog Post ##### -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Post Thumb -->
                            <div class="blog-post-thumb">
                                <img src="img/blog-img/2.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <!-- Post Date-->
                                <a href="#" class="post-date btn palatin-btn">June 25, 2018</a>
                                <!-- Post Title -->
                                <a href="#" class="post-title">June opening for our Pool Bar</a>
                                <!-- Post Meta -->
                                <div class="post-meta d-flex justify-content-center">
                                    <!-- Catagory -->
                                    <a href="#" class="post-catagory">In Hotel</a>
                                    <!-- Comments -->
                                    <a href="#" class="post-comments">3 comments</a>
                                </div>
                                <!-- Post Excerpt -->
                                <p>Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Integer tempus ligula sem, id feugiat quam egestas et. Donec porttitor varius diam in vulputate. Fusce blandit consequat elit non egestas. Donec tortor odio, consectetur eu justo ut, auctor</p>
                            </div>
                        </div>

                        <!-- ##### Single Blog Post ##### -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <!-- Post Thumb -->
                            <div class="blog-post-thumb">
                                <img src="img/blog-img/3.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <!-- Post Date-->
                                <a href="#" class="post-date btn palatin-btn">June 25, 2018</a>
                                <!-- Post Title -->
                                <a href="#" class="post-title">3 Tip for the perfect vacation</a>
                                <!-- Post Meta -->
                                <div class="post-meta d-flex justify-content-center">
                                    <!-- Catagory -->
                                    <a href="#" class="post-catagory">In Hotel</a>
                                    <!-- Comments -->
                                    <a href="#" class="post-comments">3 comments</a>
                                </div>
                                <!-- Post Excerpt -->
                                <p>Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Integer tempus ligula sem, id feugiat quam egestas et. Donec porttitor varius diam in vulputate. Fusce blandit consequat elit non egestas. Donec tortor odio, consectetur eu justo ut, auctor</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="700ms">
                        <a href="#" class="btn palatin-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-lg-5">
                    <div class="footer-widget-area mt-50">
                        <a href="#" class="d-block mb-5"><img src="img/core-img/logo.png" alt=""></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Find us on the map</h6>
                        <img src="img/bg-img/footer-map.png" alt="">
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Subscribe to our newsletter</h6>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail" placeholder="Your E-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>

                <!-- Copywrite Text -->
                <div class="col-12">
                    <div class="copywrite-text mt-30">
                        <p><a href="#">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>