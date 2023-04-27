<?php
session_start();
$ID = $_POST["ID"];
$Password = $_POST["password"];

$link = mysqli_connect("localhost", "root", "", "sa");
$sql = "select * from account where ID='$ID' and Password='$Password'";
$rs = mysqli_query($link, $sql);
$row = mysqli_fetch_array($rs);
if (isset($row)) {
    $_SESSION["ID"] = $row["ID"];
    $_SESSION["Name"] = $row["Name"];
    header("location:index.php");
} else {
?>
    <script>
        alert("密碼錯誤!");
       location.href = "login.php";
    </script>
<?php



}
