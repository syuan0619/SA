<?php
session_start();
$actName = $_POST["actName"];
$Name = $_POST['name'];
$People = $_POST['select1'];
$Phone = $_POST['datetime'];
$requirement = $_POST['message'];
$Email = $_POST['email'];
$link = mysqli_connect("localhost", "root", "", "sa");
$sql  = "insert into signup (Name, Phone, People, requirement, Email,actName) values ('$Name', '$People', '$Phone','$requirement','$Email','$actName')";

if (mysqli_query($link, $sql)) {
?>
    <script>
        alert("活動報名成功!");
        location.href = "actUser.php";
    </script>
<?php
} else { ?>

    <script>
        alert("活動報名失敗!");
    </script>
<?php

}
?>