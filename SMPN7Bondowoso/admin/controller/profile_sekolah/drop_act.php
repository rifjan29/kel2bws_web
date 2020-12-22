<?php
    include "../../config/conn.php";


    $d = $_GET['id'];
    mysqli_query($db,"DELETE FROM profile WHERE id='$d'");

    header("location: ../../../../../../../kel2bws_web/SMPN7Bondowoso/admin/public/cms/profile_sekolah/index.php");



?>