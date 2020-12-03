<?php 
    require_once("conn.php");

    if (isset($_POST['register'])) {
        $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING);
        $user = filter_input(INPUT_POST,'user', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
        $pass =  password_hash($_POST["password"], PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (fullname, email, username, password)
                VALUES (:fullname, :email, :username, :password)";
        $statement = $connect->prepare($sql);

        $params =  array(
            ":fullname" => $name,
            ":email" => $email,
            ":username" => $name,
            ":password" => $pass
        );

        $saved = $statement->execute($params);
        if ($saved) {
            header("Location:../login.php");
        } 

    }
?>