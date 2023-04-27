<?php
session_start();
$account = $_POST["account"];
$password = $_POST["password"];

$link = mysqli_connect("localhost", "root", "12345678", "sa");
$sql = "select * from account where ID='$ID' and Password='$password'";
$rs = mysqli_query($link, $sql);
$row = mysqli_fetch_array($rs);
if (isset($row)) {


    $_SESSION["level"] = $row["level"];
    $_SESSION["name"] = $row["name"];
    $_SESSION["account"] = $row["account"];
    header("location:index.php");
} else {
?>
    <script>
        alert("密碼錯誤!");
        location.href = "login.php";
    </script>
<?php



}
