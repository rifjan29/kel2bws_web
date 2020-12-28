<?php
include '../../../config/conn.php';
$nama = $_POST['nama_lengkap'];
$tgl_lahir = $_POST['tgl_lahir'];
$pendidikan = $_POST['pendidikan_terakhir'];
$pengalaman = $_POST['pengalaman'];
$foto = $_FILES['foto']['name'];

if ($foto != "") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $x = explode('.',$foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $acak = rand(1,999);
    $foto_baru = $acak.'-'.$foto;
    if (in_array($ekstensi,$ekstensi_diperbolehkan)==true) {
        move_uploaded_file($file_tmp,'../../../img_uploaded/cms/profile_pimpinan/'.$foto_baru);
        $sql = "INSERT INTO `headmaster` (`id`, `name_hm`, `date_hm`, `educate_hm`, `experience`, `picture_hm`) VALUES (NULL, '$nama', '$tgl_lahir', '$pendidikan', '$pengalaman', '$foto_baru')";
        $result = mysqli_query($db, $sql);
        if (!$result) {
            session_start();
            $_SESSION['failed_message'] = "Data Gagal Tersimpan !";
            header('Location:');
            exit();
            die ("Query gagal dijalankan ".mysqli_errno($db));
        } else {
            session_start();
            $_SESSION['pesan_berhasil'] = "Data Berhasil Tersimpan !";
            header('Location:index.php');
            exit();    
        }    
    }else{
        session_start();
        $_SESSION['failed_message'] = "Ekstensi Gambar Tidak Tersimpan !";
        header('Location: ../../public/informasi/add-data.php');
        exit();

    }
}else{

}
?>