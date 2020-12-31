<?php 
  $aktif = "class='active'";
  $mati =  "";
?>
<?php
  $sql = mysqli_query($db,"SELECT * FROM admin WHERE id ='1'");

  while ($data = mysqli_fetch_assoc($sql)) {

?>
<!--sidebar start-->
 <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="<?=$_ENV['base_url']?>"><img src="<?=$_ENV['base_url']?>img_uploaded/<?=$data['picture_admin']?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?=$data['name_admin']?></h5>
        
          <li class="mt" >
            <a  href="<?=$_ENV['base_url']?>"<?=($title == "home")? $aktif : $mati;?>>
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li> 
          <li class="sub-menu" >
            <a href="" <?=($title == "cms")? $aktif : $mati;?>>
              <i class="fa fa-desktop"></i>
              <span>CMS</span>
              </a>
              <ul class="sub">
              <li><a href="<?=$_ENV['base_url']?>public/cms/home/">Halaman Utama</a></li>
              <li><a href="<?=$_ENV['base_url']?>public/cms/contact/">Kontak</a></li>
              <li><a href="<?=$_ENV['base_url']?>public/cms/profile_pimpinan/">Profil Pimpinan</a></li>
              <li><a href="<?=$_ENV['base_url']?>public/cms/profile_sekolah/">Tentang Sekolah</a></li>
            </ul>
          </li>
          <li class="sub-menu" >
            <a href="<?=$_ENV['base_url']?>public/guru_karyawan/" <?=($title == "pengajar")? $aktif : $mati;?>>
              <i class="fa fa-users"></i>
              <span>Data Karyawan & Guru</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="<?=$_ENV['base_url']?>public/informasi/" <?=($title == "informasi")? $aktif : $mati;?>>
              <i class="fa fa-list-alt"></i>
              <span>Data Informasi</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="<?=$_ENV['base_url']?>public/pictures/" <?=($title == "gambar")? $aktif : $mati;?>>
              <i class="fa fa-picture-o"></i>
              <span>Galeri Sekolah</span>
            </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
<?php } ?>
<!--sidebar end-->