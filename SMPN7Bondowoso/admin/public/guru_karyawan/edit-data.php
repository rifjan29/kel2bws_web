<?php 
  session_start();
  include  "../../config/conn.php";
  include "../../partials/header2.php";
?>
</head>

<body>
  <section id="container">
  <?php include "../../partials/topbar.php"?> 
  <?php $title = "pengajar";?>
  <?php include "../../partials/sidebar.php"?>
  <?php include "../../partials/edit_profile.php"?>

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


            $id = $_GET['id'];
            $query_mysql = mysqli_query($db,"SELECT * FROM employees WHERE id= '$id'");
            $nomor = 1;
            while ($d = mysqli_fetch_array($query_mysql)){

          ?>
              <div class=" form">
                  <!-- form END FORM ADD DATA PROFILE SEKOLAH  -->
                <form class="cmxform form-horizontal style-form" enctype="multipart/form-data" id="commentForm" method="POST" action="<?=$_ENV['base_url']?>controller/guru_karyawan/edit_act.php">
                  <div class="form-group ">
                    <label for="name_emp" class="control-label col-lg-2">Nama Lengkap <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                      <input class=" form-control" id="title" name="name" minlength="2" type="text" value="<?php echo $d['name_emp'] ?>" required />
                    </div>
                  </div>
                  <div class="form-group">
                        <label for="picture_emp" class="control-label col-md-2">Foto <strong>(Wajib)</strong></label> 
                    <div class="col-md-9 ">
                        <img src="<?=$_ENV['base_url']?>img_uploaded/guru_karyawan/<?php echo $d['picture_emp']; ?>" class="img-thumbnail" width="150px" alt="" srcset="" style="margin-bottom: 10px;">
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
                    <label for="category_emp" class="control-label col-lg-2">Kategori <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <?php $x = $d['category_emp']; ?>
                      <select class="form-control" name="keterangan">
                        <option value="guru"<?php echo( $x == "guru") ? "selected" : "" ?>>Guru</option>
                        <option value="karyawan"<?php echo( $x == "karyawan") ? "selected" : "" ?>>Karyawan</option>   
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="position_emp" class="control-label col-lg-2">Visi Sekolah <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="visi" name="position" value="<?php echo $d['position_emp']; ?>" minlength="2" type="text" required />
                    </div>
                  </div>
                  
                  
                      <input  id="id_profile" name="id_profile" value="<?php echo $d['id']; ?>" hidden />       
                      <input hidden id="picture_img" name="gambar_emp" value="<?php echo $d['picture_emp']; ?>" />
            
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="save">Simpan</button>
                      <a class="btn btn-theme04" type="button" href="<?=$_ENV['base_url']?>public/guru_karyawan">Batal</a>
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
    <?php include "../../partials/footer2.php"?>
   </body>
</html>
