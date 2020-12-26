
<?php   
    session_start();
    include "../config/conn.php";
    $id = $_SESSION['id_admin'];
    $pass_baru = mysqli_real_escape_string($db,$_POST['password_baru']);
    $passBaru = md5($pass_baru);
  
    $pass_lama = md5($_POST['password_lama']);
    $sql = mysqli_query($db,"SELECT password FROM admin WHERE id ='$id'");
    while ($data = mysqli_fetch_assoc($sql)) {
        if (!$sql == "") {
            if (!$passBaru == "") {
                if($pass_lama == $data['password']){
                    $update = mysqli_query($db, "UPDATE `admin` SET `password` = '$passBaru' WHERE `admin`.`id` = '$id'");
                    if (!$update == "") {
                        $_SESSION['id_admin']='';
                        $_SESSION['name']='';
                        $_SESSION['user']='';
                        $_SESSION['psw']='';
                        unset($_SESSION['id_admin']);
                        unset($_SESSION['name']);
                        unset($_SESSION['user']);
                        unset($_SESSION['psw']);
                        session_unset();
                        session_destroy();
                        session_start();
                        $_SESSION['berhasil_masuk'] = "Password Berhasil Diganti !";
                        header('Location:../login.php');
                        exit();    
                    }else{
                        $_SESSION['id_admin']='';
                        $_SESSION['name']='';
                        $_SESSION['user']='';
                        $_SESSION['psw']='';
                        unset($_SESSION['id_admin']);
                        unset($_SESSION['name']);
                        unset($_SESSION['user']);
                        unset($_SESSION['psw']);
                        session_unset();
                        session_destroy();
                        header('Location:../login.php');
                    }
                }else{
                    session_start();
                    $_SESSION['gagal_masuk'] = "Password tidak bisa diganti !";
                    header('Location:../index.php');        
                    exit();    
                }
            }else{

            }
        }else{
            
        } 
    }
?>
