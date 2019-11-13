<?php
require_once("sql.php");

$id = $_POST['id'];
// var_dump($_POST);
// echo $id;
// exit;
$sql = "SELECT message FROM message WHERE id = $id ";
$result = mysqli_query($mysqli, $sql);
$search = mysqli_fetch_assoc($result);

echo json_encode($search);
mysqli_close($mysqli);
