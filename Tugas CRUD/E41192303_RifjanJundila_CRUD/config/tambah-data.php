<?php
    include "conn.php";
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    $sql = mysqli_query($conn, "INSERT INTO user VALUES ('','$nama','$alamat','$pekerjaan')");
    header("Location:../index.php?pesan=input");
   

?>