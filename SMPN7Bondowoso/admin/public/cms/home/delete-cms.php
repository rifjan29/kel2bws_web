<?php
// include database connection file
 include 'C:\xampp\htdocs\kel2bws_web\SMPN7Bondowoso\admin\config\conn.php';
// Get id from URL to delete that user
 $id = $_GET['id'];
 // Delete user row from table based on given id
 mysqli_query($db , "DELETE FROM landing_page WHERE id='$id'");
// After delete redirect to Home, so that latest user list will be displayed
 header("location:index.php?pesan=hapus");
?>
