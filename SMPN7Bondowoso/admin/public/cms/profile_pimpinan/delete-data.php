<?php
include 'C:\xampp\htdocs\SMPN7Bondowoso\admin\config\conn.php';
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM headmaster WHERE id = '$id'");

header("location:index.php?pesan=input");
?>