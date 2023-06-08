<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>報名</title>
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
                            <a class="btn btn-primary py-2 px-4">
                                <?php echo $_SESSION["Name"] ?> , 您好
                            </a>
                            <a href="logout.php" class="btn btn-primary py-2 px-4">登出</a>
                        </li>

                    <?php } ?>
                </div>

        </div>

        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="text-white mb-4">報名 <?php echo $_POST["actName"]; ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Signup</li>
                    </ol>
                    <h5 class="text-white mb-4">
                        <table class="container-xxl py-5">


                            <thead>
                                <tr>
                                    <th>報名開始日期</th>
                                    <th>報名截止日期</th>
                                    <th>活動地點</th>
                                    <th>主辦人</th>
                                    <th>聯絡信箱</th>
                                    <th>連絡電話</th>
                                    <th>注意事項</th>
                                    <th>可報名人數</th>
                                    <th>目前報名人數</th>
                                </tr>
                            </thead>
                            <?php
                            $Name = $_POST["actName"];
                            $link = mysqli_connect("localhost", "root", "", "sa");
                            $sql = "select * from event where Name = '$Name'";
                            $result = mysqli_query($link, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr><td>", $row['startDate'], "</td><td>", $row['endDate'], "</td><td>", $row['Location'], " </td><td>", $row['Organiser'], "</td><td>", $row['Email'], " </td><td>", $row['Phone'], " </td><td>", $row['Note'], "<td>", $row['People'], " </td>";
                            }
                            $link1 = mysqli_connect("localhost", "root", "", "sa");
                            $sql1 = "SELECT SUM(People) AS TotalPeople FROM signup WHERE actName = '$Name'";
                            $result1 = mysqli_query($link1, $sql1);
                            while ($row = mysqli_fetch_assoc($result1)) {
                                echo "<td>", $row['TotalPeople'], "</td></tr>";
                            }

                            ?>



                        </table>
                    </h5>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Reservation Start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-0">
        </div>
        <div class=" bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h1 class="text-white mb-4">我要報名</h1>
                <h1 class="text-white mb-4"><?php echo $_POST["actName"]; ?></h1>
                <form action="actCheck.php" method="post">
                    <div class="row g-3">
                        <div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                <label for="name">姓名</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                <label for="email">電子信箱</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-floating">
                                <input type="text" class="form-control datetimepicker-input" name="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" required>
                                <label for="datetime">連絡電話</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-floating">
                                <select class="form-select" name="select1">
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                    <option value="3"> 4 </option>
                                    <option value="3"> 5 </option>
                                </select>
                                <label for="select1">人數</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" name="message" style="height: 100px"></textarea>
                                <label for="message">特殊需求(吃素、身障人士......)</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">確認</button>
                            <input type="hidden" name="actName" value="<?php echo $_POST["actName"]; ?>">
                            <input type="hidden" name="dbaction" value="update">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Start -->


    <!-- Footer Start -->
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