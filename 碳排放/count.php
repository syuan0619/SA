<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>count</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"></i>碳排放計算系統</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">首頁</a>
                        <a href="signin.php" class="nav-item nav-link">簽到</a>
                        <a href="history.php" class="nav-item nav-link">歷史紀錄</a>
                        <a href="count.php" class="nav-item nav-link">計算</a>
                        <a href="information.php" class="nav-item nav-link">個人資料</a>

                    </div>
                </div>
                <div>
                    <?php if (empty($_SESSION["ID"])) { ?>
                        <li><a href="login.php" class="btn btn-primary py-2 px-4">登入</a>
                            <a href="insert.php" class="btn btn-primary py-2 px-4">註冊</a>
                        </li>

                    <?php } else { ?>

                        <li>
                            <a class="btn btn-primary py-2 px-4"><?php echo $_SESSION["Name"] ?> , 您好</a>
                            <a href="logout.php" class="btn btn-primary py-2 px-4">登出</a>
                        </li>

                    <?php } ?>
                </div>

        </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">計算</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">計算</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div> <!-- Navbar & Hero End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <form method="post" action="">
                    <select class="form-select" name="kind">
                        <option value="開車">開車(公里)</option>
                        <option value="騎車">騎車(公里)</option>
                        <option value="搭乘公車">公車(分鐘)</option>
                        <option value="搭乘捷運">捷運(站)</option>
                        <option value="水">水(度)</option>
                        <option value="電">電(度)</option>
                        <option value="瓦斯">瓦斯(度)</option>

                    </select>
                    <h1>請輸入數值</h1>
                    <input type="number" name="calculate" >
                    <br>
                    <br>
                    <input class="btn btn-primary py-2 px-4" type="submit" name="計算" value="開始計算" >
                    <?php if (isset($_POST['calculate']) && isset($_POST['kind'])) {
                        $calculate = $_POST['calculate'];
                        $kind = $_POST['kind'];
                        switch ($kind) {
                            case "水":
                                $result = $calculate * 0.0554;
                                break;
                            case "電":
                                $result = $calculate * 0.509;
                                break;
                            case "瓦斯":
                                $result = $calculate * 1.879;
                                break;
                            case "搭乘捷運":
                                $result = $calculate * 0.0554;
                                break;
                            case "搭乘公車":
                                $result = $calculate * 0.2075;
                                break;
                            case "開車":
                                $result = $calculate * 0.412;
                                break;
                            case "騎車":
                                $result = $calculate * 0.125;
                                break;
                        }
                        echo "<h3> {$kind} 共製造 {$result}公斤的二氧化碳</h3>";
                        if (!empty($result)) {
                    ?>
                            <form method="post" action="insert_his.php">
                                <input type="hidden" name="result" value="<?php echo $result; ?>">
                                <input type="hidden" name="kind" value="<?php echo $kind; ?>">
                                <input class="btn btn-primary py-2 px-4" type="submit" value="儲存結果" required>
                            </form>
                    <?php
                        }
                    }
                    ?>
            </div>
        </div>
    </div>

    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">

        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>242新北市新莊區中正路510號</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(02)2905-2000</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>053792@mail.fju.edu.tw</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>