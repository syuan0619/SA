<?php
session_start();
$ID = $_SESSION['ID'];
$Name = $_SESSION['Name'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <title>登入</title>
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
                        <a href="login.php" class="nav-item nav-link">登入</a>
                        <a href="signin.php" class="nav-item nav-link">簽到</a>
                        <a href="history.php" class="nav-item nav-link">歷史紀錄</a>
                        <a href="count.php" class="nav-item nav-link">計算</a>
                    </div>
                </div>
                <div>
                    <?php if (empty($_SESSION["ID"])) { ?>
                        <li><a href="login.php" class="btn btn-primary py-2 px-4">登入</a></li>
                    <?php } else { ?>
                        <li> <a class="btn btn-primary py-2 px-4"><?php echo $_SESSION["Name"] ?> , 您好</a>
                            <a href="logout.php" class="btn btn-primary py-2 px-4">登出</a>
                        </li>

                    <?php } ?>

                </div>

        </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">歷史紀錄</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">歷史紀錄</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->




    <table align="center" width=500>
        <h3 align="center">查詢日期自 <?php echo $start_date ?> 到 <?php echo $end_date ?></h3>
        <tr>
            <td>日期</td>
            <td>類型</td>
            <td>碳排放紀錄</td>
        </tr>
        <?php

        $aaa = array();
        $bbb = array();

        $timestamp = strtotime("$start_date");
        $aa = date("n", $timestamp);
        $timestamp = strtotime("$end_date");
        $bb = date("n", $timestamp);


        if ($ID != null && $Name != null) {
            $link = mysqli_connect("localhost", "root", "", "sa");
            $C = "select SUM(Crecord) FROM history where Date>='$start_date' and Date<='$end_date' ";
            $sql  = "select * from history where Name='$Name' and Date>='$start_date' and Date<='$end_date' order by Date";
            $result = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>", $row['Date'], "</td><td>", $row['kind'], "</td><td>", $row['Crecord'], "</td><td>", "</td></tr>";
                $timestamp = strtotime($row["Date"]);
                if (date("n", $timestamp) == "$aa") {
                    array_push($aaa, $row['Crecord']);
                };
                if (date("n", $timestamp) == "$bb") {
                    array_push($bbb, $row['Crecord']);
                };
                echo "<br>";
            }
        } else {
        ?>
            <script>
                alert("請先登入!");
                location.href = "login.php";
            </script>
        <?php

        } ?>
        <div class="container text-center my-1 pt-1 pb-1">
            <?php

            $timestamp = strtotime("$start_date");
            echo date("n", $timestamp), "月您的碳排放量為:", array_sum($aaa);
            echo "<br>";

            $timestamp = strtotime("$end_date");
            echo date("n", $timestamp), "月您的碳排放量為:", array_sum($bbb);

            echo "<br>";
            $c = array_sum($aaa) / array_sum($bbb);
            $c = number_format($c, 2);
            echo "您的碳排放量差距了", $c, "倍";
            ?>
        </div>




    </table>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
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
</body>


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