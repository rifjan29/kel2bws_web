<?php
    include "../../config/conn.php";


    $d = $_GET['id'];
  
    $image = mysqli_query($db, "SELECT picture_emp FROM employees WHERE id ='$d'");
    while ($data = mysqli_fetch_assoc($image)) {
        $data_image =$data['picture_emp'];
    }

    if ($data_image) {
        unlink("../../img_uploaded/guru_karyawan/$data_image");
        $sql = mysqli_query($db,"DELETE FROM employees WHERE id='$d'");
        session_start();
        $_SESSION['pesan_berhasil'] = "Data Berhasil Dihapus !";
        header('Location:../../public/guru_karyawan/');
        exit();  
    }else{
        session_start();
        $_SESSION['hapus'] = "Data Gagal Terhapus !";
        header('Location:../../public/guru_karyawan/');
        exit();
        die ("Query gagal dijalankan ".mysqli_errno($db));
    }
    // header("location: ../../../../../../../kel2bws_web/SMPN7Bondowoso/admin/public/cms/profile_sekolah/index.php");



?>