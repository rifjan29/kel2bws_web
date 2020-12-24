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
  <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Data Pimpanan</h3>
        <p>digunakan untuk memanipulasi data pada halaman Profile Kepala Sekolah</p>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel" style="padding-bottom: 50px;">
            <button type="button" class="btn btn-theme" style="margin-bottom: 10px;" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Tambah Kepala Sekolah</button>
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Tambah Kepala Sekolah</h4>
                    </div>
                    <div class="modal-body">
                      <!-- form GURU & KARYAWAN  -->
                        <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="input_act.php" enctype="multipart/form-data">
                            <div class="form-group ">
                                <label for="nama_lengkap" class="control-label col-lg-4">Nama Lengkap<strong> (Wajib)</strong></label>
                                <div class="col-lg-8">
                                <input class=" form-control" id="nama_lengkap" name="nama_lengkap" minlength="2" type="text" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Tanggal Lahir<strong> (Wajib)</strong></label>
                                <div class="col-lg-8 col-xs-11">
                                    <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" name="tgl_lahir">
                                    <span class="help-block">Pilih Tanggal Lahir</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Pendidikan Terakhir<strong> (Wajib)</strong></label>
                                <div class="col-lg-8 col-xs-11">
                                <textarea class="form-control" name="educate_hm" id="contact-message" placeholder="Pendidikan Terakhit" rows="3" data-rule="required" data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Pengalaman<strong> (Wajib)</strong></label>
                                <div class="col-lg-8 col-xs-11">
                                <textarea class="form-control" name="pengalaman" id="contact-message" placeholder="Masukkan Pengalaman " rows="5" ></textarea>
                                <div class="validate"></div>
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
                      <button type="reset" value="reset" class="btn btn-default" >Batal</button>
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
                    <th>Foto</th>
                    <th>Nama Lengkap</th>
                    <th class="hidden-phone">Pendidikan Terakhir</th>
                    <th class="hidden-phone">Pengalaman Kerja </th>
                    <th class="hidden-phone">Tanggal Lahir</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  include 'C:\xampp\htdocs\SMPN7Bondowoso\admin\config\conn.php';
                  $data = mysqli_query($db, "SELECT * FROM headmaster");
                  while($item = mysqli_fetch_array($data)){
                ?>
                  <tr class="">
                    <td> 
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="<?=$_ENV['base_url']?>img_uploaded/<?=$item['picture_hm']?>" alt="" />
                        </div>
                    </td>
                    <td><?=$item['name_hm']?></td>
                    <td class="hidden-phone"><?=$item['educate_hm']?></td>
                    <td class="center hidden-phone"><?=$item['experience']?></td>
                    <td class="center hidden-phone"><?=$item['date_hm']?></td>
                    <td>
                      <a href="edit-data.php?id=<?=$item['id']?>" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a> |
                      <a href="delete-data.php?id=<?=$item['id']?>" type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
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
