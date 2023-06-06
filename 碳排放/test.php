<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="upload" name="upload">
</form>

<?php
$link = mysqli_connect("localhost", "root", "", "sa");
$sql = "SELECT MAX(ID) AS maxId FROM event";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$maxId = $row['maxId'];

if (isset($_POST['upload'])) {
    $input_image = $_FILES['image']['name'];
    $image_info = @getimagesize($_FILES['image']['tmp_name']);
    $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp');

    // Get the file extension and convert it to lowercase
    $file_extension = strtolower(pathinfo($input_image, PATHINFO_EXTENSION));

    if ($image_info === false || !in_array($file_extension, $allowed_extensions)) {
        echo "所選檔案不是圖片格式。";
    } else {
        $rand = rand(10000, 99999);
        $image_new_name = "活動" . ($maxId + 1) . '.' . $file_extension;
        $image_upload_path = "C:/xampp/htdocs/SA-master/碳排放/img/" . $image_new_name;
        $is_uploaded = move_uploaded_file($_FILES["image"]["tmp_name"], $image_upload_path);

        if ($is_uploaded) {
            echo '圖片上傳成功!';
            echo $image_new_name;
        } else {
            echo '圖片上傳失敗，請檢查檔案大小是否超過2MB!';
        }
    }
}
?>