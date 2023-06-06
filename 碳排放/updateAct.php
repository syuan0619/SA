<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>碳排放計算系統</title>
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
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"></i>碳排放計算系統</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <?php if ($_SESSION['Level'] == 1) { ?>
                            <li>
                                <a href="index.php" class="btn btn-primary py-2 px-4">首頁</a>
                                <a href="actAdmin.php" class="btn btn-primary py-2 px-4">活動管理</a>
                            </li>
                        <?php } else { ?>
                            <a href="index.php" class="nav-item nav-link">首頁</a>
                            <a href="actUser.php" class="nav-item nav-link">活動</a>
                            <a href="signin.php" class="nav-item nav-link">簽到</a>
                            <a href="history.php" class="nav-item nav-link">歷史紀錄</a>
                            <a href="count.php" class="nav-item nav-link">計算</a>

                            <?php if (empty($_SESSION["ID"])) { ?>
                    </div>
                    <li>
                        <a href="login.php" class="btn btn-primary py-2 px-4">登入</a>
                        <a href="insert.php" class="btn btn-primary py-2 px-4">註冊</a>
                    </li>
                <?php } else { ?>
                    <a href="information.php" class="nav-item nav-link">個人資料</a>
                </div>
                <li>
                    <a class="btn btn-primary py-2 px-4"><?php echo $_SESSION["Name"] ?> , 您好</a>
                    <a href="logout.php" class="btn btn-primary py-2 px-4">登出</a>
                </li>
        <?php }
                        } ?>
        </div>
    </div>



    </nav>

    </div>


    </div>
    </nav>

    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-0">
        </div>
        <div class="bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h1 class="text-white mb-4">新增活動</h1>
                <form>
                    <div class="row g-3">
                        <div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="eventName" placeholder="Your Name">
                                <label for="eventName">名稱</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="datetime-local" class="form-control" id="datetime" placeholder="Date & Time" data-target="#date3" />
                                <label for="datetime">開始時間</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="datetime-local" class="form-control" id="datetime" placeholder="Date & Time" data-target="#date3" />
                                <label for="datetime">結束時間</label>
                            </div>
                        </div>

                        <div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="eventName" placeholder="Your Name">
                                <label for="location">地點</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="message"></textarea>
                                <label for="participantLimit">簡介</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="eventName" placeholder="Your Name">
                                <label for="participantLimit">人數下限</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="eventName" placeholder="Your Name">
                                <label for="participantMaxLimit">人數上限</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="datetime-local" class="form-control" id="datetime" placeholder="Date & Time" data-target="#date3" />
                                <label for="datetime">報名截止時間</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="eventName" placeholder="Your Name">
                                <label for="contactPerson">聯絡人</label>
                            </div>
                        </div>


                        <div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="eventName" placeholder="Your Name">
                                <label for="message">聯絡電話</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="contactEmail">聯絡信箱</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                <label for="message">補充事項
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">確認</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
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