<?php 
    $login =  [
        [
            'username' => "firmanabdisyahputra",
            'password' => "e41192233",
            'level' => "1"
        ],
        [
            'username' => "client",
            'password' => 'client',
            'level' => "2"
        ]
    ];
    foreach($login as $data){
        if($_POST['user'] == $data['username'] && $_POST['pass'] == $data['password']){
                session_start();
                $_SESSION['user'] = $_POST['user'];
                header("Location: dashboard.php");  
                die();
        }else {
            echo "Mohon Maaf Username atau Password salah";
            die();
      }  
    }  
?>
