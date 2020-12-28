<?php 
  session_start();
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

        <h3><i class="fa fa-angle-right"></i> PROFILE SEKOLAH</h3>

        <p>digunakan untuk memanipulasi data pada halaman Profile</p>
        <?php 
          if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
            <div class="alert alert-success"><b>Well done!</b> <?=$_SESSION['success_message']; ?>.</div>
          <?php
            unset($_SESSION['success_message']);
          }else{
         
          }
          if (isset($_SESSION['edit_message']) && !empty($_SESSION['edit_message'])) { ?>
            <div class="alert alert-success"><b>Well done!</b> <?=$_SESSION['edit_message']; ?>.</div>
          <?php
            unset($_SESSION['edit_message']);
          }else{
         
          }

        ?>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel" style="padding-bottom: 50px;">
            <a type="button" href="add-data.php" class="btn btn-theme" style="margin-bottom: 10px;"><i class="fa fa-plus"></i>Tambah Profile</a>
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Logo</th>
                    <th>Makna Logo</th>
                    <th class="hidden-phone">Visi</th>
                    <th class="hidden-phone">Misi</th>
                    <th>Alamat</th>
                    <th rowspan="2">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  include "../../../config/conn.php";
                  $query_mysql = mysqli_query($db, "SELECT * FROM profile");
                  $list = 1;
                  while ($profile = mysqli_fetch_array($query_mysql)){
                
                ?>
                  <tr class="">
                    <td class="hidden-phone"><?php echo $list++; ?></td>
                    <td>
                      <div class="img-thumbnail">
                        <img style="" class="img-responsive" width="150px" height="100px" src="<?=$_ENV['base_url']?>img_uploaded/cms/profile_sekolah/<?php echo $profile['profile_logo']; ?>" alt="" />
                      </div>    
                    
                    </td>
                    <td class="hidden-phone"><?=$profile['profile_title']; ?></td>
                    <td class="hidden-phone"><?=$profile['profile_visi']; ?></td>
                    <td class="center hidden-phone"><?php echo $profile['profile_misi']; ?></td>
                    <td class="center hidden-phone"><?=$profile['profile_address']?></td>
                    <td>
                      <a type="button" class="btn btn-warning" href="edit-data.php?id=<?=$profile['id']; ?>"><i class="fa fa-edit"></i></a> |
                      <a type="button" class="btn btn-danger" href="../../../controller/profile_sekolah/drop_act.php?id=<?php echo $profile['id']; ?>"><i class="fa fa-trash-o"></i></a>
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
