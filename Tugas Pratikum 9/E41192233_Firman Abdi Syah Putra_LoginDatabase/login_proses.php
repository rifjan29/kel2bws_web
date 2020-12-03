<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "db_logindatabase");
$aksi = $_POST['aksi'];
switch($aksi){
    case 'login':
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE email='".$email."'") or die(mysqli_error($koneksi));
        $data = mysqli_fetch_assoc($sql);
            if(password_verify($password, $data['password'])){
                $_SESSION['alert']['success'] = "Berhasil Login";
                $_SESSION['alert']['nama'] = $data['nama'];
                $_SESSION['alert']['email'] = $data['email'];
             
                header("location:index.php");
            }else{
                $_SESSION['alert']['danger'] = "Gagal Login";
                header("location:login.php"); 
            }
        break;
    default:
        break;
}
?>