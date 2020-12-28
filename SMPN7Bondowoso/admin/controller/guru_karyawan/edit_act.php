<?php
    session_start();
    include "../../config/conn.php";

if (isset($_POST['save'])){
    // Simpan Foto 
    $fileName = $_FILES['foto']['name'];
    // var_dump($fileName);
   
  
    // Ambil data dari Form
    $nama = $_POST['name'];
    $ket = $_POST['keterangan'];
    $posisi = $_POST['position'];
    $idprofile = $_POST['id_profile'];
    $profile_lama = $_POST['gambar_emp'];
    

        if ($fileName != "") {
            unlink("../../img_uploaded/guru_karyawan/$profile_lama");
            move_uploaded_file($_FILES['foto']['tmp_name'], "../../img_uploaded/guru_karyawan/".$_FILES['foto']['name']); 
            $sql = mysqli_query($db, "UPDATE `employees` SET `name_emp` = '$nama', `category_emp` = '$ket', `position_emp` = '$posisi', `picture_emp` = '$fileName' WHERE `employees`.`id` = '$idprofile'");
          
            if ($sql) {
                session_start();
                $_SESSION['edit_message'] = "Data Berhasil Diganti !";
                header('Location: ../../public/guru_karyawan/');
                exit();
            }else{
                session_start();
                $_SESSION['gagal_edit'] = "Data Gagal Tersimpan !";
                header("Location: ../../public/guru_karyawan/edit-data.php?id=$idprofile");
                exit();
                die ("Query gagal dijalankan ".mysqli_errno($db)); 
            }
        }else{
            session_start();
            $sql = mysqli_query($db, "UPDATE `employees` SET `name_emp` = '$nama', `category_emp` = '$ket', `position_emp` = '$posisi', `picture_emp` = '$profile_lama' WHERE `employees`.`id` = '$idprofile'");
            header('Location: ../../public/guru_karyawan/');        
            $_SESSION['gagal_edit'] = "Data Berhasil Diganti !";
            header('Location: ../../public/guru_karyawan/index.php');
            exit();
        }

    }

?>
