<?php include "admin/config/conn.php"?>
<?php include "partials/header.php"?>
<?php
	$sql = mysqli_query($db,"SELECT * FROM contact");
	$data = mysqli_fetch_array($sql);

	$profile = mysqli_query($db, "SELECT * FROM profile");
	$data_profile = mysqli_fetch_array($profile);

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
	        	<li class="nav-item active"><a href="<?=$_ENV['front_url']?>" class="nav-link">Beranda</a></li>
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
	        	<li class="nav-item"><a href="<?=$_ENV['front_url']?>contact#kontak-sekolah" class="nav-link">Kontak</a></li>
	     
	        </ul>
	      </div>
	    </div>
</nav>
    <!-- END nav -->
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
		 <!-- start slider -->
		<?php 
			$landing_page = mysqli_query($db, "SELECT * FROM landing_page");
			while ($x = mysqli_fetch_array($landing_page)) {?>
	      <div class="slider-item" style="background-image:url(<?=$_ENV['base_url']?>img_uploaded/cms/landing_page/<?=$x['page_slider']?>);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-10 ftco-animate">
		          	<div class="text w-100 text-center">
						<h1 class="mb-4"><?=$x['page_title']?></h1>
						<h2><?=$x['page_content']?></h2>
			            <p><a href="#" class="btn btn-white">Selengkapnya</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
		  </div>
		  <?php } ?>
		  <!-- end slider -->
	    </div>
	  </div>
	  <section class="ftco-section testimony-section bg-secondary">
		<div class="container">
		  <div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
			  <h2 style="color: white !important;">Tenaga Pengajar &amp; Karyawan</h2>
			  <hr class="style2">
			  <span class="subheading">Warga Sekolah SMPN 7 Bondowoso</span>
			</div>
		  </div>
		  <div class="row ftco-animate">
			<div class="col-md-12">
			  <div class="carousel-testimony owl-carousel ftco-owl">
				<?php 
					$tenaga = mysqli_query($db, "SELECT * FROM employees");
					while ($x = mysqli_fetch_array($tenaga)) {?>
				<div class="item">
				  <div class="testimony-wrap py-4">
					  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
					<div class="text">
					  <div class="d-flex align-items-center">
						  <div class="user-img" style="background-image: url(<?=$_ENV['base_url']?>img_uploaded/guru_karyawan/<?=$x['picture_emp']?>)"></div>
						  <div class="pl-3">
							  <p class="name"><?=$x['name_emp']?></p>
							  <span class="position"><?=$x['position_emp']?></span>
							</div>
						</div>
					</div>
				  </div>
				</div>
				<?php }?>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
<!-- Awal Jumlah -->
	  <section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
			<?php 
				$count = mysqli_query($db, "SELECT * FROM employees");
				$hitung = mysqli_num_rows($count);
			?>
              <div class="text">
                <strong class="number" data-number="<?=$hitung?>">0</strong>
              </div>
              <div class="text">
              	<span>Guru & Karyawan</span>
              </div>
            </div>
		  </div>
		  	<?php 
				$news = mysqli_query($db, "SELECT * FROM news");
				$hitung_news = mysqli_num_rows($news);
			?>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="<?=$hitung_news?>">10</strong>
              </div>
              <div class="text">
              	<span>Berita & Prestasi</span>
              </div>
            </div>
		  </div>
		 	<?php 
				$galeri = mysqli_query($db, "SELECT * FROM gallery WHERE galeri_kategori = 'sapras'");
				$hitung_galeri = mysqli_num_rows($galeri);
			?>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="<?=$hitung_galeri?>">0</strong>
              </div>
              <div class="text">
              	<span>Sarana Prasarana</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
	</section>		
<!-- akhir jumlah -->
<!-- <section class="intro py-5 bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="intro-box w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-phone"></span>
							</div>
							<div class="text pl-3">
								<h4 class="mb-0">Call us: +12 234 456 7890</h4>
								<span> 198 West 21th Street, Suite 721 New York NY 10016</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="intro-box w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-clock-o"></span>
							</div>
							<div class="text pl-3">
								<h4 class="mb-0">Opening Hours</h4>
								<span>Mon - Sat 7:00 AM - 8:00 PM / Sundays closed</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="intro-box w-100">
							<p class="mb-0"><a href="#" class="btn btn-primary">Make an Appointment</a></p>
						</div>
					</div>
				</div>
			</div>	
		</section> -->
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
			  		<div class="col-md-7 heading-section text-center ftco-animate">
					<h2>Visi &amp; Misi</h2>
					<span class="subheading">Visi & Misi SMPN 7 Bondowoso</span>
			  	</div>
			</div>
			<div class="container">
			<div class="row no-gutters about">
				<div class="col-lg-6 mt-5">
				  <img src="<?=$_ENV['base_url']?>img_uploaded/cms/profile_sekolah/<?=$data_profile['profile_logo']?>" class="mx-auto d-block img-fluid" height="50%" alt="Gambar Profile SMPN7 Bondowoso">  
				</div>
	  
				<div class="col-lg-6 d-flex flex-column justify-content-center about-content p-5">
				  <div class="section-title">
					<h4 class="title mt-2">VISI</h4>
					<p><?=$data_profile['profile_visi']?></p>
				  </div>
				  <div class="section-title ">
					<h4 class="title">MISI</h4>
					<?=$data_profile['profile_misi']?>
				  </div>
				  <div class="col-lg-12 d-flex justify-content-end">
					<div class="p-2"><a href="<?=$_ENV['front_url']?>profile-sekolah" class="btn btn-primary d-block">Selengkapnya</a></div>
				  </div>
				</div>

			</div>
			</div>
		</section>		

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Informasi Terkini</h2>
            <span class="subheading">Berita &amp; Prestasi</span>
          </div>
        </div>
        <div class="row d-flex">
		 <?php 
			 $berita = mysqli_query($db, "SELECT * FROM `news` WHERE `news_category` = 'berita'");
			 while ($data_berita = mysqli_fetch_assoc($berita)) {?>
			<?php 
				$tgl = $data_berita['news_date'];
				$tgl_berita = date("d-m-Y",strtotime($tgl));
				$slug = $data_berita['slug'];
				
				$uid =$data_berita['aid'];
				$admin = mysqli_query($db,"SELECT * FROM `db_smpn7bws`.`admin` WHERE `id` = '$uid'");
				$data_admin = mysqli_fetch_array($admin);
			?>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="<?=$_ENV['front_url']?>detail-informasi/<?=$slug?>" class="block-20 rounded lozad" style="background-image: url('<?=$_ENV['base_url']?>img_uploaded/informasi/<?=$data_berita['news_picture']?>');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#"></a> <?=$tgl_berita; ?></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-user"></span><?=$data_admin['name_admin']?></a></div>
                </div>
                <h3 class="heading"><a href="<?=$_ENV['front_url']?>detail-informasi/<?=$slug?>>"><?=substr($data_berita['news_tittle'],0,100)."..."?></a></h3>
              </div>
            </div>
		  </div>
		  <?php } ?>
		  <div class="col-lg-12 d-flex justify-content-end">
			<div class="p-2"><a href="<?=$_ENV['front_url']?>informasi" class="btn btn-primary d-block">Selengkapnya</a></div>
		  </div>
        </div>
      </div>
    </section>
<?php include "partials/footer.php"?>