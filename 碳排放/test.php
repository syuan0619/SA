<?php
session_start();

// 检查管理员登录状态

// 获取报名人员列表
$link = mysqli_connect("localhost", "root", "", "sa");
$sql = "SELECT * FROM signup";
$result = mysqli_query($link, $sql);

// 处理勾选表单提交
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 获取勾选结果
    $attendees = $_POST['attendee'];

    // 更新报名人员的出席状态
    foreach ($attendees as $attendee) {
        $attendeeID = mysqli_real_escape_string($link, $attendee);
        $sql = "UPDATE signup SET Attendance = 1 WHERE ID = '$attendeeID'";
        mysqli_query($link, $sql);
    }

    echo "出席状态更新成功!";
}

?>

<form method="post" action="">
    <table>
        <tr>
            <th>姓名</th>
            <th>出席</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['Name']; ?></td>
                <td>
                    <input type="checkbox" name="attendee[]" value="<?php echo $row['ID']; ?>">
                </td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <button type="submit">更新出席狀態</button>
</form>