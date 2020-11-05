<?php 

$login = [
    'admin'=>[
        'username'=>'rifjan',
        'password'=>'123',
     ],
    'user'=>[
        'username'=>'jundila',
        'password'=>'321',
       
     ]
    ];
    
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $user = 0;
        $pass = 0;  
        foreach ($login as $key => $value) {
            if ($username==$value['username']) {
                $user =1;
            }
            if ($password==$value['password']) {
                $pass =1;
            }
        }
        if (empty($username) || empty($password)) {
            
            echo "Username dan password kosong";
           
          
        }else{
            if (!$user==1) {
                echo"Username tak Terdaftar ";
                
                
            }
            if (!$pass==1) {
                echo"Password tak Terdaftar ";
               
            }
            if ($user == 1 && $pass==1) {
                header("location:index.php");
            }
    
        }
 
    }
?>