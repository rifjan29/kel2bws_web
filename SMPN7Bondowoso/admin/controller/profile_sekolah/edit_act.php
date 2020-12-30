<?php
    include "../../config/conn.php";

if (isset($_POST['save'])){
    // Simpan Foto 
    $fileName = $_FILES['foto']['name'];
    // var_dump($fileName);
   
  
    // Ambil data dari Form
    $title = $_POST['title'];
    $sejarah = $_POST['sejarah_sekolah'];
    $visi = $_POST['visi'];
    $misi = $_POST['misi_sekolah'];
    $path = $_POST['url'];
    $alamat = $_POST['alamat'];
    $idprofile = $_POST['id_profile'];
    $profile_lama = $_POST['gambar_profile'];
    

        if (!$fileName == "") {
            unlink("../../img_uploaded/cms/profile_sekolah/$profile_lama");
            move_uploaded_file($_FILES['foto']['tmp_name'], "../../img_uploaded/cms/profile_sekolah/".$_FILES['foto']['name']); 
            $sql = mysqli_query($db, "UPDATE profile SET profile_title='$title',profile_history='$sejarah',profile_visi='$visi',profile_misi='$misi',profile_logo='$fileName',profile_location='$path',profile_address='$alamat' WHERE id='$idprofile'");
          
            if ($sql) {
                session_start();
                $_SESSION['edit_message'] = "Data Berhasil Diganti !";
                header('Location: ../../public/cms/profile_sekolah/');
                exit();
            }else{
                session_start();
                $_SESSION['failed_message'] = "Data Gagal Tersimpan !";
                header("Location: ../../public/cms/profile_sekolah/edit-data.php?id=$idprofile");
                exit();
                die ("Query gagal dijalankan ".mysqli_errno($db)); 
            }
        }else{
            $sql = mysqli_query($db, "UPDATE profile SET profile_title='$title',profile_history='$sejarah',profile_visi='$visi',profile_misi='$misi',profile_logo='$profile_lama',profile_location='$path',profile_address='$alamat' WHERE id='$idprofile'");
            header('Location: ../../public/cms/profile_sekolah/');
            session_start();
            $_SESSION['edit_message'] = "Data Berhasil Diganti !";
            header('Location: ../../public/cms/profile_sekolah/');
            exit();
        }

    }

?>
