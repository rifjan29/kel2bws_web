<?php
    $login =  [
        [
            'username' => "shinta",
            'password' => "0212",
            'level' => "1"
        ],
        [
            'username' => "destira",
            'password' => "0405",
            'level' => "2"
        ]
    ];
    foreach($login as $data){
        if($_POST['user'] == $data['username'] && $_POST['pass'] == $data['password']){
                session_start();
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['level'] = ($data['level']=="1")?'Admin':'User Biasa';
                header("Location: index.php");
                die();
        }else {
            echo "Username atau password salah";
            die();
        }    
    }
?>