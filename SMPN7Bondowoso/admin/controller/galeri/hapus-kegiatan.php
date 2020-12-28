<?php 
    include "../../config/conn.php";


    $d = $_GET['id_hapus'];
  
    $image = mysqli_query($db, "SELECT gallery_picture FROM gallery WHERE id ='$d'");
    while ($data = mysqli_fetch_assoc($image)) {
        $data_image =$data['gallery_picture'];
    }

    if ($data_image != "") {
        unlink("../../img_uploaded/galeri/$data_image");
        $sql = mysqli_query($db,"DELETE FROM gallery WHERE id='$d'");
        session_start();
        $_SESSION['hapus_pesan'] = "Data Berhasil Dihapus !";
        header('Location:../../public/pictures/');
        exit();  
    }else{
        session_start();
        $_SESSION['hapus'] = "Data Gagal Terhapus !";
        header('Location:../../public/pictures/');
        exit();
        die ("Query gagal dijalankan ".mysqli_errno($db));
    }    
?>