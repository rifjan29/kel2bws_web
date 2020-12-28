<?php
session_start();
include '../../../config/conn.php';

if(isset($_POST['save'])){
    $title = $_POST['title'];
    $ket = $_POST['keterangan'];
    $url = $_POST['url'];
    $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];	
    $nama_baru =  rand(1,999).'-'.$nama;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){			
            move_uploaded_file($file_tmp,'../../../img_uploaded/cms/landing_page/'.$nama_baru);
            $sql = mysqli_query($db,"INSERT INTO landing_page VALUES (NULL,'$title', '$ket', '$nama_baru', '$url')");
            if($sql){
                $_SESSION['pesan_berhasil'] = "Data berhasil tersimpan !";
                header('Location:index.php');
                exit();
            }else{
                $_SESSION['pesan_gagal1'] = "Data gagal tersimpan !";
                header('Location:add-cms.php');
                exit();
            }
        }else{
            $_SESSION['pesan_gagal2'] = "Ukuruan File Terlalu Besar !";
            header('Location:add-cms.php');
            exit();            
        }
    }else{
            $_SESSION['pesan_gagal3'] = "Ekstensi File tidak diperbolehkan !";
            header('Location:add-cms.php');
            exit();            
    }
}
  



?>