<?php
session_start();
$con =  mysqli_connect("localhost","root","","universitas");
$aksi = $_POST['aksi'];
switch ($aksi) {
    case 'masuk':
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql =  mysqli_query($con, "SELECT * FROM user WHERE username ='".$username."'") or die (mysqli_error($con));
        $data = mysqli_fetch_assoc($sql);
    if(Password_verify($password, $data['password'])) {
        $_SESSION['alert']['success'] = "Anda Berhasil Login";
        $_SESSION['user']['username'] = $data['username'];
        $_SESSION['user']['nama'] = $data['nama'];
        header("location:dashboard.php");
    }else{
        $_SESSION['alert']['danger'] = "Anda Gagal Login. Coba cek Username dan password Anda" ;
        header("location:login.php");
    }
        
break;
}

?>
