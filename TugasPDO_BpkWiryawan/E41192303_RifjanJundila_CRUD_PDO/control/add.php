<?php
    session_start();
    require_once "../config/conn.php";

if (!empty($_POST['nama'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $golongan = $_POST['golongan'];

    $data[] = $nama;
    $data[] = $alamat;
    $data[] = $golongan;

    $sql = 'INSERT INTO tb_mahasiswa (nama_mahasiswa,alamat,id_golongan)VALUES (?,?,?)';
    $row = $conn->prepare($sql);
    $row->execute($data);
    if (!$sql = null) {
        header("Location:../index.php");
        $_SESSION['pesan_berhasil'] = "Data Berhasil Tersimpan";
        exit();
    }else{
        header("Location:../index.php");
        $_SESSION['pesan_gagal'] = "Data Gagal Tersimpan";
        exit();
    }
}
?>