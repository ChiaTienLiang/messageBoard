<?php
include_once 'sql.php';
if(!isset($_REQUEST['email']))header('Location:login.php');
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
