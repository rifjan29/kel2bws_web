<?php
session_start();
include  "../../config/conn.php";
$id = $_POST['id'];


$data_email = $_POST['email'];
$data_nomor = $_POST['contact'];
// Mengganti data ke Database
$update = mysqli_query($db, "UPDATE contact SET contact ='$data_nomor', email='$data_email' where id = '$id'");

if(isset($update)){
    $_SESSION['pesan_berhasil'] = "Data berhasil tersimpan !";
    header('Location:../../public/cms/contact/');
    exit();
}else{
    $_SESSION['pesan_gagal'] = "Data gagal tersimpan !";
    header('Location:../../public/cms/contact/');
    exit();
}
?>
