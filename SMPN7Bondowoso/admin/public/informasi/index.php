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
  <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>DATA INFORMASI</h3>
        <p>digunakan untuk memanipulasi data pada halaman Informasi (Berita & Prestasi)</p>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel" style="padding-bottom: 50px;">
            <a type="button" href="add-data.php" class="btn btn-theme" style="margin-bottom: 10px;"><i class="fa fa-plus"></i>Tambah Informasi</a>
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th class="hidden-phone">Thumbnail</th>
                    <th>Judul Berita</th>
                    <th>Isi Berita</th>
                    <th class="hidden-phone">Kategori</th>
                    <th>Tanggal</th>
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
                    <td class="hidden-phone">
                        Kenapa
                    </td>
                    <td class="center hidden-phone">4</td>
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
</html>
