<?php
include '../../config/conn.php';

if($_GET['act']== 'inputdata'){
    // Data Form
    $nama = $_POST['name'];
    $ket = $_POST['ket'];
    $posisi = $_POST['position'];
    // Data Image
    $img = $_FILES['foto']['name'];
    if ($img != "" && $ket != "pilih" ) {
        // Simpan di Folder Gambar
        move_uploaded_file($_FILES['foto']['tmp_name'], "../../img_uploaded/guru_karyawan/".$_FILES['foto']['name']);
        // Menyimpan data ke Database
       $sql =  mysqli_query($db, "INSERT INTO employees VALUES('','$nama' , '$ket' , '$posisi' , '$img')");
        if ($sql) {
            session_start();
            $_SESSION['pesan_berhasil'] = "Data Berhasil Tersimpan !";
            header('Location: ../../public/guru_karyawan/');
            exit();    
        }else{
            session_start();
            $_SESSION['failed_message'] = "Data Gagal Tersimpan !";
            header('Location: ../../public/guru_karyawan/');
            exit();
            die ("Query gagal dijalankan ".mysqli_errno($db));
        }
    }else{
        session_start();
        $_SESSION['kategori'] = "kategori Tidak Boleh Kosong !";
        header('Location: ../../public/guru_karyawan/');
        exit();
    }
    
}

?>