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
        <?php
             if (isset($_SESSION['failed_message']) && !empty($_SESSION['failed_message'])) { ?>
              <div class="alert alert-danger"><b>Well done!</b> <?=$_SESSION['failed_message']; ?>.</div>
            <?php
              unset($_SESSION['failed_message']);
            }else{
           
            }
        ?>
        <div class="row mt">
          <div class="col-lg-12">
          <div class="form-panel">
          <!-- Awal Script Ambil Data Database -->
          <?php


            $id = $_GET['id'];
            $query_mysql = mysqli_query($db,"SELECT * FROM profile WHERE id= '$id'");
            $nomor = 1;
            while ($d = mysqli_fetch_array($query_mysql)){

          ?>
              <div class=" form">
                  <!-- form END FORM ADD DATA PROFILE SEKOLAH  -->
                <form class="cmxform form-horizontal style-form" enctype="multipart/form-data" id="commentForm" method="POST" action="../../../controller/profile_sekolah/edit_act.php">
                  <div class="form-group ">
                    <label for="title" class="control-label col-lg-2">Arti Logo <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                      <input class=" form-control" id="title" name="title" minlength="2" type="text" value="<?php echo $d['profile_title'] ?>" required />
                    </div>
                  </div>
                  <div class="form-group">
                        <label for="gambar_banner" class="control-label col-md-2">Gambar Logo <strong>(Wajib)</strong></label> 
                    <div class="col-md-9 ">
                        <img src="<?=$_ENV['base_url']?>img_uploaded/cms/profile_sekolah/<?php echo $d['profile_logo']; ?>" class="img-thumbnail" width="150px" alt="" srcset="" style="margin-bottom: 10px;">
                        <input type="file" name="foto" id="foto"/>
                        <div class="gambar-banner">
                            <span class="label label-info">Catatan!</span>
                            <span>
                                <strong style="color:red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</strong>
                            </span>
                        </div>
                    </div>    
                  </div>
                  <div class="form-group ">
                    <label for="sejarah_sekolah" class="control-label col-lg-2" >Sejarah sekolah <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <textarea id="summernote" name="sejarah_sekolah"><?php echo $d['profile_history']; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="visi" class="control-label col-lg-2">Visi Sekolah <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="visi" name="visi" value="<?php echo $d['profile_visi']; ?>" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="misi" class="control-label col-lg-2">Misi Sekolah <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <textarea id="misi" name="misi_sekolah"><?php echo $d['profile_misi']; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="url_location" class="control-label col-lg-2">URL Location <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="url_location" type="url" name="url" value="<?php echo $d['profile_location']; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="alamat" class="control-label col-lg-2">Alamat Sekolah <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="alamat" name="alamat" minlength="2" value="<?php echo $d['profile_address']; ?>" type="text" required />
                    </div>
                  </div>
                  
                      <input  id="id_profile" name="id_profile" value="<?php echo $d['id']; ?>" hidden />       
                      <input hidden id="gambar_profile" name="gambar_profile" value="<?php echo $d['profile_logo']; ?>" />
            
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="save">Edit Data</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
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
