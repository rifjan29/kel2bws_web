<?php session_start();?>
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
        <h3><i class="fa fa-angle-right"></i> CMS (Control Management System)</h3>
        <p>digunakan untuk memanipulasi data pada halaman utama</p>
        <?php 
          if (isset($_SESSION['pesan_berhasil']) && !empty($_SESSION['pesan_berhasil'])) { ?>
            <div class="alert alert-success"><b>Well done!</b> <?=$_SESSION['pesan_berhasil']; ?>.</div>
          <?php
            unset($_SESSION['pesan_berhasil']);
          }else{

          }
          if (isset($_SESSION['pesan_hapus']) && !empty($_SESSION['pesan_hapus'])) { ?>
            <div class="alert alert-warning"><b>Well done!</b> <?=$_SESSION['pesan_hapus']; ?>.</div>
          <?php
            unset($_SESSION['pesan_hapus']);
          }else{

          }
        ?>
        
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel" style="padding-bottom: 50px;">
            <a type="button" href="add-cms" class="btn btn-theme" style="margin-bottom: 10px;"><i class="fa fa-plus"></i>Tambah Banner</a>
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Judul Banner</th>
                    <th>Keterangan</th>
                    <th class="hidden-phone">Gambar Banner</th>
                    <th class="hidden-phone">Link Banner</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $result = mysqli_query($db, "SELECT * FROM landing_page");
                    while ($row = mysqli_fetch_array($result)) {
                  ?>
                  <tr class="">
                    <td><?=$row['page_title']?></td>
                    <td><?=substr($row['page_content'],0,30)."..."?></td>
                    <td class="hidden-phone">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="<?=$_ENV['base_url']?>img_uploaded/cms/landing_page/<?=$row['page_slider']?>" alt="gambar salah" />
                      </div>
                    </td>
                    <td class="center hidden-phone"><?=substr($row['page_url'],0,20)."..."?></td>
                    <td>
                      <a type="submit" class="btn btn-warning" href="edit-cms/<?php echo $row['id_page'];?>"><i class="fa fa-edit"></i></a> |
                      <a type="button" class="btn btn-danger" href="delete-cms?id_page=<?php echo $row['id_page'];?>"><i class="fa fa-trash-o"></i></a>
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
