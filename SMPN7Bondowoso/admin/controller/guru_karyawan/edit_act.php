<?php
    include "../../config/conn.php";

if (isset($_POST['save'])){
    // Simpan Foto 
    $fileName = $_FILES['foto']['name'];
    // var_dump($fileName);
   
  
    // Ambil data dari Form
    $nama = $_POST['name'];
    $ket = $_POST['ket'];
    $posisi = $_POST['position'];
    $idprofile = $_POST['id_profile'];
    $profile_lama = $_POST['gambar_emp'];
    

        if (!$fileName == "") {
            unlink("../../img_uploaded/guru_karyawan/$profile_lama");
            move_uploaded_file($_FILES['foto']['tmp_name'], "../../img_uploaded/guru_karyawan/".$_FILES['foto']['name']); 
            $sql = mysqli_query($db, "UPDATE employees SET name_emp='$nama',category_emp='$ket',position_emp='$posisi',picture_emp='$fileName' WHERE id='$idprofile'");
          
            if ($sql) {
                session_start();
                $_SESSION['edit_message'] = "Data Berhasil Diganti !";
                header('Location: ../../public/guru_karyawan/');
                exit();
            }else{
                session_start();
                $_SESSION['failed_message'] = "Data Gagal Tersimpan !";
                header("Location: ../../public/guru_karyawan/edit-data.php?id=$idprofile");
                exit();
                die ("Query gagal dijalankan ".mysqli_errno($db)); 
            }
        }else{
            $sql = mysqli_query($db, "UPDATE employees SET name_emp='$nama',category_emp='$ket',position_emp='$posisi',picture_emp='$fileName' WHERE id='$idprofile' WHERE id='$idprofile'");
            header('Location: ../../public/guru_karyawan/');
            session_start();
            $_SESSION['edit_message'] = "Data Berhasil Diganti !";
            header('Location: ../../public/guru_karyawan/');
            exit();
        }

    }

?>
