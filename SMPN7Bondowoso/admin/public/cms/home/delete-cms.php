<?php
// include database connection file
session_start();
include "../../../config/conn.php";
// Get id from URL to delete that user
 $id = $_GET['id_page'];
 // Delete user row from table based on given id
 
 $sql  = mysqli_query($db,"SELECT page_slider FROM landing_page WHERE id_page= '$id'");
 while ($data = mysqli_fetch_assoc($sql)) {
    $gambar = $data['page_slider'];
 }

 if($sql != ""){
    unlink("../../../img_uploaded/cms/landing_page/$gambar");
    $delete = mysqli_query($db , "DELETE FROM landing_page WHERE id_page='$id'");
	$_SESSION['pesan_hapus'] = "Data berhasil dihapus !";
    header('Location:index.php');
    exit();
}else{
	$_SESSION['pesan_gagal'] = "Data gagal tersimpan !";
    header('Location:edit-data.php');
    exit();
}
?>
