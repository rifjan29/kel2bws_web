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
	    	<a class="navbar-brand" href="index.html"><img src="images/logo-sekolah.svg" alt="" srcset=""></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Beranda</a></li>
	        	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Profil
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					  <a class="dropdown-item" href="profile-sekolah.html">Tentang Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">Profil Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">Makna Logo</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">Visi & Misi</a>	 
					</div>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Guru & Karyawan
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					  <a class="dropdown-item" href="#">Data Guru</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">Data Karyawan</a> 
					</div>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Galeri
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					  <a class="dropdown-item" href="#">Kegiatan Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">Sarana Prasarana</a> 
					</div>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Informasi
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					  <a class="dropdown-item" href="#">Berita Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">Prestasi Siswa</a> 
					</div>
				  </li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">Kontak</a></li>
	     
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
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8500">0</strong>
              </div>
              <div class="text">
              	<span>Prestasi</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="378">0</strong>
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
				  <img src="<?=$_ENV['base_url']?>img_uploaded/cms/profile_sekolah/<?=$data_profile['profile_logo']?>" class="mx-auto d-block img-fluid" height="50%" alt="">  
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
					<div class="p-2"><a href="#" class="btn btn-primary d-block">Selengkapnya</a></div>
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
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-user"></span> Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
		  </div>
		  <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-user"></span> Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
		  </div>
		  <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-user"></span> Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
		  </div>
		  <div class="col-lg-12 d-flex justify-content-end">
			<div class="p-2"><a href="#" class="btn btn-primary d-block">Selengkapnya</a></div>
		  </div>
        </div>
      </div>
    </section>
<?php include "partials/footer.php"?>