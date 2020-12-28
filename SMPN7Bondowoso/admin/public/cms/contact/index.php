<?php session_start(); ?>
<?php 
  include  "../../../config/conn.php";
  include "../../../partials/header2.php";
?>
</head>

<body>
  <section id="container">
  <?php include "../../../partials/topbar.php"?> 
  <?php $title = "cms";?>
  <?php include "../../../partials/sidebar.php"?>
  <?php include "../../../partials/edit_profile.php"?>
  <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Data Kontak SMPN7 Bondowoso</h3>
        <p>digunakan untuk memanipulasi data pada halaman Utama (Kontak)</p>
        <?php 
          if (isset($_SESSION['pesan_berhasil']) && !empty($_SESSION['pesan_berhasil'])) { ?>
            <div class="alert alert-success"><b>Well done!</b> <?=$_SESSION['pesan_berhasil']; ?>.</div>
          <?php
            unset($_SESSION['pesan_berhasil']);
          }
          if (isset($_SESSION['pesan_gagal']) && !empty($_SESSION['pesan_gagal'])) { ?>
            <div class="alert alert-danger"><b>Well done!</b> <?=$_SESSION['pesan_gagal']; ?>.</div>
          <?php
            unset($_SESSION['pesan_gagal']);
          }
          if (isset($_SESSION['pesan_hapus']) && !empty($_SESSION['pesan_hapus'])) { ?>
            <div class="alert alert-warning"><b>Well done!</b> <?=$_SESSION['pesan_hapus']; ?>.</div>
          <?php
            unset($_SESSION['pesan_hapus']);
          }
        ?>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel" style="padding-bottom: 50px;">
            <button type="button"" class="btn btn-theme" style="margin-bottom: 10px;" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Tambah Kontak</button>
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Tambah Kontak Sekolah</h4>
                    </div>
                    <div class="modal-body">
                      <!-- form GURU & KARYAWAN  -->
                      <form class="cmxform form-horizontal style-form" enctype="multipart/form-data" id="commentForm" method="post" action="<?=$_ENV['base_url']?>controller/contact/tambah-kontak.php">
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">E-Mail  <strong>(Wajib)</strong></label>
                            <div class="col-lg-10">
                            <input class="form-control " id="cemail" type="email" name="email" required placeholder="exp:abd@gmxxxx" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cemail" class="control-label col-lg-2">NO Telp  <strong>(Wajib)</strong></label>
                            <div class="col-lg-10">
                                <div class="input-group input-large" >
                                    <span class="input-group-addon">+62</span>
                                    <input placeholder="exp:89xxxxx" type="number" class="form-control" name="contact" required>
                                </div>
                                    <span class="help-block" style="color:red">No Hp / No Whatsapp</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="reset" value="Reset" type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-default" >Batal</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                        <!-- END FORM GURU DAN KARYAWAN -->   
                  </div>
                </div>
              </div>
              <!-- end modal             -->
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Email</th>
                    <th>Kontak HP</th> 
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = mysqli_query($db, "SELECT * FROM contact");
                        while ($kontak = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                          <td><?= $kontak['email'] ?></td>
                          <td><?= $kontak['contact'] ?></td>
                          <td>
                        <a type="button" class="btn btn-warning" href="<?=$_ENV['base_url']?>public/cms/contact/edit-kontak.php?id=<?php echo $kontak['id'];?>"><i class="fa fa-edit"></i></a> |
                        <a type="button" class="btn btn-danger" href="<?=$_ENV['base_url']?>controller/contact/aksi-hapus-kontak.php?id=<?php echo $kontak['id']; ?>"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                      <?php } ?>
                </tbody>
              </table>
          </div>
            </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section> 

  <?=include "../../../partials/footer2.php"?>
</body>
</html>
