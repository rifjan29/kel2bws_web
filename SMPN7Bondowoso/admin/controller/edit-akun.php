<?php 
    session_start();
    include "../config/conn.php";
    $id = $_POST['id'];

    // $password = md5($_POST['password_lama']);
    // $passwordBaru = $_POST['password_baru'];

    $name = mysqli_real_escape_string($db, $_POST['nama']);
    $gambar_lama = $_POST['gambar_profile'];
    $gambar_baru = $_FILES['gambar_admin']['name'];
   
    
    if ($gambar_baru != "") {
        if(move_uploaded_file($_FILES['gambar_admin']['tmp_name'],'../img_uploaded/'.$_FILES['gambar_admin']['name'])){
            unlink("../img_uploaded/$gambar_lama");
            $query = mysqli_query($db, "UPDATE `admin` SET `name_admin` = '$name', `picture_admin` = '$gambar_baru' WHERE `admin`.`id` = '$id'");
            header("Location:../");
            $sql = mysqli_query($db, "SELECT * FROM admin WHERE id = '$id'");
            while ($data = mysqli_fetch_assoc($sql)) {
                $_SESSION['name'] = $data['picture'];
            }
        }else{
           echo "salah";     
        }
    }else{
        $query = mysqli_query($db, "UPDATE `admin` SET `name_admin` = '$name', `picture_admin` = '$gambar_lama' WHERE `admin`.`id` = '$id'");
        header("Location:../");
    }
    
    // $sql = mysqli_query($db, "SELECT password FROM admin WHERE id = '$id'");
    
    // while ($data = mysqli_fetch_assoc($sql)) {
    //     $passwordid = $data['password'];
        
    // }
    // if ($password==$passwordid) {
    //     if ($passwordBaru != "") {
    //         $hashPassword = md5($passwordBaru);
           
    //     }else{
    //         var_dump($passwordBaru);
    //     }
    // }else{
    //     echo "password lama salah";
    // }
?>