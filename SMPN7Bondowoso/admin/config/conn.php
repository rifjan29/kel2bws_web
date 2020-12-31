<?php 
    // base url
    require_once "check.php";

    // Digunakan menghubungkan database
    $db_host = "localhost";
    $db_name = "db_smpn7bws";
    $db_user = "root";
    $db_pass = "";
    $db = mysqli_connect($db_host, $db_user, $db_pass,$db_name);
    if (mysqli_ping($db)) {
      
    }else { 
        printf ("Error: %s\n", mysqli_error($conn)); 
    }
    // end connect database

?>