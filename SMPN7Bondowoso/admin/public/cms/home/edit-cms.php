<?php 
  include  "../../config/conn.php";
  include "../../partials/header.php";
?>
</head>
<body>
  <section id="container">
    <!-- navbar  -->
      <?php include "../../partials/topbar.php"?> 
      <?php $title = "cms";?>
      <?php include "../partials/sidebar.php"?>
      <?php include "../../../partials/edit_profile.php"?>
    <!-- endNavbar -->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> CMS (Control Management System)</h3>
        <p>digunakan untuk memanipulasi data pada halaman utama</p>
        <div class="row mt">
          <div class="col-lg-12">
          <div class="form-panel">
              <div class=" form">
                  <!-- form CMS  -->
                <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
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
                        <input type="file" name="foto[]" required="required" id="gambar_banner"  multiple/>
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
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">E-Mail  <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cemail" type="email" name="email" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cemail" class="control-label col-lg-2">NO Telp  <strong>(Wajib)</strong></label>
                    <div class="col-lg-10">
                        <div class="input-group input-large" >
                            <span class="input-group-addon">+62</span>
                            <input type="text" class="form-control dpd1" name="from">
                        </div>
                            <span class="help-block" style="color:red">No Hp / No Whatsapp</span>
                        </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
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
    <?php include "../../partials/footer.php"?>
   </body>
</html>
