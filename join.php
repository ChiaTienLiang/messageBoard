<?php
require_once("sql.php");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM member Where email = '$email'"; //確認email是否已被註冊

$result = mysqli_query($mysqli, $sql);
// var_dump($result->num_rows);

if (mysqli_num_rows($result) != 0) {
    mysqli_free_result($result);
    // header("Location:signUp.php?errorMesg='false'");
    echo 'false';
} else {
    $sql = "INSERT INTO member(name,email,password,create_at)VALUES('$name','$email','$password',NOW())";
    $result = mysqli_query($mysqli, $sql);
    // header("Location:signUp.php?errorMesg='true'");
    echo 'true';
}
mysqli_close($mysqli);
