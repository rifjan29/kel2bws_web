<?php include "admin/config/conn.php"?>
<?php include "partials/header.php"?>
<?php
	$sql = mysqli_query($db,"SELECT * FROM `contact` ORDER BY id DESC LIMIT 1");
	$data = mysqli_fetch_array($sql);
	$slug = $_GET['berita'];
	$detail_berita =  mysqli_query($db, "SELECT * FROM `news` WHERE `slug` = '$slug'");
	$x = mysqli_fetch_array($detail_berita);
	$infomasi_lainnya = mysqli_query($db,"SELECT * FROM `news` ORDER BY `news`.`id` DESC LIMIT 3");

?>
<div class="wrap">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-3 col-md-3">
				<p class="mb-0 phone"><span class="fa fa-phone fa-lg"></span> <a href="#"><?=$data['contact']?></a></p>
			</div>
			<div class="col-lg-3 col-md-3">
				<p class="mb-0 phone"><span class="fa fa-envelope fa-lg"></span> <a href="#"><?=$data['email']?></a></p>
			</div>
			<div class="col d-flex justify-content-end">
				<div class="social-media">
				    <p class="mb-0 d-flex">
				    	<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    	<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Youtube</i></span></a>
				    	<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>

				    </p>
			    </div>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="<?=$_ENV['front_url']?>"><img src="<?=$_ENV['base_url']?>img_uploaded/logo_header.svg" alt="gambar logo" srcset=""  class="img-fluid" ></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item"><a href="<?=$_ENV['front_url']?>" class="nav-link">Beranda</a></li>
	        	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Profil
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>profile-sekolah#tentang-sekolah">Tentang Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>profile-sekolah#tentang-sekolah">Profil Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>profile-sekolah#logo-sekolah">Makna Logo</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>profile-sekolah#visi-sekolah">Visi & Misi</a>	 
					</div>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Guru & Karyawan
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>employees">Data Guru</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>employees">Data Karyawan</a> 
					</div>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Galeri
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>galeri-sekolah#galeri-sekolah">Kegiatan Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>galeri-sekolah#galeri-sekolah">Sarana Prasarana</a> 
					</div>
				  </li>
				  <li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Informasi
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>informasi#berita-sekolah">Berita Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>informasi#berita-sekolah">Prestasi Siswa</a> 
					</div>
				  </li>
	        	<li class="nav-item"><a href="<?=$_ENV['front_url']?>contact#kontak-sekolah" class="nav-link">Kontak</a></li>
	     
	        </ul>
	      </div>
	    </div>
</nav>
    <!-- END nav -->
<section class="hero-wrap hero-wrap-2" style="background-image:url('../img/informasi.svg')" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?=$_ENV['front_url']?>">Beranda</a></span><i class="fa fa-caret-right mr-1" aria-hidden="true"></i> <span>Informasi</span></p>
              <h1 class="mb-0 bread">Berita & Prestasi SMPN 7 Bondowoso</h1>
            </div>
        </div>
    </div>
</section> 
		
		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<p>
              <img src="<?=$_ENV['base_url']?>img_uploaded/informasi/<?=$x['news_picture']?>" alt="gambar berita"  class="img-fluid">
            </p>
            <h2 class="mb-3"><?=$x['news_tittle'] ?></h2>
			<div>
			<?=$x['news_content']?>
			</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">

            <div class="sidebar-box ftco-animate">
			  <h3>Informasi Lainnya</h3>
			  <?php 
				while ($y = mysqli_fetch_array($infomasi_lainnya)) {
					$tgl = $y['news_date'];
					$tgl_berita = date("d-m-Y",strtotime($tgl));
					$uid =$y['aid'];
					$admin = mysqli_query($db,"SELECT * FROM `db_smpn7bws`.`admin` WHERE `id` = '$uid'");
					$data_admin = mysqli_fetch_array($admin);	
			?>		  		  
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" href="<?=$_ENV['front_url']?>detail-informasi/?berita=<?=$y['slug']?>" style="background-image: url(<?=$_ENV['base_url']?>img_uploaded/informasi/<?=$y['news_picture']?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?=$_ENV['front_url']?>detail-informasi/?berita=<?=$y['slug']?>"><?=substr($y['news_tittle'],0,100)?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?=$tgl_berita?></a></div>
                    <div><a href=""><span class="icon-person"></span><?=$data_admin['name_admin']?></a></div>
                  </div>
                </div>
			  </div>
			<?php } ?>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
<?php include "partials/footer.php"?>