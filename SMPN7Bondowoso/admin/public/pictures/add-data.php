<?php 
  session_start();
  include  "../../config/conn.php";
  include "../../partials/header2.php";
?>
</head>
<body>
  <section id="container">
    <!-- navbar  -->
      <?php include "../../partials/topbar.php"?> 
      <?php $title = "gambar";?>
      <?php include "../../partials/sidebar.php"?>
      <?php include "../../partials/edit_profile.php"?>
      <?php include "../../partials/reset-password.php"?>
    <!-- endNavbar -->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Tambah Galeri </h3>
        <p>Foto Kegiatan & Sarana Prasarana Sekolah</p>
        <?php 
          if (isset($_SESSION['failed_message']) && !empty($_SESSION['failed_message'])) { ?>
            <div class="alert alert-warning"><b>Warning!</b> <?=$_SESSION['failed_message']; ?>.</div>
          <?php
            unset($_SESSION['failed_message']);
          }else{
          }
          if (isset($_SESSION['kategori_message']) && !empty($_SESSION['kategori_message'])) {?>
           <div class="alert alert-warning"><b>Warning!</b> <?=$_SESSION['kategori_message']; ?>.</div>
          <?php
            unset($_SESSION['kategori_message']);
          }else{
          }
        ?>
        <div class="row mt">
          <div class="col-lg-12">
          <div class="form-panel ">
              <div class=" form">
                  <!-- form CMS  -->
                  <form class="cmxform form-horizontal style-form" id="commentForm" method="post" enctype="multipart/form-data" action="<?=$_ENV['base_url']?>controller/galeri/tambah-kegiatan.php">
                  <input  name="id" hidden value="<?=$id_admin;?>" />
                  <div class="form-group ">
                    <label for="title" class="control-label col-lg-2">Judul Galeri <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="title" name="judul_galeri" minlength="20" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="keterangan" class="control-label col-lg-2">Keterangan Galeri <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="keterangan" name="keterangan_kegiatan" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                        <label class="control-label col-lg-2">Tanggal Gambar<strong> (Wajib)</strong></label>
                            <div class="col-lg-10 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" size="16" name="tgl_galeri" type="text" value="">
                                <span class="help-block">Pilih Tanggal Gambar</span>
                            </div>
                  </div>
                  <div class="form-group ">
                    <label for="visi" class="control-label col-lg-2">Pilihan Galeri<strong> (Wajib)</strong></label>
                    <div class="col-lg-10">
                      <select class="form-control" name="kategori_galeri">
                        <option value="pilih">--Pilih--</option>
                        <option value="kegiatan">Kegiatan Sekolah</option>
                        <option value="sapras">Sarana Prasarana</option>   
                      </select>
                    </div>
                  </div>             
                  <div class="form-group">
                        <label for="gambar_banner" class="control-label col-md-2">Gambar Banner <strong>(Wajib)</strong></label> 
                    <div class="col-md-9 ">
                       <input type="file" name="foto" required="required"/>
                        <div class="gambar-banner">
                            <span class="label label-info">NOTE!</span>
                            <span>
                                <strong style="color:red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</strong>
                            </span>
                        </div>
                    </div>    
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="kirim" value="kirim">Simpan</button>
                      <button class="btn btn-theme04" type="reset" value="reset">Batal</button>
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
    <?php include "../../partials/footer2.php"?>
   </body>
</html>
