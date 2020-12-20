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
        <h3><i class="fa fa-angle-right"></i>PROFILE SEKOLAH</h3>
        <p>digunakan untuk memanipulasi data pada halaman Profile</p>
        <div class="row mt">
          <div class="col-lg-12">
          <div class="form-panel">
              <div class=" form">
                  <!-- form END FORM ADD DATA PROFILE SEKOLAH  -->
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" enctype="multipart/form-data" action="../../../controller/profile_sekolah/input_act.php">
                  <div class="form-group ">
                    <label for="title" class="control-label col-lg-2">Arti Logo <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="title" name="title" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group">
                        <label for="gambar_banner" class="control-label col-md-2">Gambar Logo <strong>(Wajib)</strong></label> 
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
                    <label for="sejarah_sekolah" class="control-label col-lg-2">Sejarah sekolah <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <textarea id="summernote" name="sejarah_sekolah"></textarea>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="visi" class="control-label col-lg-2">Visi Sekolah <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="visi" name="visi" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="misi" class="control-label col-lg-2">Misi Sekolah <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <textarea id="misi" name="misi_sekolah"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="url_location" class="control-label col-lg-2">URL Location <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="url_location" type="url" name="url" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="alamat" class="control-label col-lg-2">Alamat Sekolah <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="alamat" name="alamat" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="save">Save</button>
                      <button class="btn btn-theme04" type="reset" value="reset" >Cancel</button>
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
      $('#misi').summernote({
        placeholder: 'Masukkan Misi Sekolah',
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
      $('#summernote').summernote({
        placeholder: 'Masukkan Sejarah Sekolah',
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
    <?php include "../../../partials/footer2.php"?>
   </body>
</html>
