<?php 
  session_start();
  include '../../../config/conn.php';
  include '../../../partials/header2.php';
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
          <!-- Awal Script Ambil Data Database -->
          <?php
            $id = $_GET['id_pimpinan'];
            $query_mysql = mysqli_query($db,"SELECT * FROM headmaster WHERE id= '$id'");
            $nomor = 1;
            while ($d = mysqli_fetch_array($query_mysql)){

          ?>
              <div class=" form">
                  <!-- form END FORM ADD DATA PROFILE SEKOLAH  -->
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="update-data.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$d['id']?>">
                <div class="form-group ">
                    <label for="nama_lengkap" class="control-label col-lg-4">Nama Lengkap<strong> (Wajib)</strong></label>
                    <div class="col-lg-8">
                    <input class=" form-control" id="nama_lengkap" name="nama_lengkap" minlength="2" type="text" value="<?=$d['name_hm']?>" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4">Tanggal Lahir<strong> (Wajib)</strong></label>
                    <div class="col-lg-8 col-xs-11">
                        <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" name="tgl_lahir" value="<?=$d['date_hm']?>">
                        <span class="help-block">Pilih Tanggal Lahir</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4">Pendidikan Terakhir<strong> (Wajib)</strong></label>
                    <div class="col-lg-8 col-xs-11">
                    <textarea class="form-control" name="educate_hm" id="contact-message" placeholder="Pendidikan Terakhit" rows="3" data-rule="required" data-msg="Please write something for us"><?=$d['educate_hm']?></textarea>
                    <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4">Pengalaman<strong> (Wajib)</strong></label>
                    <div class="col-lg-8 col-xs-11">
                    <textarea class="form-control" name="pengalaman" id="contact-message" placeholder="Masukkan Pengalaman " rows="5" ><?=$d['experience']?></textarea>
                    <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="picture_employees" class="control-label col-md-4">Foto 4x6 <strong>(Wajib)</strong></label> 
                    <div class="col-md-8 ">
                      <img src="<?=$_ENV['base_url']?>img_uploaded/cms/profile_pimpinan/<?=$d['picture_hm']?>" width="120px" height="120px" alt="Gambar Rusak"><br><br>
                      <input type="file" name="foto" id="picture_employees" />
                      <div class="picture_employees">
                          <span class="label label-info">NOTE!</span>
                          <strong style="color:red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</strong>
                      </div>
                    </div>    
                </div>
                <input type="text" hidden name="id" value="<?=$d['id']?>">
                <input type="text" hidden name="gambar_lama" value="<?=$d['picture_hm']?>">
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-8">
                      <button class="btn btn-theme" type="submit" name="save">Save</button>
                      <a class="btn btn-theme04" type="button" href="index.php">Cancel</a>
                    </div>
                  </div>
                </form>
                <!-- END FORM ADD DATA PROFILE SEKOLAH -->
                <?php } ?>
              <!-- Akhir Script Ambil Data Database -->
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
