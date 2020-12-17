<?php 
  $aktif = "class='active'";
  $mati =  "";
?>
<!--sidebar start-->
 <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?=$_ENV['base_url']?>img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Super Admin</h5>
        
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
          <li class="sub-menu">
            <a href="<?=$_ENV['base_url']?>public/informasi/" <?=($title == "informasi")? $aktif : $mati;?>>
              <i class="fa fa-list-alt"></i>
              <span>Data Informasi</span>
            </a>
          </li>
          <li class="sub-menu" >
            <a href="<?=$_ENV['base_url']?>public/guru_karyawan/" <?=($title == "pengajar")? $aktif : $mati;?>>
              <i class="fa fa-users"></i>
              <span>Data Karyawan & Guru</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="" <?=($title == "gambar")? $aktif : $mati;?>>
              <i class="fa fa-picture-o"></i>
              <span>Galeri & Sarana Prasarana</span>
            </a>
            <ul class="sub">
              <li><a href="<?=$_ENV['base_url']?>public/pictures/data-galeri/">Data Geleri</a></li>
              <li><a href="<?=$_ENV['base_url']?>public/pictures/data-sarana/">Data Sarana Prasarana</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
<!--sidebar end-->