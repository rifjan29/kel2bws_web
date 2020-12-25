<?php
session_start();

$_SESSION['id_admin']='';
$_SESSION['name']='';
$_SESSION['user']='';
$_SESSION['psw']='';

unset($_SESSION['id_admin']);
unset($_SESSION['name']);
unset($_SESSION['user']);
unset($_SESSION['psw']);

session_unset();
session_destroy();
header('Location:../login.php');

?>