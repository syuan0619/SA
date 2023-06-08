<?php
session_start();
$ID = $_SESSION["ID"];
date_default_timezone_set('Asia/Taipei');
$date = date('Y-m-d');
$today = date('N');
$weekDay = $_GET['weekDay'];

if ($ID != null) {
    if ($weekDay != $today) {
?>
        <script>
            alert("簽到失敗!");
            location.href = "index.php";
        </script>
        <?php
        exit; // 簽到失敗後立即結束程式
    }

    if (isset($_GET['weekDay'])) {
        $link = mysqli_connect("localhost", "root", "", "sa");
        if (!$link) {
            die("資料庫連線失敗: " . mysqli_connect_error());
        }

        $sql = "select RecordDate FROM points where ID='$ID' and DATE(RecordDate) = CURDATE()";
        $result = mysqli_query($link, $sql);
        if (!$result) {
            die("查詢失敗: " . mysqli_error($link));
        }

        if (mysqli_num_rows($result) != 0) {
            // ...
        } else {
            // ...

            $sql = "insert INTO points (ID, RecordDate, Reason,Points) values ('$ID', '$date', '簽到','1')";
            if (mysqli_query($link, $sql)) {
        ?>
                <script>
                    alert("簽到成功!");
                    location.href = "signin.php";
                </script>
            <?php            } else {
            ?>
                <script>
                    alert("簽到失敗!");
                    location.href = "index.php";
                </script>
        <?php
                exit; // 簽到失敗後立即結束程式
            }
        }
    } else {
        ?>
        <script>
            alert("請先登入!");
            location.href = "login.php";
        </script>
<?php
        exit; // 若未提供 weekDay 參數，立即結束程式
    }
}

// 若程式執行到這裡，表示有未處理到的情況，顯示簽到失敗
