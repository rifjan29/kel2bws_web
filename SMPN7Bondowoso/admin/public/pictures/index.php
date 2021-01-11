<?php 
  session_start();
  include  "../../config/conn.php";
  include "../../partials/header2.php";
?>
</head>

<body>
  <section id="container">
  <?php include "../../partials/topbar.php"?> 
  <?php $title = "gambar";?>
  <?php include "../../partials/sidebar.php"?>
  <?php include "../../partials/edit_profile.php"?>
  <?php include "../../partials/reset-password.php"?>
  <section id="main-content">
      <section class="wrapper site-min-height" style="margin-top: 40px !important;">
        <h3><i class="fa fa-angle-right"></i>Galeri Sekolah</h3>
        <p>Foto Tentang Kegiatan Sekolah dan Sarana Prasarana Sekolah</p>
        <?php 
          if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
            <div class="alert alert-success"><b>Warning!</b> <?=$_SESSION['success_message']; ?>.</div>
          <?php
            unset($_SESSION['success_message']);
          }else{
          }
          if (isset($_SESSION['edit']) && !empty($_SESSION['edit'])) { ?>
            <div class="alert alert-success"><b>Warning!</b> <?=$_SESSION['edit']; ?>.</div>
          <?php
            unset($_SESSION['edit']);
          }else{
          }
          if (isset($_SESSION['hapus_pesan']) && !empty($_SESSION['hapus_pesan'])) { ?>
            <div class="alert alert-warning"><b>Warning!</b> <?=$_SESSION['hapus_pesan']; ?>.</div>
          <?php
            unset($_SESSION['hapus_pesan']);
          }else{
          }
          if (isset($_SESSION['hapus']) && !empty($_SESSION['hapus'])) { ?>
            <div class="alert alert-danger"><b>Warning!</b> <?=$_SESSION['hapus']; ?>.</div>
          <?php
            unset($_SESSION['hapus']);
          }else{
          }
        ?>
        
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel" style="padding-bottom: 50px;">
            <a type="button" href="add-data" class="btn btn-theme" style="margin-bottom: 10px;"><i class="fa fa-plus"></i>Tambah Galeri</a>
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th >Foto Galeri</th>
                    <th>Judul Galeri</th>
                    <th class="hidden-phone">Keterangan</th>
                    <th class="hidden-phone">Kategori</th>
                    <th >Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql = mysqli_query($db,"SELECT * FROM gallery");
                    while ($data = mysqli_fetch_assoc($sql)) {
                      $id = $data['id'];
                    ?>
                  <tr class="">
                    <td class="hidden-phone">
                      <div class="thumbnail">
                        <img src="<?=$_ENV['base_url']?>img_uploaded/galeri/<?=$data['gallery_picture']?>"  alt="Tidak Ada Gambar"  class="img-responsive" width="150px" height="100px"/>
                      </div>
                    </td>
                    <td><?=$data['gallery_title']?></td>
                    <td ><?=$data['gallery_info']?></td>
                    <td ><?php if ($data['galeri_kategori'] == "kegiatan") {
                     echo "Kegiatan Sekolah";
                    }else{
                      echo "Sarana Prasarana";
                    }?></td>
                    <td>
                      <a type="button" class="btn btn-warning" href="edit-data/<?=$data['id'];?>"><i class="fa fa-edit"></i></a> |
                      <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#galeri<?=$id?>"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                    <div class="modal fade" id="galeri<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel1">Konfirmasi Hapus Data Galeri Sekolah</h4>
                          </div>
                          <div class="modal-body">
                              Apakah anda yakin ingin menghapus data <strong>?</strong>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            <a type="button" class="btn btn-danger" href="<?=$_ENV['base_url']?>controller/galeri/hapus-kegiatan.php?id_hapus=<?=$data['id'];?>">Hapus</a>
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
</html>
