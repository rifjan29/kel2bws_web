<?php 
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
        <h3><i class="fa fa-angle-right"></i> GURU & KARYAWAN</h3>
        <p>digunakan untuk memanipulasi data pada halaman Guru & Karyawan</p>
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
                        <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-4">Nama Lengkap<strong> (Wajib)</strong></label>
                                <div class="col-lg-8">
                                <input class=" form-control" id="title" name="title" minlength="2" type="text" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="keterangan" class="control-label col-lg-4">Kategori <strong>(Wajib)</strong></label>
                                <div class="col-lg-8">
                                <select class="form-control">
                                    <option value="pilih">--Pilih--</option>
                                    <option value="0">Guru</option>
                                    <option value="1">Karyawan</option>   
                                </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="mapel" class="control-label col-lg-4">Pekerjaan<strong> (Wajib)</strong></label>
                                <div class="col-lg-8">
                                <input class=" form-control" id="mapel" name="mapel" minlength="2" type="text" required />
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
                      <button type="reset" value="reset" class="btn btn-default">Batal</button>
                      <button type="button" class="btn btn-primary">Simpan</button>
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
                    <th>Foto</th>
                    <th>Nama Lengkap</th>
                    <th class="hidden-phone">Kategori</th>
                    <th class="hidden-phone">Pekerjaan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                    <td>
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                      </div>
                    </td>
                    <td>Merupakan salah satu sekolah adiwiyata</td>
                    <td class="hidden-phone">Win 95+</td>
                    <td class="center hidden-phone">4</td>
                    <td>
                      <a type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a> |
                      <a type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                  <tr class="">
                    <td> 
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                      </div>
                    </td>
                    <td>Merupakan salah satu sekolah adiwiyata</td>
                    <td class="hidden-phone">Win 95+</td>
                    <td class="center hidden-phone">4</td>
                    <td>
                      <a type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a> |
                      <a type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
          </div>
            </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section> 

  <?=include "../../partials/footer2.php"?>
</body>     
