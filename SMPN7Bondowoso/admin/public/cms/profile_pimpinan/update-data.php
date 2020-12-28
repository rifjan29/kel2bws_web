<?php
session_start();
include '../../../config/conn.php';
$id = $_POST['id'];
$nama = $_POST['nama_lengkap'];
$tgl_lahir = $_POST['tgl_lahir'];
$pendidikan = $_POST['educate_hm'];
$pengalaman = $_POST['pengalaman'];
$foto_lama =$_POST['gambar_lama'];
$foto = $_FILES['foto']['name'];
if($_FILES['foto']['name'] != null || $_FILES['foto']['name'] != ''){
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $x = explode('.',$foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $acak = rand(1,999);
    $foto_baru = $acak.'-'.$foto;
    if(move_uploaded_file($file_tmp,'../../../img_uploaded/cms/profile_pimpinan/'.$foto_baru)){
        $_SESSION['success_message'] = "Data Berhasil Tersimpan !";
        unlink("../../../img_uploaded/cms/profile_pimpinan/$foto_lama");
        mysqli_query($db,"UPDATE headmaster SET name_hm='$nama', date_hm='$tgl_lahir',educate_hm='$pendidikan',experience='$pengalaman',picture_hm='$foto_baru' WHERE id = '$id'");
        header("Location:index.php");
        exit();
    }else{
        $_SESSION['failed-message'] = "Data Terdapat Kesalahan!";
        header("Location:edit-data.php");
        exit();
    }
}else{
    $_SESSION['success_message'] = "Data Berhasil Tersimpan !";
    mysqli_query($db,"UPDATE headmaster SET name_hm='$nama',date_hm='$tgl_lahir',educate_hm='$pendidikan',experience='$pengalaman',picture_hm='$foto_lama' WHERE id = '$id'");
    header("Location:index.php");
    exit();

}

?>