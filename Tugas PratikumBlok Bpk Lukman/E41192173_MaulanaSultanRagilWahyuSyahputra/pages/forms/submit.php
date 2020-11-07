<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$lahir = $_POST['tanggal'];
$agama = $_POST['agama'];
$username= $_POST['user'];
$password = $_POST['pass'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('$nim','$nama','$lahir','$agama','$username','$password')");
 
// mengalihkan halaman kembali ke index.php
header("location:tugas.php");
 
?>