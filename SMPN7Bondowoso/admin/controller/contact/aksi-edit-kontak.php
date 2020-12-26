<?php
	include  "../../../config/conn.php";
$d = $_POST['id'];
$data_email = $_POST['email'];
$data_nomor = $_POST['contact'];
    // Menyimpan data ke Database
    $update = mysqli_query($db, "UPDATE contact SET contact ='$data_nomor', email='$data_email' where id = '$d'");

if(isset($update)){
    header("location: ../../../../../../../kel2bws_web/SMPN7Bondowoso/admin/public/cms/contact/index.php?pesan=berhasil");
}else{
    header("location:../../../../../../../kel2bws_web/SMPN7Bondowoso/admin/public/cms/contact/index.php?pesan=gagal");
}
?>
