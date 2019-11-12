<?php
require_once("sql.php");
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM member Where email = '$email'"; //確認是否有該email
$result = mysqli_query($mysqli, $sql);
$result2 = mysqli_fetch_object($result);

if (mysqli_num_rows($result) != 0) {
    // $result = mysqli_query($mysqli, $sql);
    $pwd = $result2->password;
    $test = password_verify($password, $pwd);
    // var_dump(mysqli_fetch_object($result)->name);
    if ($test != 1) {
        mysqli_free_result($result);
        echo 'false';
    } else {
        $result = mysqli_query($mysqli, $sql);
        // $name = $result2->name;
        session_start();
        $_SESSION['name'] = $result2->name;
        $_SESSION['id'] = $result2->id;
        echo 'true';
    }
} else {
    mysqli_free_result($result);
    echo 'false';
}
mysqli_close($mysqli);
