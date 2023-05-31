<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
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
    <style>
        .popup {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            /* 自定义样式 */
            width: 200px;
            color: #333;
            font-family: Arial, sans-serif;
            font-size: 14px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        /* 鼠标悬停样式 */
        .popup:hover {
            background-color: #eaeaea;
        }
    </style>
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

                    </div>
                </div>
                <div>
                    <?php if (empty($_SESSION["ID"])) { ?>
                        <li>
                            <a href="login.php" class="btn btn-primary py-2 px-4">登入</a>
                            <a href="insert.php" class="btn btn-primary py-2 px-4">註冊</a>
                        </li>

                    <?php } else { ?>

                        <li>
                            <a href="information.php" class="nav-item nav-link">個人資料</a>
                            <a class="btn btn-primary py-2 px-4"><?php echo $_SESSION["Name"] ?> , 您好</a>
                            <a href="logout.php" class="btn btn-primary py-2 px-4">登出</a>
                        </li>

                    <?php } ?>

                </div>

        </div>

        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">活動</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Team</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Team Start -->
    <div class="container-xxl pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal"> 你有沒有空? 我們一起去! </h5>
                <h1 class="mb-5"></h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div id="myObject1">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/活動1.jpg" alt="">
                            </div>
                        </div>
                        <div id="myPopup1" class="popup">
                            活動介紹：<br>
                            活動時間：<br>
                            報名截止時間：
                        </div>
                        <script>
                            var object1 = document.getElementById("myObject1");
                            var popup1 = document.getElementById("myPopup1");

                            object1.addEventListener("mouseover", function() {
                                popup1.style.display = "block";
                            });

                            object1.addEventListener("mouseout", function() {
                                popup1.style.display = "none";
                            });
                        </script>
                        <h5 class="mb-0">吃素21天挑戰</h5>
                        <small>2023/7</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-primary mx-1" href="signup.php">報名</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div id="myObject2">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/活動2.jpg" alt="">
                            </div>
                        </div>
                        <div id="myPopup2" class="popup">
                            活動介紹：<br>
                            活動時間：<br>
                            報名截止時間：
                        </div>
                        <script>
                            var object2 = document.getElementById("myObject2");
                            var popup2 = document.getElementById("myPopup2");

                            object2.addEventListener("mouseover", function() {
                                popup2.style.display = "block";
                            });

                            object2.addEventListener("mouseout", function() {
                                popup2.style.display = "none";
                            });
                        </script>
                        <h5 class="mb-0">救救我的家-海洋生態保育講座</h5>
                        <small>2023/7/18</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-primary mx-1" href="報名.html">報名</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div id="myObject3">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/活動3.jpg" alt="">
                            </div>
                        </div>
                        <div id="myPopup3" class="popup">
                            活動介紹：<br>
                            活動時間：<br>
                            報名截止時間：
                        </div>
                        <script>
                            var object3 = document.getElementById("myObject3");
                            var popup3 = document.getElementById("myPopup3");

                            object3.addEventListener("mouseover", function() {
                                popup3.style.display = "block";
                            });

                            object3.addEventListener("mouseout", function() {
                                popup3.style.display = "none";
                            });
                        </script>
                        <h5 class="mb-0">象山淨山</h5>
                        <small>2023/9/25</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-primary mx-1" href="報名.html">報名</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div id="myObject4">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/活動4.jpg" alt="">
                            </div>
                        </div>
                        <div id="myPopup4" class="popup">
                            活動介紹：<br>
                            活動時間：<br>
                            報名截止時間：
                        </div>
                        <script>
                            var object4 = document.getElementById("myObject4");
                            var popup4 = document.getElementById("myPopup4");

                            object4.addEventListener("mouseover", function() {
                                popup4.style.display = "block";
                            });

                            object4.addEventListener("mouseout", function() {
                                popup4.style.display = "none";
                            });
                        </script>
                        <h5 class="mb-0">一起去種樹!</h5>
                        <small>2023/11/11</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-primary mx-1" href="報名.html">報名</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
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