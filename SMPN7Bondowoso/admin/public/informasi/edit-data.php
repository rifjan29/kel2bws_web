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
      <?php $title = "informasi";?>
      <?php include "../../partials/sidebar.php"?>
      <?php include "../../partials/edit_profile.php"?>
      <?php
            if (isset($_GET['id'])) {
                $id = ($_GET["id"]);

                $sql = mysqli_query($db, "SELECT * FROM news WHERE id = '$id'");
                if(!$sql){
                    die("Query Error : ".mysqli_errno($sql)."-".mysqli_error($sql));
                }
                $data = mysqli_fetch_assoc($sql);
                if (!count($data)) {
                    echo "<script> alert('data tidak ditemukan');window.location='index.php';</script>";
                }
            }else{
                echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
            }
      ?>
    <!-- endNavbar -->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Edit Data Informasi </h3>
        <p>Edit : <strong><?=$data['news_tittle'];?></strong></p>
        <?php
          if (isset($_SESSION['failed_message']) && !empty($_SESSION['failed_message'])) { ?>
            <div class="alert alert-warning"><b>Warning!</b> <?=$_SESSION['failed_message']; ?>.</div>
          <?php
            unset($_SESSION['failed_message']);
          }else{

          }
          if (isset($_SESSION['kategori_message']) && !empty($_SESSION['kategori_message'])) { ?>
            <div class="alert alert-warning"><b>Warning!</b> <?=$_SESSION['kategori_message']; ?>.</div>
          <?php
            unset($_SESSION['kategori_message']);
          }else{

          }          
        ?>
        <div class="row mt">
          <div class="col-lg-12">
          <div class="form-panel">
              <div class=" form">
                  <!-- form END FORM ADD DATA PROFILE SEKOLAH  -->
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" enctype="multipart/form-data" action="../../controller/informasi/edit-informasi.php">
                
                <div class="form-group">
                        <label for="gambar_banner" class="control-label col-md-2">Foto Thumbnail <strong>(Wajib)</strong></label> 
                        
                    <div class="col-lg-10">
                      <?php 
                        $sql = mysqli_query($db, "SELECT id FROM `admin` WHERE 1");
                        if ($sql->num_rows > 0) {
                          // output data of each row
                          while($row = $sql->fetch_assoc()) {
                          ?>
                            <input class=" form-control" id="title" name="id" minlength="2" type="text" required value="<?=$row["id"];?>" />
                            
                        <?php } ?>
                        <?php
                        } else {
                          echo "0 results";
                        }
                      ?>
                      
                    </div>
                  </div>
                  <div class="form-group">
                        <label for="gambar_banner" class="control-label col-md-2">Foto Thumbnail <strong>(Wajib)</strong></label> 
                    <div class="col-md-9 ">
                        <div class="col-md-3">
                        <img src="<?=$_ENV['base_url']?>img_uploaded/informasi/<?php echo $data['news_picture']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                        </div>
                        <div class="col-md-9">
                        <input type="file" name="foto" id="foto"/>
                        <div class="gambar-banner">
                            <span class="label label-info">Catatan!</span>
                            <span>
                                <strong>Ekstensi yang diperbolehkan .png | .jpg | .jpeg </strong><br>
                            </span>
                        </div>
                        </div>
                    </div>    
                  </div>
                  <div class="form-group ">
                    <label for="title" class="control-label col-lg-2">Judul Informasi<strong> (Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="title" name="judul_informasi" minlength="2" type="text" required value="<?=$data['news_tittle']?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="isi_informasi" class="control-label col-lg-2">Isi Informasi <strong> (Wajib)</strong></label>
                    <div class="col-lg-10">
                      <textarea id="summernote" name="isi_informasi" ><?=$data['news_content'];?></textarea>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="visi" class="control-label col-lg-2">Pilihan Informasi<strong> (Wajib)</strong></label>
                    <div class="col-lg-10">
                      <select class="form-control" name="kategori_informasi">
                        <option value="pilih"  <?php if($data['news_category']=="-"){echo "selected";} ?>>--Pilih--</option>
                        <option value="berita"  <?php if($data['news_category']=="berita"){echo "selected";} ?>>Berita</option>
                        <option value="prestasi"  <?php if($data['news_category']=="prestasi"){echo "selected";} ?>>Prestasi</option>   
                      </select>
                    </div>
                  </div>  
                  <input name="id_news" hidden value="<?=$data['id'];?>"/> 
                  <input name="gambar_lama" hidden value="<?=$data['news_picture'];?>"/>              
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Simpan</button>
                      <a class="btn btn-theme04" href="<?=$_ENV['base_url']?>public/informasi/">Batal</a>
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
