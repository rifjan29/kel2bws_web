<?php
include "database.php";

$query = "INSERT INTO person VALUES ('', '$_POST[nama]', '$_POST[alamat]')";
$data = $db->prepare($query); //Menyiapkan query sql
$data->execute ();            //Menjalankan perintah query sql

header("location: form.php");