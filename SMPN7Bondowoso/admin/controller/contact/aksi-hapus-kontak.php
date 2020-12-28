<?php
session_start();
include  "../../config/conn.php";
$d = $_GET['id'];
// var_dump($d);
$delete = mysqli_query($db, "DELETE FROM contact WHERE id = '$d'");
if($delete){
	$_SESSION['pesan_hapus'] = "Data berhasil dihapus !";
    header('Location:../../public/cms/contact/');
    exit();
}else{
	$_SESSION['pesan_gagal'] = "Data gagal tersimpan !";
    header('Location:../../public/cms/contact/');
    exit();
}
?>