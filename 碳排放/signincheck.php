<?php
session_start();
$ID = $_SESSION["ID"];
date_default_timezone_set('Asia/Taipei');
$date = date('Y-m-d');
$today = date('N');
$weekDay = $_GET['weekDay'];
if ($weekDay != "$today") {
?>
    <script>
        alert("簽到失敗!");
        location.href = "index.php";
    </script>
    <?php

}

if ($ID != null) {
    if (isset($_GET['weekDay'])) {
        $link = mysqli_connect("localhost", "root", "", "sa");
        $sql1 = "select Date FROM signin where ID='$ID' and DATE(Date) = CURDATE()";

        // 查询用户的签到记录
        $result = mysqli_query($link, $sql1);

        if (mysqli_num_rows($result) != 0) {
            // 用户已经签到
    ?>
            <script>
                alert("簽到失敗!");
                location.href = "index.php";
            </script>
            <?php
        } else {

            $sql  = "insert INTO signin (ID, Date, weekDay) values ('$ID', '$date', '$weekDay')";
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
}


?>