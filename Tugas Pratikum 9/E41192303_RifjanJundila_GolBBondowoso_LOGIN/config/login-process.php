<?php 
    require_once("conn.php");
    if (isset($_POST['login'])) {
           $username = $_POST['user'];
            $pass     = $_POST['password'];
            $login = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password='$pass'");
            $row=mysqli_fetch_array($login);
            var_dump($row);
            if ($row['username'] == $username AND $row['password'] == $pass)
            {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            header('location:../index.php'); //jika login berhasil, maka ganti/letakkan halaman utamamu disini
            }else{
            echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
                echo "<script>location='index.php';</script>";
            }
    }
?>