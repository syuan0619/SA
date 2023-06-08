<?php
session_start();
$actName = $_POST["actName"];
$Name = $_POST['name'];
$People = $_POST['select1'];
$Phone = $_POST['datetime'];
$requirement = $_POST['message'];
$Email = $_POST['email'];
$link = mysqli_connect("localhost", "root", "", "sa");

// 取得可報名人數
$sql2 = "SELECT People FROM event WHERE Name = '$actName'";
$result2 = mysqli_query($link, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$availablePeople = $row2['People'];

// 取得已報名人數總和
$sql3 = "SELECT SUM(People) AS TotalPeople FROM signup WHERE actName = '$actName'";
$result3 = mysqli_query($link, $sql3);
$row3 = mysqli_fetch_assoc($result3);
$totalPeople = $row3['TotalPeople'];

// 檢查報名人數是否超過可報名人數
if ($totalPeople + $People <= $availablePeople) {
    $sql = "INSERT INTO signup (Name, Phone, People, requirement, Email, actName) VALUES ('$Name', '$Phone', '$People', '$requirement', '$Email', '$actName')";
    if (mysqli_query($link, $sql)) {
?>
        <script>
            alert("活動報名成功!");
            location.href = "actUser.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("活動報名失敗!");
            location.href = "actUser.php";
        </script>
    <?php
    }
} else {
    ?>
    <script>
        alert("報名人數已滿，無法報名!");
        location.href = "actUser.php";
    </script>
<?php
}
?>