<?php
   session_start();
   include "../../../config/conn.php";
   $aid = $_POST['id'];
   $judul = $_POST['judul_kegiatan'];
   $ket = $_POST['keterangan_kegiatan'];
   $tgl =$_POST['tgl_kegiatan'];

   $limit = 10 * 1024 * 1024;
   $ekstensi = array('png','jpg','gif');
   $jumlah_file = count($_FILES['foto']['name']);

   for ($x=0; $x < $jumlah_file ; $x++) { 
       $nama_file = $_FILES['foto']['name'][$x];
       $tmp = $_FILES['foto']['tmp_name'][$x];
       $tipe_file = pathinfo($nama_file,PATHINFO_EXTENSION);
       $ukuran =$_FILES['foto']['size'][$x];
       if ($ukuran > $limit) {
            session_start();
            $_SESSION['warning_message'] = "Ukuran 10 mb sampai 1024 mb!";
            header('Location: ../../../public/pictures/data-galeri/add-data.php');
           exit();
       }else{
           if (!in_array($tipe_file, $ekstensi)) {
            session_start();
            $_SESSION['ekstensi'] = "Ekstensi Gagal harus png, jpg, gif !";
            header('Location: ../../../public/pictures/data-galeri/add-data.php');
            exit();
           }else{
               move_uploaded_file($tmp,'../../../img_uploaded/galeri'.$tgl.'-'.$nama_file);
               $x = $tgl.'-'.$nama_file;
               $data = mysqli_query($db, "INSERT INTO `gallery` (`id`, `gallery_title`, `gallery_info`, `gallery_date`, `gallery_picture`, `aid`) VALUES (NULL, '$judul', '$ket', '$tgl', '$x', '$aid')");
               session_start();
               $_SESSION['berhasil'] = "Berhasil Ditambahkan !";
               header('Location: ../../../public/pictures/data-galeri/');
               exit();
           }
       }
   }
?>