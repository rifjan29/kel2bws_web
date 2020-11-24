<?php
    $connect = mysqli_connect("localhost","root","","db_sekolah");

    if (mysqli_connect_error()) {
        echo "Gagal melakukan koneksi ke mysqli:".mysqli_connect_error();
    }
?>