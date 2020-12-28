<?php
   include "../../config/conn.php";
   session_start();
   $judul =$_POST['judul_galeri'];
   $ket = $_POST['keterangan_kegiatan'];
   $kategori = $_POST['kategori_galeri'];
   $tgl = $_POST['tgl_galeri'];
   $uid = $_POST['id'];
   $picture = $_FILES['foto']['name'];
   // var_dump($kategori);

   if ($picture != "" && $kategori != "--pilih--") {
      $ekstensi_diperbolehkan = array('png','jpg','jpeg');
      $x = explode('.',$picture);
      $ekstensi = strtolower(end($x));
      $file_tmp = $_FILES['foto']['tmp_name'];
      $acak = rand(1,999);
      $name_picture = $acak.'-'.$picture;
      
      if (in_array($ekstensi,$ekstensi_diperbolehkan)==true) {
          move_uploaded_file($file_tmp,'../../img_uploaded/galeri/'.$name_picture);
          $sql = "INSERT INTO `gallery` (`id`, `gallery_title`, `gallery_info`, `galeri_kategori`, `gallery_date`, `aid`, `gallery_picture`) VALUES (NULL, '$judul', '$ket', '$kategori', '$tgl', '$uid','$name_picture')";
          $result = mysqli_query($db, $sql);
          if (!$result) {
              session_start();
              $_SESSION['failed_message'] = "Data Gagal Tersimpan !";
              header('Location: ../../public/pictures/add-data.php');
              exit();
              die ("Query gagal dijalankan ".mysqli_errno($db));
          } else {
              session_start();
              $_SESSION['success_message'] = "Data Berhasil Tersimpan !";
              header('Location: ../../public/pictures/');
              exit();    
          }    
      }else{
          session_start();
          $_SESSION['failed_message'] = "Ekstensi Gambar Tidak Tersimpan !";
          header('Location: ../../public/pictures/add-data.php');
          exit();

      }
  } else {
      session_start();
      $_SESSION['kategori_message'] = "Kategori Terdapat Kesalahan!";
      header('Location: ../../public/pictures/add-data.php');
      exit();
  }
?>