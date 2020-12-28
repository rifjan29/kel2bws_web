<?php
include '../../../config/conn.php';
$id = $_GET['id_hapus'];
$gambar = mysqli_query($db, "SELECT picture_hm FROM headmaster WHERE id = '$id'");
while ($gambar = mysqli_fetch_assoc($gambar)) {
    $data = $gambar['picture_hm'];
}
if ($data != "") {
    unlink("../../../img_uploaded/cms/profile_pimpinan/$data");
    $sql = mysqli_query($db, "DELETE FROM headmaster WHERE id = '$id'");
    session_start();
    $_SESSION['pesan_hapus'] = "Data Berhasil Dihapus !";
    header('Location:index.php');
    exit();  
}else{
    session_start();
    $_SESSION['hapus'] = "Data Gagal Terhapus !";
    header('Location:index.php');
    exit();
    die ("Query gagal dijalankan ".mysqli_errno($db));
}
// he

?>