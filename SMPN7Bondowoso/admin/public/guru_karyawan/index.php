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
  <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Guru & Karyawan</h3>
        <p>digunakan untuk memanipulasi data pada halaman Guru & Karyawan</p>
        <?php 
          if (isset($_SESSION['edit_message']) && !empty($_SESSION['edit_message'])) { ?>
            <div class="alert alert-warning"><b>Well done!</b> <?=$_SESSION['edit_message']; ?>.</div>
          <?php
            unset($_SESSION['edit_message']);
          }
          if (isset($_SESSION['pesan_berhasil']) && !empty($_SESSION['pesan_berhasil'])) { ?>
            <div class="alert alert-success"><b>Well done!</b> <?=$_SESSION['pesan_berhasil']; ?>.</div>
          <?php
            unset($_SESSION['pesan_berhasil']);
          }
          if (isset($_SESSION['gagal_edit']) && !empty($_SESSION['gagal_edit'])) { ?>
            <div class="alert alert-warning"><b>Well done!</b> <?=$_SESSION['gagal_edit']; ?>.</div>
          <?php
            unset($_SESSION['gagal_edit']);
          }
          if (isset($_SESSION['kategori']) && !empty($_SESSION['kategori'])) { ?>
            <div class="alert alert-warning"><b>Well done!</b> <?=$_SESSION['kategori']; ?>.</div>
          <?php
            unset($_SESSION['kategori']);
          }
        ?>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel" style="padding-bottom: 50px;">
            <button type="button"" class="btn btn-theme" style="margin-bottom: 10px;" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Tambah Guru & Karyawan</button>
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Tambah Guru & Karyawan</h4>
                    </div>
                    <div class="modal-body">
                      <!-- form GURU & KARYAWAN  -->
                        <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="POST" action="../../controller/guru_karyawan/input_act.php?act=inputdata" role="form">
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-4">Nama Lengkap<strong> (Wajib)</strong></label>
                                <div class="col-lg-8">
                                <input class=" form-control" id="title" name="name" minlength="2" type="text" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="keterangan" class="control-label col-lg-4">Kategori <strong>(Wajib)</strong></label>
                                <div class="col-lg-8">
                                <select class="form-control" name="ket">
                                    <option value="pilih">--Pilih--</option>
                                    <option value="guru">Guru</option>
                                    <option value="karyawan">Karyawan</option>   
                                </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="mapel" class="control-label col-lg-4">Pekerjaan<strong> (Wajib)</strong></label>
                                <div class="col-lg-8">
                                <input class=" form-control" id="mapel" name="position" minlength="2" type="text" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="picture_employees" class="control-label col-md-4">Foto 4x6 <strong>(Wajib)</strong></label> 
                                <div class="col-md-8 ">
                                    <input type="file" name="foto" required="required" id="picture_employees" />
                                    <div class="picture_employees">
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                            <strong style="color:red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</strong>
                                        </span>
                                    </div>
                                </div>    
                            </div>             
                    </div>
                    <div class="modal-footer">
                      <button type="reset" data-dismiss="modal" aria-hidden="true"class="btn btn-default">Batal</button>
                      <button type="submit" name="submit" class="btn btn-theme">Simpan</button>
                    </div>
                    </form>
                        <!-- END FORM GURU DAN KARYAWAN -->   
                  </div>
                </div>
              </div>
              <!-- end modal -->
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Foto</th>
                    <th>Nama Lengkap</th>
                    <th class="hidden-phone">Kategori</th>
                    <th class="hidden-phone">Pekerjaan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <?php
                  include '../../config/conn.php';
                  $query_mysql = mysqli_query($db, "SELECT * FROM employees");
                  while ($emp = mysqli_fetch_array($query_mysql)){
                  $id = $emp['id'];
                ?>
                <tbody>
                  <tr class="">
                    <td>
                      <div class="img-thumbnail">
                        <img src="<?=$_ENV['base_url']?>img_uploaded/guru_karyawan/<?php echo $emp['picture_emp']; ?>" alt="Gambar Guru & Karyawan"  class="img-responsive" width="150px" height="100px" />
                      </div>
                    </td>
                    <td><?=$emp['name_emp']; ?></td>
                    <td class="hidden-phone"><?=$emp['category_emp']; ?></td>
                    <td class="center hidden-phone"><?=$emp['position_emp']; ?></td>
                    <td>
                      <a type="button" class="btn btn-warning"href="edit-data/<?=$emp['id']; ?>"><i class="fa fa-edit"></i></a> |
                      <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#tenaga<?=$id?>"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                    <div class="modal fade" id="tenaga<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel1">Konfirmasi Hapus Data Guru & Karyawan</h4>
                          </div>
                          <div class="modal-body">
                              Apakah anda yakin ingin menghapus data <strong>?</strong>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            <a type="button" class="btn btn-danger" href="<?=$_ENV['base_url']?>controller/guru_karyawan/drop_act.php?id=<?php echo $emp['id']; ?>">Hapus</a>
                          </div>
                        </div>
                      </div>
                    </div>                  
                  <?php } ?>
                </tbody>
              </table>
          </div>
            </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section> 

  <?php include "../../partials/footer2.php"?>
</body>     
