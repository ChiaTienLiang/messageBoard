<?php
require_once("sql.php");
session_start();
$message = nl2br($_POST['Msg']);
$memberId = $_SESSION['id'];

$sql = "INSERT INTO message(memberId,message)VALUES('$memberId','$message')";
$result = mysqli_query($mysqli, $sql);

echo 'true';

mysqli_close($mysqli);
