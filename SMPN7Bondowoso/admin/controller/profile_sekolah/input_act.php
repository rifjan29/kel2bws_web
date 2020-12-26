<?php
include "../../config/conn.php";

if (isset($_POST['save'])){
    // Simpan Foto 
    $fileName = $_FILES['foto']['name'];
    // Ambil data dari Form
    $title = $_POST['title'];
    $sejarah = $_POST['sejarah_sekolah'];
    $visi = $_POST['visi'];
    $misi = $_POST['misi_sekolah'];
    $path = $_POST['url'];
    $alamat = $_POST['alamat'];

    if (!$fileName == "") {
        // Simpan di Folder Gambar
        move_uploaded_file($_FILES['foto']['tmp_name'], "../../img_uploaded/cms/profile_sekolah/".$_FILES['foto']['name']);
        // Menyimpan data ke Database
       $sql =  mysqli_query($db,"INSERT INTO profile VALUES ('','$title','$sejarah','$visi','$misi','$fileName','$path','$alamat')");
        if ($sql) {
            session_start();
            $_SESSION['success_message'] = "Data Berhasil Tersimpan !";
            header('Location: ../../public/cms/profile_sekolah/');
            exit();    
        }else{
            session_start();
            $_SESSION['failed_message'] = "Data Gagal Tersimpan !";
            header('Location: ../../public/cms/profile_sekolah/add-data.php');
            exit();
            die ("Query gagal dijalankan ".mysqli_errno($db));
        }
    }else{
        session_start();
        $_SESSION['failed_picture'] = "Gambar Tidak Boleh Kosong !";
        header('Location: ../../public/cms/profile_sekolah/add-data.php');
        exit();
    }
  
}
    



?>