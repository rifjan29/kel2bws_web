<?php 
session_start();
include "../../../config/conn.php";
$id = $_POST['id_page'];
$title = $_POST['title'];
$ket = $_POST['keterangan'];
$url = $_POST['url'];
$gambar_lama = $_POST['gambar_lama'];

$nama = $_FILES['file']['name'];
    if ($nama != ""){
        $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];	
        $nama_baru =  rand(1,999).'-'.$nama;
        if (in_array($ekstensi,$ekstensi_diperbolehkan)==true) {
            if(move_uploaded_file($file_tmp,'../../../img_uploaded/cms/landing_page/'.$nama_baru)){
                $sql = mysqli_query($db,"UPDATE `landing_page` SET `page_title` = '$title', `page_content` = '$ket', `page_slider` = '$nama_baru', `page_url` = '$url' WHERE `landing_page`.`id_page` = '$id'");
                unlink("../../../img_uploaded/cms/landing_page/$gambar_lama");
                session_start();
                $_SESSION['success_message'] = "Data Berhasil Tersimpan !";
                header('Location:index.php');
                exit();
            }else{
                session_start();
                $_SESSION['failed_message'] = "Gagal!";
                header("Location:edit-cms.php?id=$id");
                exit();
            }
        }else{
            session_start();
            $_SESSION['failed_message'] = "Ekstensi dilarang!";
            header("Location:edit-cms.php?id=$id");
            exit();
        }
        
    }else{
        $sql = mysqli_query($db,"UPDATE `landing_page` SET `page_title` = '$title', `page_content` = '$ket', `page_slider` = '$gambar_lama', `page_url` = '$url' WHERE `landing_page`.`id_page` = '$id'"); 
        session_start();
        $_SESSION['success_message'] = "Data Berhasil Tersimpan !";
        header('Location:index.php');
        exit();
    }
?>