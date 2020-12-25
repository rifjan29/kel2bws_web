<?php 
	include  "../../../config/conn.php";

	$data_email = $_POST['email'];
	$data_nomor = $_POST['contact'];

	$query = mysqli_query($db, "INSERT INTO `contact` (`id`, `contact`, `email`) VALUES (NULL, '$data_nomor', '$data_email')");
	if(isset($query)){
			header("location:index.php?pesan=berhasil");
	}else{
			header("location:index.php?pesan=gagal");
	}
?>