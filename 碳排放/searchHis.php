<?php
session_start();
$ID = $_SESSION['ID'];
$Name = $_SESSION['Name'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
echo $start_date, $end_date;
?>
<table class="List" width=500>
    <caption class="ListCap">歷史紀錄
    <tr>
        <td>日期</td>
        <td>類型</td>
        <td>碳排放紀錄</td>
    </tr>
    </caption>
    <?php


    if ($ID != null && $Name != null) {
        $link = mysqli_connect("localhost", "root", "", "sa");
        $sql  = "select * from history   order by Date";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>", $row['Date'], "</td><td>", $row['kind'], "</td><td>", $row['Crecord'], "</td><td>", "</td></tr>";
        }
    } else {
    ?>
        <script>
            alert("請先登入!");
            location.href = "login.php";
        </script>
    <?php

    }
