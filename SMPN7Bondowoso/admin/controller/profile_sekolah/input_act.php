<?php
include 'C:\xampp\htdocs\tugas_web\SMPN7Bondowoso\admin\config\conn.php';

if (isset($_POST['save'])){
    // Simpan Foto 
    $fileName = $_FILES['foto']['name'];
    // Simpan di Folder Gambar
    move_uploaded_file($_FILES['foto']['tmp_name'], "../images/cms/profile_sekolah/".$_FILES['foto']['name']);
    // Ambil data dari Form
    $title = $_POST['title'];
    $sejarah = $_POST['sejarah_sekolah'];
    $visi = $_POST['visi'];
    $misi = $_POST['misi_sekolah'];
    $path = $_POST['url'];
    $alamat = $_POST['alamat'];
    // Menyimpan data ke Database
    mysqli_query($db,"INSERT INTO profile VALUES ('','$title','$sejarah','$visi','$misi','$fileName','$path','$alamat')");
   
}
    echo "<script>alert('Ekstensi');window.location='index.php';</script>";



?>