<?php
    session_start();
    require_once('../config/conn.php');
	

	if(!empty($_POST['nama'])){

		// menangkap data post 
	    $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $golongan = $_POST['golongan'];
        $id = $_POST['id'];

        $data[] = $nama;
        $data[] = $alamat;
        $data[] = $golongan;
        $data[] = $id;
	
		// simpan data Mahasiswa
		
		$update = 'UPDATE tb_mahasiswa SET nama_mahasiswa=?, alamat=?, id_golongan=? WHERE id_mahasiswa=?';
		$row = $conn->prepare($update);
        $row->execute($data);
        header("Location:../index.php");
        $_SESSION['edit'] = "Data berhasil diganti !";
        exit();
		
    }
?>