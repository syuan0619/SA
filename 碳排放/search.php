<?php
    // 資料獲取
    $start_date = $_GET["start_date"];
    $end_date = $_GET["end_date"];
    // 連接
    $conn = new mysqli("localhost:8111", "123456789", "123456789", "test");
    // // 查詢
    $result = $conn->query("SELECT * FROM history WHERE Time BETWEEN '$start_date' AND '$end_date'");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . $row["column1"] . " - " . $row["column2"] . "</p>";
        }
    } else {
        echo "沒有符合條件的資料。";
    }
    $conn->close();
?>