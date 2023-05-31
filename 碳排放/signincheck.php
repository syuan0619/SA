<?php
session_start();
$ID = $_SESSION["ID"];
date_default_timezone_set('Asia/Taipei');
$date = date('Y-m-d');
$today = date('N');
$weekDay = $_GET['weekDay'];

if ($ID != null) {
    if ($weekDay != "$today") {
?>
        <script>
            alert("簽到失敗!");
            location.href = "index.php";
        </script>
        <?php

    }

    if (isset($_GET['weekDay'])) {
        $link = mysqli_connect("localhost", "root", "", "sa");
        $sql1 = "select Date FROM signin where ID='$ID' and DATE(Date) = CURDATE()";

        $result = mysqli_query($link, $sql1);

        if (mysqli_num_rows($result) != 0) {

        ?>
            <script>
                alert("簽到失敗!");
                location.href = "index.php";
            </script>
            <?php
        } else {

            $sql  = "insert INTO signin (ID, Date) values ('$ID', '$date')";
            if (mysqli_query($link, $sql)) {

            ?>
                <script>
                    alert("簽到成功!");
                    location.href = "index.php";
                </script>
            <?php
            } else { ?>

                <script>
                    alert("簽到失敗!");

                    location.href = "index.php";
                </script>
        <?php


            }
        }
        // 查询用户的签到记录
    } else { ?>
        <script>
            alert("請先登入!");
            location.href = "login.php";
        </script>
        <?php
    }
    if (mysqli_query($link, $sql2)) {


        $sql2 = "update account set Points = Points + 1 and PointRecords='$today' where ID='$ID' ";
        if (mysqli_query($link, $sql2)) {
        ?>

            <script>
                location.href = "index.php";
            </script>
<?php
        }
    }
}


?>