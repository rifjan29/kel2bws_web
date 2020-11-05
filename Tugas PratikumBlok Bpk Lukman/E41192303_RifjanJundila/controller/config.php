<?php 
    $connect = mysqli_connect("localhost","root","","tb_mahasiswa");

    if (mysqli_connect_errno()) {
        echo "Gagal melalukan koneksi ke MYSQL".mysqli_connect_error();
    }
?>