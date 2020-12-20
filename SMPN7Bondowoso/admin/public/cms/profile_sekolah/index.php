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
        <h3><i class="fa fa-angle-right"></i> Profile Sekolaj</h3>
        <p>digunakan untuk memanipulasi data pada halaman Profile</p>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel" style="padding-bottom: 50px;">
            <a type="button" href="add-data.php" class="btn btn-theme" style="margin-bottom: 10px;"><i class="fa fa-plus"></i>Tambah Profile</a>
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Logo</th>
                    <th>Makna Logo</th>
                    <th class="hidden-phone">Visi</th>
                    <th class="hidden-phone">Misi</th>
                    <th class="hidden-phone">Lokasi URL</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  include "..\..\..\config\conn.php";
                  $query_mysql = mysqli_query($db, "SELECT * FROM profile");
                  $list = 1;
                  while ($profile = mysqli_fetch_array($query_mysql)){
                ?>
                  <tr class="">
                    <td class="hidden-phone"><?php echo $list++; ?></td>
                    <td class="hidden-phone"><?php echo $profile['id']; ?></td>
                    <td>     
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                         <img src='foto../img_uploaded/cms/profile_sekolah/".$profile['profile_logo']."' alt="" />
                        </div>
                    </td>
                    <td class="hidden-phone"><?php echo $profile['profile_title']; ?></td>
                    <td class="hidden-phone"><?php echo $profile['profile_visi']; ?></td>
                    <td class="center hidden-phone"><?php echo $profile['profile_misi']; ?></td>
                    <td class="center hidden-phone"><?php echo $profile['profile_location']; ?></td>
                    <td class="center hidden-phone"><?php echo $profile['profile_address']; ?></td>
                    <td>
                      <a type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a> |
                      <a type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
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
