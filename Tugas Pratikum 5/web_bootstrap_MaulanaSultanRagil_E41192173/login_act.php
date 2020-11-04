<?php 
  $login = [
    [
        'username' => "sultanragil",
        'password' => "admin",
        'level' => "Admin"
    ],
    [
        'username' => "maulana",
        'password' => 'user',
        'level' => "2"
    ]
    ];
    foreach($login as $data){
      if($_POST['user'] == $data['username'] && $_POST['pass'] == $data['password']){
        session_start();
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['level'] = ($data['level']=="1")?'Admin':'User';
        header("Location: index.php");  
      }
      else{
        echo "Username atau Password";
        die();
      }  
    }
    
?>