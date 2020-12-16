<?php
$host="localhost";
$username="root";
$password="";
$db="universitas";

$kon = mysqli_connect($host,$username,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>