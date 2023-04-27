<?php
session_start();
    $ID = $_POST['ID'];
    $Password = $_POST['Password'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];


    if ($ID != null && $Password != null) {
        $link = mysqli_connect("localhost", "root", "", "SA");
        $sql  = "insert into user (ID, Password, Name, Phone, Email) values ('$ID', '$Password', '$Name', '$Phone','$Email')";
?>
        <?php
        if (mysqli_query($link, $sql)) {
        ?>
            <script>
                alert("註冊成功!");
                location.href = "login.php";
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("註冊失敗!");
                location.href = "registercheck.php";
            </script>
        <?php

        }
        ?>
<?php
    }
?>