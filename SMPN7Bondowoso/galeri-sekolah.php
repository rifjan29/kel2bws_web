<?php include "admin/config/conn.php"?>
<?php include "partials/header.php"?>
<?php
	$sql = mysqli_query($db,"SELECT * FROM contact");
	$data = mysqli_fetch_array($sql);


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
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
	<div class="container">
	<a class="navbar-brand" href="<?=$_ENV['front_url']?>"><img src="<?=$_ENV['base_url']?>img_uploaded/logo_header.svg" alt="gambar logo" srcset=""  class="img-fluid" ></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	    <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item "><a href="<?=$_ENV['front_url']?>" class="nav-link">Beranda</a></li>
	        	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle"  id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Profil
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>profile-sekolah#tentang-sekolah" >Tentang Sekolah</a>
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
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>employees/#dataSMPN7">Data Guru</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>employees/#dataSMPN7">Data Karyawan</a> 
					</div>
				  </li>
				  <li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Galeri
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>galeri-sekolah#galeri-sekolah">Kegiatan Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>galeri-sekolah#galeri-sekolah">Sarana Prasarana</a> 
					</div>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Informasi
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>informasi#berita-sekolah">Berita Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>informasi#berita-sekolah">Prestasi Siswa</a> 
					</div>
				  </li>
	        	<li class="nav-item "><a href="<?=$_ENV['front_url']?>kontak" class="nav-link">Kontak</a></li>
	     
	        </ul>
	    </div>
	</div>
</nav>
<!-- END nav -->
<section class="hero-wrap hero-wrap-2" style="background-color: #031C0A;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?=$_ENV['front_url']?>">Beranda</a></span><i class="fa fa-caret-right mr-1" aria-hidden="true"></i> <span>Informasi</span></p>
              <h1 class="mb-0 bread">Kegiatan Sekolah & Sarana Prasarana SMPN 7 Bondowoso</h1>
            </div>
        </div>
    </div>
</section> 
<section class="ftco-section" id="galeri-sekolah">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 d-flex justify-content-md-center p-4">
                <button class="btn btn-primary filter-button mr-2" data-filter="all">Semua</button>
                <button class="btn btn-primary filter-button mr-2" data-filter="kegiatan">Kegiatan Sekolah</button>
                <button class="btn btn-primary filter-button mr-2" data-filter="sapras">Sarana Prasarana</button>
            </div>
        </div>
        <div class="row">
			<?php 
				$kegiatan = mysqli_query($db,"SELECT * FROM gallery WHERE galeri_kategori = 'kegiatan'");
				while ($data = mysqli_fetch_assoc($kegiatan)) {?>	
				<?php 		
					$uid =$data['aid'];
					$admin = mysqli_query($db,"SELECT * FROM `db_smpn7bws`.`admin` WHERE `id` = '$uid'");
					$data_admin = mysqli_fetch_array($admin);
				?>
				<div class="gallery_product ftco-animate col-lg-6 col-md-6 col-sm-6 col-xs-6 filter kegiatan">
						<div class="blog-entry ">
						<a href="blog-single.html" class="block-20 rounded lozad" style="background-image: url('<?=$_ENV['base_url']?>img_uploaded/galeri/<?=$data['gallery_picture']?>');">
						</a>
						<div class="text mt-3">
							<div class="meta mb-2">
							<div><a href="#"><?=$data['gallery_date']?></a></div>
							<div><a href="#" class="meta-chat"><span class="fa fa-user pr-1"></span><?=$data_admin['name_admin']?></a></div>
							</div>
							<h3 class="heading"><strong><?=$data['gallery_title']?></strong></h3>
							<p><?=$data['gallery_info']?></p>
						</div>
						</div>
				</div>
				<?php } ?>
				

			<?php 
				$sapras = mysqli_query($db,"SELECT * FROM gallery WHERE galeri_kategori = 'sapras'");
				while ($data = mysqli_fetch_assoc($sapras)) {?>	
				<?php 		
					$uid =$data['aid'];
					$admin = mysqli_query($db,"SELECT * FROM `db_smpn7bws`.`admin` WHERE `id` = '$uid'");
					$data_admin = mysqli_fetch_array($admin);
				?>
				<div class="gallery_product ftco-animate col-lg-6 col-md-6 col-sm-6 col-xs-6 filter sapras">
						<div class="blog-entry ">
						<a href="blog-single.html" class="block-20 rounded lozad" style="background-image: url('<?=$_ENV['base_url']?>img_uploaded/galeri/<?=$data['gallery_picture']?>');">
						</a>
						<div class="text mt-3">
							<div class="meta mb-2">
							<div><a href="#"><?=$data['gallery_date']?></a></div>
							<div><a href="#" class="meta-chat"><span class="fa fa-user pr-1"></span><?=$data_admin['name_admin']?></a></div>
							</div>
							<h3 class="heading"><strong><?=$data['gallery_title']?></strong></h3>
							<p><?=$data['gallery_info']?></p>
						</div>
						</div>
				</div>
			<?php } ?>				
    </div>    
</section>


<?php include "partials/footer.php"?>