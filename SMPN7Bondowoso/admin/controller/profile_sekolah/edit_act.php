<?php
include 'C:\xampp\htdocs\tugas_web\SMPN7Bondowoso\admin\config\conn.php';

    $title = $_POST['title'];
    $sejarah = $_POST['sejarah_sekolah'];
    $visi = $_POST['visi'];
    $misi = $_POST['misi_sekolah'];
    $path = $_POST['url'];
    $alamat = $_POST['alamat'];

mysqli_query($db, "UPDATE profile SET profile_title='$title',profile_history='$sejarah',profile_visi='$visi',profile_logo='$fileName',profile_location='$path',profile_address='$alamat' where id='$id'");

header("location:index.php?pesan=update");
?>
