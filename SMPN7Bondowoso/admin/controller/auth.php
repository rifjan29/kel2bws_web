<?php
    session_start();
    include "../config/conn.php";

    $username =mysqli_real_escape_string($db,$_POST['username']);
    $psw  = md5($_POST['password']);
   

    $sql = "SELECT * FROM admin WHERE username = '".$username."' AND password = '".$psw."' LIMIT 1";

    $query= mysqli_query($db, $sql);
    
    $count = mysqli_num_rows($query);

    if ($count>0) {
        $data = mysqli_fetch_assoc($query);

        $_SESSION['id_admin'] = $data['id'];
        $_SESSION['user'] = $data['username'];
        $_SESSION['psw'] = $data['password'];

       header("Location:../index");
    }else{
        session_start();
        $_SESSION['failed_message'] = "Password dan Username Terdapat Kesalahan!";
        header('Location:../login');
        exit();
        die ("Query gagal dijalankan ".mysqli_errno($db));
    }
?>