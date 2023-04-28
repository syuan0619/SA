<?php
session_start();
if (!isset($_SESSION["ID"])) {
    header("Location: login.php");
}
$user_id = $_SESSION["ID"];
$mysqli = new mysqli("localhost", "root", "", "sa");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
$today = date("Y-m-d");
$query = "SELECT * FROM signin WHERE ID = '$ID' AND signin_date = '$today'";
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
?>
    <script>
        alert("註冊成功!");
        location.href = "index.php";
    </script>
<?php
} else {
    $now = date("H:i:s");
    $query = "INSERT INTO signin (ID, signin_date, signin_time) VALUES ('$ID', '$today', '$now')";
    $mysqli->query($query);
?>
    <script>
        alert("註冊成功!");
        location.href = "index.php";
    </script><?
            }
