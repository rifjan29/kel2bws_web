<?php 
    require_once "check.php";

    // Digunakan menghubungkan database
    $db_host = "localhost";
    $db_name = "db_smpn7bws";
    $db_user = "root";
    $db_pass = "";
    $db = mysqli_connect($db_host, $db_user, $db_pass,$db_name);
    if (!$db) {
        die("Gagal Terhubung dengan Database : ").mysqli_connect_error();
    }
    // end connect database

?>