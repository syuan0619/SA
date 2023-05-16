<?php
session_start();
$ID = $_SESSION['ID'];
$Name = $_SESSION['Name'];
$result = $_POST['result'];
$kind = $_POST['kind'];
echo $result, $kind;
date_default_timezone_set('Asia/Taipei');
$date = date('Y-m-d H:i:s');


if ($ID != null && $Name != null) {
    $link = mysqli_connect("localhost", "root", "", "sa");
    $sql  = "insert into history (ID,  Name, CRecord, Date, kind) values ('$ID',  '$Name', '$result','$date','$kind')";
?>
    <?php
    if (mysqli_query($link, $sql)) {
    ?>
        <script>
            alert("儲存成功!");
            location.href = "count.php";
        </script>
    <?php
    } else { ?>

        <script>
            alert("儲存失敗!");

            location.href = "count.php";
        </script>
    <?php

    }
    ?>
<?php
}
?>