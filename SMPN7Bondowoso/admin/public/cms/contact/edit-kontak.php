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
        <h3><i class="fa fa-angle-right"></i>Data Kontak SMPN7 Bondowoso</h3>
        <p>Digunakan untuk memanipulasi data pada halaman utama (Kontak)</p>
        <div class="row mt">
          <div class="col-lg-12">
          <div class="form-panel">
<?php 
  include '../../../../../../kel2bws_web/SMPN7Bondowoso/admin/config/conn.php';
  $id = $_GET['id'];
  $select = mysqli_query($db, "SELECT * FROM contact WHERE id = '$id'");

  $kontak = mysqli_fetch_array($select);
?>

      <div class = "from">
                      <!-- form GURU & KARYAWAN  -->
                        <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="../../../public/cms/contact/aksi-edit-kontak.php">
                        <input type="hidden" name="id" value="<?php echo $kontak['id']?>">
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">E-Mail  <strong>(Wajib)</strong></label>
                            <div class="col-lg-10">
                            <input class="form-control " value="<?php echo $kontak['email']?>" id="email" type="email" name="email" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cemail" class="control-label col-lg-2">NO Telp  <strong>(Wajib)</strong></label>
                            <div class="col-lg-10">
                                <div class="input-group input-large" >
                                    <span class="input-group-addon">+62</span>
                                    <input type="number" value= "<?php echo $kontak['contact']?>" class="form-control" name="contact" required>
                                </div>
                                    <span class="help-block" style="color:red">No Hp / No Whatsapp</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-success btn-block" type="submit" name="save">Simpan</button>
                      <button class="btn btn-danger btn-block" type="reset" value="reset">Batal</button>
                    </div>
                    </form>
                        <!-- END FORM GURU DAN KARYAWAN -->   
                  </div>
                </div>
              </div>
              <!-- end modal-->
          </div>
        </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section> 

  <?=include "../../../partials/footer2.php"?>
</body>
</html>
