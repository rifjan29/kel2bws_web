<?php
$koneksi = mysqli_connect("localhost","root","","session_ari");

if(mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>