<?php
include 'C:\xampp\htdocs\SMPN7Bondowoso\admin\config\conn.php';
$id = $_POST['id'];
$nama = $_POST['nama_lengkap'];
$tgl_lahir = $_POST['tgl_lahir'];
$pendidikan = $_POST['educate_hm'];
$pengalaman = $_POST['pengalaman'];
$foto = $_FILES['foto']['name'];
if($_FILES['foto']['name'] != null || $_FILES['foto']['name'] != ''){
    $target_dir = "../../../img_uploaded/";
    $target_file = $target_dir . $foto;
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)){
        mysqli_query($db,"UPDATE headmaster SET name_hm='$nama',date_hm='$tgl_lahir',educate_hm='$pendidikan',experience='$pengalaman',picture_hm='$foto' WHERE id = '$id'");
    }
}
else{
    mysqli_query($db,"UPDATE headmaster SET name_hm='$nama',date_hm='$tgl_lahir',educate_hm='$pendidikan',experience='$pengalaman' WHERE id = '$id'");
}

header("location:index.php?pesan=input");
?>