<?php
    $login =  [
        [
            'username' => "iphang",
            'password' => "123",
            'level' => "1"
        ],
        [
            'username' => "shinta",
            'password' => "321",
            'level' => "2"
        ]
    ];
    foreach($login as $data){
        if($_POST['user'] == $data['username'] && $_POST['pass'] == $data['password']){
                session_start();
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['level'] = ($data['level']=="1")?'Admin':'User Biasa';
                header("Location: web_boot
                strap/dashboard.php");
                die();
        }else {
            echo "Username atau password salah";
            die();
        }    
    }
?>