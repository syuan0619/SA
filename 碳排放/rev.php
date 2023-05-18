<?php
session_start();
$ID = $_SESSION['ID'];
$Password = $_POST['Password'];

$link = mysqli_connect("localhost", "root", "", "sa");
$sql  = "update account set Password = '$Password' where ID = '$ID'";
if (mysqli_query($link, $sql)) {
?>
    <script>
        alert("修改成功!");
        location.href = "login.php";
    </script>
<?php
} else { ?>

    <script>
        alert("修改失敗!");

        location.href = "reviseinformation.php";
    </script>
<?php

}
?>