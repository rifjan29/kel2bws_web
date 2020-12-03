<?php 
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $email_me = "rjndla@gmail.com";
    $pass_me = 123;

    if ((strcasecmp($email_me, $email) == 0) && ($pass_me==$pass)) {
        header("Location:../index.php?pesan=berhasil");
    }else{
        header("Location:../login.php?pesan=gagal");
    }
?>