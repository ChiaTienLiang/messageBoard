<?php
require_once("sql.php");
session_start();
$id = $_POST['id'];
$message = $_POST['Msg'];
echo $id;
echo $message;

$sql = "UPDATE message SET message = $message WHERE id = $id";
$result = mysqli_query($mysqli, $sql);

// echo 'true';

// mysqli_close($mysqli);
