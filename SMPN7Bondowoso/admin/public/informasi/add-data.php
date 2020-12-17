<?php 
  include  "../../config/conn.php";
  include "../../partials/header2.php";
?>
</head>
<body>
  <section id="container">
    <!-- navbar  -->
      <?php include "../../partials/topbar.php"?> 
      <?php $title = "informasi";?>
      <?php include "../../partials/sidebar.php"?>
      <?php include "../../partials/edit_profile.php"?>
    <!-- endNavbar -->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Data Informasi </h3>
        <p>digunakan untuk memanipulasi data pada halaman Profile</p>
        <div class="row mt">
          <div class="col-lg-12">
          <div class="form-panel">
              <div class=" form">
                  <!-- form END FORM ADD DATA PROFILE SEKOLAH  -->
                <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                <div class="form-group">
                        <label for="gambar_banner" class="control-label col-md-2">Foto Thumbnail <strong>(Wajib)</strong></label> 
                    <div class="col-md-9 ">
                        <input type="file" name="foto" required="required" id="gambar_banner"/>
                        <div class="gambar-banner">
                            <span class="label label-info">Catatan!</span>
                            <span>
                                <strong style="color:red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</strong>
                            </span>
                        </div>
                    </div>    
                  </div>
                  <div class="form-group ">
                    <label for="title" class="control-label col-lg-2">Judul Informasi<strong> (Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="title" name="title" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="isi_informasi" class="control-label col-lg-2">Isi Informasi <strong> (Wajib)</strong></label>
                    <div class="col-lg-10">
                      <textarea id="summernote" name="isi_informasi"></textarea>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="visi" class="control-label col-lg-2">Pilihan Informasi<strong> (Wajib)</strong></label>
                    <div class="col-lg-10">
                      <select class="form-control">
                        <option value="pilih">--Pilih--</option>
                        <option value="0">Berita</option>
                        <option value="1">Prestasi</option>   
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2">Tanggal Informasi<strong> (Wajib)</strong></label>
                      <div class="col-lg-10 col-xs-11">
                          <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="">
                          <span class="help-block">Pilih Tanggal Informasi</span>
                      </div>
                  </div>                 
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Simpan</button>
                      <button class="btn btn-theme04" type="reset" value="reset" >Batal</button>
                    </div>
                  </div>
                </form>
                <!-- END FORM ADD DATA PROFILE SEKOLAH -->
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
    <script>
      $('#summernote').summernote({
        placeholder: 'Masukkan Isi Informasi',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
    <?php include "../../partials/footer2.php"?>
   </body>
</html>
