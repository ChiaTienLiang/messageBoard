<?php
require_once("sql.php");
$sql = "SELECT member.name,message.id,message.message,message.create_at,message.memberId FROM message,member WHERE member.id=message.memberId ORDER BY create_at DESC";
$result = mysqli_query($mysqli, $sql);
$num = mysqli_num_rows($result); //取得數量
for ($i = 0; $i < $num; $i++) {
    $search[$i] = mysqli_fetch_assoc($result);
}

echo json_encode($search);

mysqli_close($mysqli);
