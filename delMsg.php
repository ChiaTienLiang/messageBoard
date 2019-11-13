<?php
require_once("sql.php");
session_start();
$id = $_POST['id'];


$sql = "DELETE FROM message WHERE id = $id";
$result = mysqli_query($mysqli, $sql);

echo 'true';

mysqli_close($mysqli);
