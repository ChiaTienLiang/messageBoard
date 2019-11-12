<?php
require_once("sql.php");
session_start();
$message = $_POST['Msg'];
$memberId = $_SESSION['id'];

$sql = "INSERT INTO message(memberId,message,update_at)VALUES('$memberId','$message',NOW())";
$result = mysqli_query($mysqli, $sql);
echo 'true';

mysqli_close($mysqli);
?>