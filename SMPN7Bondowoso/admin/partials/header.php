<?php
  $IP = getenv ( "REMOTE_ADDR" );
  session_start();
  if (!isset($_SESSION["user"])) {
  header("Location:login.php");
   exit;
 }
  $id_admin = $_SESSION['id_admin'];
  $username = $_SESSION['user']; 
  $password = $_SESSION['psw'];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin - SMPN 7 Bondowoso</title>

  <!-- Favicons -->
  <link href="<?=$_ENV['base_url']?>img_uploaded/LOGO_SMPN7.png" rel="icon">

  <!-- Bootstrap core CSS -->
  <link href="<?=$_ENV['base_url']?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?=$_ENV['base_url']?>lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?=$_ENV['base_url']?>css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?=$_ENV['base_url']?>lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="<?=$_ENV['base_url']?>css/style.css" rel="stylesheet">
  <link href="<?=$_ENV['base_url']?>css/style-responsive.css" rel="stylesheet">
  <script src="<?=$_ENV['base_url']?>lib/chart-master/Chart.js"></script>
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->