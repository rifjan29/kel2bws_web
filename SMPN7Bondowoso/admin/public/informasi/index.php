<?php session_start(); ?>
<?php 
  include  "../../config/conn.php";
  include "../../partials/header2.php";
?>
</head>

<body>
  <section id="container">
  <?php include "../../partials/topbar.php"?> 
  <?php $title = "informasi";?>
  <?php include "../../partials/sidebar.php"?>
  <?php include "../../partials/edit_profile.php"?>
  <?php include "../../partials/reset-password.php"?>
  <section id="main-content">
      <section class="wrapper site-min-height" style="margin-top: 50px !important;">
        <h3><i class="fa fa-angle-right"></i>DATA INFORMASI</h3>
        <p>digunakan untuk memanipulasi data pada halaman Informasi (Berita & Prestasi)</p>
        <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
            <div class="alert alert-success"><b>Well done!</b> <?=$_SESSION['success_message']; ?>.</div>
          <?php
            unset($_SESSION['success_message']);
          }else{
         
          }
          if (isset($_SESSION['hapus']) && !empty($_SESSION['hapus'])) { ?>
             <div class="alert alert-danger"><b>Peringatan!</b> <?=$_SESSION['hapus']; ?>.</div
          <?php
            unset($_SESSION['hapus']);
          }else{
         
          }
        ?>
        </div>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel" style="padding-bottom: 50px;">
            <a type="button" href="add-data.php" class="btn btn-theme" style="margin-bottom: 10px;"><i class="fa fa-plus"></i>Tambah Informasi</a>
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>No</th>
                    <th class="hidden-phone">Thumbnail</th>
                    <th>Judul Informasi</th>
                    <th>Isi Informasi</th>
                    <th class="hidden-phone">Kategori</th>
                    <th rowspan="2">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  $sql = mysqli_query($db, "SELECT * FROM news ORDER BY id ASC");
                  if (!$sql) {
                    die ("Query Error".mysqli_errno($sql));
                    "-".mysqli_error($db);
                  }
                  $no = 1;

                  while ($data = mysqli_fetch_assoc($sql)) 
                  {?>
                  <tr class="">
                    <td><?=$no++;?></td>
                    <td>
                      <div class="img-thumbnail">
                        <img style="" class="img-responsive" width="150px" height="100px" src="<?=$_ENV['base_url']?>img_uploaded/informasi/<?php echo $data['news_picture']?>" alt="" />
                      </div>
                    </td>
                    <td><?=$data['news_tittle']?></td>
                    <td class="">
                       <?php echo substr(strip_tags($data['news_content']),0,20) . "..."; ?>
                    </td>
                    <td class=""><?=$data['news_category']?></td>
                    <td>
                      <a type="button" class="btn btn-warning" href="<?=$_ENV['base_url']?>public/informasi/edit-data?id=<?=$data['id']?>"><i class="fa fa-edit"></i></a> |
                      <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal<?=$no?>"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                  <div class="modal fade" id="myModal<?=$no?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel1">Konfirmasi Delete Data Informasi</h4>
                        </div>
                        <div class="modal-body">
                              Apakah anda yakin ingin menghapus Infomasi Judul : <strong> <?=$data['news_tittle']?></strong>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <a type="button" class="btn btn-primary" href="<?=$_ENV['base_url']?>controller/informasi/hapus-informasi?act=deletedata&id=<?php echo $data['id']; ?>">Save changes</a>
                        </div>
                      </div>
                    </div>
                </div>

                  <?php  
                  }
                ?>
                </tbody>
              </table>
          </div>
            </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section> 
    <!-- Modal -->

  <?=include "../../partials/footer2.php"?>
</body>
</html>
