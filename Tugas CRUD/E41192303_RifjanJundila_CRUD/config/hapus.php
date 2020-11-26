<?php
    include "conn.php";

    $id = $_GET['id'];
    $sql = mysqli_query($conn,"DELETE FROM user WHERE id='$id'");
    header("Location:../index.php?pesan=hapus");
?>