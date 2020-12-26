<?php
include '../../../config/conn.php';

if(isset($_POST['save'])){
    $title = $_POST['title'];
    $ket = $_POST['keterangan'];
    $url = $_POST['url'];
    $ekstensi_diperbolehkan	= array('png','jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];	
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){			
            move_uploaded_file($file_tmp,'../../../img_uploaded/cms/landing_page'.'-'.$nama);
         
            $sql = mysqli_query($db,"INSERT INTO landing_page VALUES (NULL,'$title', '$ket', '$nama', '$url')");
            if($sql){
                echo 'FILE BERHASIL DI UPLOAD';
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}
  



?>