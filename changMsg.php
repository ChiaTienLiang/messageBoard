<?php
require_once("sql.php");
session_start();
$id = $_POST['id'];
$message = nl2br($_POST['Msg']);
echo $id;
echo $message;

$sql = "UPDATE message SET message = ? WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('si', $message, $id);
$stmt->execute();

// echo 'true';

mysqli_close($mysqli);
