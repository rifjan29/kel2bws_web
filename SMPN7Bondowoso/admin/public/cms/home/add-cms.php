<?php session_start(); ?>
<?php 
  include  "../../../config/conn.php";
  include "../../../partials/header2.php";
?> 
</head>
<body>
<section id="container">
  <!-- navbar  -->
  <?php include "../../../partials/topbar.php"?> 
  <?php $title = "cms";?>
  <?php include "../../../partials/sidebar.php"?>
  <?php include "../../../partials/edit_profile.php"?>
  <!-- endNavbar -->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> CMS (Control Management System)</h3>
        <p>digunakan untuk memanipulasi data pada Halaman utama</p>
        <?php 
          if (isset($_SESSION['pesan_gagal1']) && !empty($_SESSION['pesan_gagal1'])) { ?>
            <div class="alert alert-danger"><b>Well done!</b> <?=$_SESSION['pesan_gagal1']; ?>.</div>
          <?php
            unset($_SESSION['pesan_gagal2']);
          }else if (isset($_SESSION['pesan_gagal2']) && !empty($_SESSION['pesan_gagal2'])) {?>
            <div class="alert alert-danger"><b>Well done!</b> <?=$_SESSION['pesan_gagal2']; ?>.</div>
            <?php
            unset($_SESSION['pesan_gagal2']);
          }else if (isset($_SESSION['pesan_gagal3']) && !empty($_SESSION['pesan_gagal3'])) {?>
            <div class="alert alert-danger"><b>Well done!</b> <?=$_SESSION['pesan_gagal3']; ?>.</div>
            <?php
            unset($_SESSION['pesan_gagal3']);
          }else{
      
          }
        ?>
        <div class="row mt">
          <div class="col-lg-12">
          <div class="form-panel">
              <div class=" form">
                  <!-- form CMS  -->
                <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="POST" action="tambah.php">
                  <div class="form-group ">
                    <label for="title" class="control-label col-lg-2">Judul Banner <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="title" name="title" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="keterangan" class="control-label col-lg-2">Keterangan Banner <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="keterangan" name="keterangan" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                        <label for="gambar_banner" class="control-label col-md-2">Gambar Banner <strong>(Wajib)</strong></label> 
                    <div class="col-md-9 ">
                        <input type="file" name="file" required="required"/>
                        <div class="gambar-banner">
                            <span class="label label-info">NOTE!</span>
                            <span>
                                <strong style="color:red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</strong>
                            </span>
                        </div>
                    </div>    
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">URL Banner <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="curl" type="url" name="url" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="save">Simpan</button>
                      <a class="btn btn-theme04" type="reset" value="reset" href="<?=$_ENV['base_url']?>public/cms/home/">Batal</a>
                    </div>
                  </div>
                </form>
                <!-- END FORM CMS -->
              </div>
            </div>
            <!-- /form-panel -->
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <?php include "../../../partials/footer.php"?>
   </body>
</html>
