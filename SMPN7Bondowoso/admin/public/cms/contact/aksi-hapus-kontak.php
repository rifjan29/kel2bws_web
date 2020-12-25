<?php
	include  "../../../config/conn.php";
	$d = $_GET['id'];
	$delete = mysqli_query($db, "DELETE FROM contact WHERE id = '$d'");

	if($delete){
		header("location:../../../../../../../kel2bws_web/SMPN7Bondowoso/admin/public/cms/contact/index.php?pesan=berhasil");
	}else{
		header("location:../../../../../../../kel2bws_web/SMPN7Bondowoso/admin/public/cms/contact/index.php?pesan=gagal");
}
