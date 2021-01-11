<?php 
    include "../../config/conn.php";
    if ($_GET['act'] == 'deletedata') {
        $id_new = $_GET['id'];
          
        $image = mysqli_query($db,"SELECT news_picture FROM `news` WHERE id = '$id_new'");
        while($data = mysqli_fetch_assoc($image)){
            $data_image =$data['news_picture'];
        } 
        
        if ($data_image) {
            $sql = mysqli_query($db, "DELETE FROM news WHERE id = '$id_new'");
            unlink("../../img_uploaded/informasi/$data_image");
            session_start();
            $_SESSION['hapus'] = "Data Berhasil Dihapus !";
            header('Location: ../../public/informasi/');
            exit();  
        }else{
            session_start();
            $_SESSION['kesalahan'] = "Data Gagal Terhapus !";
            header('Location: ../../public/informasi/');
            exit();
            die ("Query gagal dijalankan ".mysqli_errno($db));
        }

      
    }else{
        // header('Location: ../../public/informasi/');
    }

?>