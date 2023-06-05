<?php
$link = mysqli_connect("localhost", "root", "", "sa");
$sql = "SELECT MAX(ID) AS maxId FROM event";
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $maxID = $row['maxId'];
}
for ($i = 0; $i <= $maxID; $i++) {
    $link = mysqli_connect("localhost", "root", "", "sa");
    $sql  = "select Summery,DATE_FORMAT(Date, '%Y-%m-%d %H:%i') AS Date,Location,DATE_FORMAT(endDate, '%Y-%m-%d %H:%i') AS endDate from event  where ID=$i limit 1";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "活動簡介：", $row['Summery'], "<br> 活動時間：", $row['Date'], "<br>活動地點：", $row['Location'], "<br>報名截止時間：", $row['endDate'], "<br></tr>";
        echo $row['Date'];
    }
}
