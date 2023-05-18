<?php
session_start();
$ID = $_SESSION["ID"];
$link = mysqli_connect("localhost", "root", "", "sa");

if ($ID != null) {
    $sql2 = "update account set Points = Points + 1 where ID='$ID' ";
    if (mysqli_query($link, $sql2)) {
?>

        <script>
            alert("成功!");
            location.href = "index.php";
        </script>
<?php
    }
}
