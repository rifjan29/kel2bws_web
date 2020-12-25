<?php 
  session_start();
  include_once "config/conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Admin SMPN 7 Bondowoso">
  <title>Admin - SMPN 7 Bondowoso</title>

  <!-- Favicons -->
  <link href="<?=$_ENV['base_url']?>img/favicon.png" rel="icon">
  <link href="<?=$_ENV['base_url']?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?=$_ENV['base_url']?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?=$_ENV['base_url']?>lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?=$_ENV['base_url']?>css/style.css" rel="stylesheet">
  <link href="<?=$_ENV['base_url']?>css/style-responsive.css" rel="stylesheet">
  
<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="controller/auth.php" method="post">
        <h2 class="form-login-heading">Admin SMPN 7 Bondowoso</h2>
        <div class="login-wrap">
        <?php 
          if (isset($_SESSION['failed_message']) && !empty($_SESSION['failed_message'])) { ?>
            <div class="alert alert-danger"><b>Peringatan!</b> <?=$_SESSION['failed_message']; ?>.</div>
          <?php
            unset($_SESSION['failed_message']);
          }else{
         
          }
          if (isset($_SESSION['berhasil_masuk']) && !empty($_SESSION['berhasil_masuk'])) { ?>
            <div class="alert alert-success"><b>Peringatan!</b> <?=$_SESSION['berhasil_masuk']; ?>.</div>
          <?php
            unset($_SESSION['berhasil_masuk']);
          }else{
         
          }
        ?>
          <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password" id="myPassword">
          <div class="contoh" style="padding: 5px;">
          <input type="checkbox" onclick="myFunction()"> Lihat Password
            <span class="pull-right">
         
            </span>
          </div>
          <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
          
        </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?=$_ENV['base_url']?>lib/jquery/jquery.min.js"></script>
  <script src="<?=$_ENV['base_url']?>lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="<?=$_ENV['base_url']?>lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img_uploaded/login-bg.jpg", {
      
    });
    function myFunction() {
      var x = document.getElementById("myPassword");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
        }
      }
  </script>
</body>

</html>