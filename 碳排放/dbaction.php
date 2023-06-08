<?php
SESSION_start();
$dbaction = $_POST['dbaction'];
//insert
$Name = $_POST['Name'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$Location = $_POST['Location'];
$Summery = $_POST['Summery'];
$People = $_POST['People'];
$Date = $_POST['Date'];
$Organiser = $_POST['Organiser'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Note = $_POST['Note'];
$link = mysqli_connect("localhost", "root", "", "sa");
$sql = "SELECT MAX(ID) AS maxId FROM event";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$maxId = $row['maxId'];

//上傳圖片
if (isset($_POST['upload'])) {
    $input_image = $_FILES['image']['name'];
    $image_info = @getimagesize($_FILES['image']['tmp_name']);//確認是否為圖檔
    $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp');

    $file_extension = strtolower(pathinfo($input_image, PATHINFO_EXTENSION));//獲得檔案副檔名

    if ($image_info === false || !in_array($file_extension, $allowed_extensions)) {
        echo "所選檔案不是圖片格式。";
    } else {
        $image_new_name = "活動" . ($maxId) . '.' . $file_extension;
        $image_upload_path = "img1/" . $image_new_name;
        $is_uploaded = move_uploaded_file($_FILES["image"]["tmp_name"], $image_upload_path);

        if ($is_uploaded) {
?>
            <script>
                alert("上傳成功!");
                location.href = "addACt.php";
            </script>
        <?php        } else {
        ?>
            <script>
                alert("圖片上傳失敗，請檢查檔案大小是否超過2MB！");
                location.href = "addAct.php";
            </script>
        <?php        }
    }
}



$link = mysqli_connect('localhost', 'root', '', 'sa');

if ($dbaction == "insert") {

    //這裡是新增的語法
    $sql  = "insert into event (Name, startDate,endDate,Location,Summery,People,Date,Organiser,Phone,Email,Note) values ('$Name', '$startDate','$endDate','$Location','$Summery','$People','$Date','$Organiser','$Phone','$Email','$Note')";

    if (mysqli_query($link, $sql)) {
        ?>
        <script>
            alert("新增成功!");
            location.href = "actAdmin.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("新增失敗!");
            location.href = "actAdmin.php";
        </script>
    <?php
    }
    ?>
    <?php
} else if ($dbaction == "update") {
    //這裡是修改

    $sql = "update event SET startDate='$startDate', endDate='$endDate', Location='$Location', Summery='$Summery', People='$People', Date='$Date', Organiser='$Organiser', Phone='$Phone', Email='$Email', Note='$Note' WHERE Name='$Name'";

    if (mysqli_query($link, $sql)) {
    ?>
        <script>
            alert("修改成功!");
            location.href = "actAdmin.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("修改失敗!");
        </script>
    <?php
    }


    ?>
    <?php
} else if ($dbaction == "delete") {
    //這裡是刪除
    $sql = "DELETE FROM event WHERE Name='$Name'";
    if (mysqli_query($link, $sql)) {
    ?>
        <script>
            alert("删除成功!");
            location.href = "actAdmin.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("删除失败: <?php echo mysqli_error($link); ?>");
        </script>
    <?php
    }
    ?>

<?php
}
?>