<?php 
   include "../../config/conn.php";
   session_start();
   $judul =$_POST['judul_galeri'];
   $ket = $_POST['keterangan_kegiatan'];
   $kategori = $_POST['kategori_galeri'];
   $tgl = $_POST['tgl_galeri'];
   $uid = $_POST['id'];
   $gambar = $_POST['gambar_lama'];
   $picture = $_FILES['foto']['name'];
   $id = $_POST['id_galeri'];

   if ($picture != "" ) {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $x = explode('.',$picture);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $acak = rand(1,999);
    $name_picture = $acak.'-'.$picture;
    
    if (in_array($ekstensi,$ekstensi_diperbolehkan)==true) {
        if(move_uploaded_file($file_tmp,'../../img_uploaded/galeri/'.$name_picture)){
            $query  = "UPDATE `gallery` SET `gallery_title` = '$judul',`gallery_info` = '$ket',`galeri_kategori` = '$kategori', `gallery_date` = '$tgl', `aid` = '$uid', `gallery_picture`='$name_picture'";
            unlink("../../img_uploaded/galeri/$gambar");
            $query .= "WHERE `gallery`.`id` = '$id'";
            $result = mysqli_query($db, $query) or die (mysqli_error($db));
            if (!$result) {
                session_start();
                $_SESSION['failed_message'] = "Data Gagal Tersimpan !";
                header("Location: ../../public/pictures/edit-data.php?id=$id");
                exit();
            } else {
                session_start();
                $_SESSION['edit'] = "Data Berhasil Diganti !";
                header('Location: ../../public/pictures/');
                exit();
            }
        }else{
            session_start();
            $_SESSION['failed_message'] = "Gagal!";
            header("Location: ../../public/pictures/edit-data.php?id=$id");
            exit();
        }
    }else{
        session_start();
        $_SESSION['failed_message'] = "Ekstensi dilarang!";
        header("Location: ../../public/pictures/edit-data.php?id=$id");
        exit();
    }

} else {
    if ($kategori !="pilih") {
        $sql  = mysqli_query($db,"UPDATE `gallery` SET `gallery_title` = '$judul',`gallery_info` = '$ket', `galeri_kategori` = '$kategori', `gallery_date` = '$tgl', `aid` ='$uid',`gallery_picture` = '$gambar' WHERE `gallery`.`id` = '$id'") or die(mysqli_error($db));
        session_start();
        $_SESSION['success_message'] = "Data Berhasil Tersimpan !";
        header('Location: ../../public/pictures/');
        exit();
    }else{
        session_start();
        $_SESSION['failed_message'] = "Kategori dilarang (Pilih)!";
        header("Location: ../../public/pictures/edit-data.php?id=$id");
        exit();
    }
}
?>