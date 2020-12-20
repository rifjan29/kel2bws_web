<?php
    include "..\..\..\config\conn.php";


    $profile = $_POST['id'];
    mysqli_query($db,"DELETE FROM profile WHERE id='$profile'");

    header("location:index.php");



?>