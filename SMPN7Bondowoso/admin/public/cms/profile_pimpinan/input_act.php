<?php
include 'C:\xampp\htdocs\SMPN7Bondowoso\admin\config\conn.php';
$nama = $_POST['nama_lengkap'];
$tgl_lahir = $_POST['tgl_lahir'];
$pendidikan = $_POST['educate_hm'];
$pengalaman = $_POST['pengalaman'];
$foto = $_FILES['foto']['name'];
$target_dir = "../../../img_uploaded/";
$target_file = $target_dir . $foto;
if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)){
    mysqli_query($db,"INSERT INTO headmaster(name_hm,date_hm,educate_hm,experience,picture_hm) VALUES('$nama','$tgl_lahir','$pendidikan','$pengalaman','$foto')");
}

header("location:index.php?pesan=input");
?>