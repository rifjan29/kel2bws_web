<?php
    include "../../config/conn.php";


    $d = $_GET['id'];
  
    $image = mysqli_query($db, "SELECT profile_logo FROM profile WHERE id ='$d'");
    while ($data = mysqli_fetch_assoc($image)) {
        $data_image =$data['profile_logo'];
    }

    if ($data_image != "") {
        unlink("../../img_uploaded/cms/profile_sekolah/$data_image");
        $sql = mysqli_query($db,"DELETE FROM profile WHERE id='$d'");
        session_start();
        $_SESSION['success_message'] = "Data Berhasil Dihapus !";
        header('Location:../../public/cms/profile_sekolah/');
        exit();  
    }else{
        session_start();
        $_SESSION['hapus'] = "Data Gagal Terhapus !";
        header('Location:../../public/cms/profile_sekolah/');
        exit();
        die ("Query gagal dijalankan ".mysqli_errno($db));
    }
    // header("location: ../../../../../../../kel2bws_web/SMPN7Bondowoso/admin/public/cms/profile_sekolah/index.php");



?>