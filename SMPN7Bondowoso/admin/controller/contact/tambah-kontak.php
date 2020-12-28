<?php 
session_start();
include  "../../config/conn.php";

$data_email = $_POST['email'];
$data_nomor = $_POST['contact'];

$query = mysqli_query($db, "INSERT INTO `contact` (`id`, `contact`, `email`) VALUES (NULL, '$data_nomor', '$data_email')");
if(isset($query)){
	$_SESSION['pesan_berhasil'] = "Data berhasil tersimpan !";
	header('Location:../../public/cms/contact/');
	exit();
}else{
	$_SESSION['pesan_gagal'] = "Data gagal tersimpan !";
	header('Location:../../public/cms/contact/');
	exit();
}
?>