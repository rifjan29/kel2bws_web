<?php
session_start();
require_once('../config/conn.php');
	// untuk Hapus data mahasiswa berdasarkan id mahasiswa
	$id = $_GET['id'];
	$delete = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa= ?";
	$row = $conn->prepare($delete);
    $row->execute(array($id));
    
    header("Location:../index.php");
    $_SESSION['hapus'] = "Data berhasil dihapus !";
    exit();
    
?>