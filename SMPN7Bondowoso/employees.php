<?php include "admin/config/conn.php"?>
<?php include "partials/header.php"?>
<?php 
	$sql = mysqli_query($db,"SELECT * FROM contact");
  $data = mysqli_fetch_array($sql);
  
  $count = mysqli_query($db, "SELECT * FROM employees WHERE category_emp = 'guru'");
  $hitung = mysqli_num_rows($count);
  
  $count1 = mysqli_query($db, "SELECT * FROM employees WHERE category_emp = 'karyawan'");
  $hitung_karyawan = mysqli_num_rows($count1);
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
	    	<a class="navbar-brand" href="<?=$_ENV['front_url']?>"><img src="<?=$_ENV['base_url']?>img_uploaded/logo_header.svg" alt="gambar logo"></a>
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
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>profile-sekolah.php#tentang-sekolah">Tentang Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>profile-sekolah.php#tentang-sekolah">Profil Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>profile-sekolah.php#logo-sekolah">Makna Logo</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>profile-sekolah.php#visi-sekolah">Visi & Misi</a>	 
					</div>
				  </li>
				  <li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Guru & Karyawan
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					  <a class="dropdown-item" href="#data-guru">Data Guru</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#data-karyawan">Data Karyawan</a> 
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
    <section class="hero-wrap hero-wrap-2" style="background-color: #031C0A;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Beranda</a></span><i class="fa fa-caret-right mr-1" aria-hidden="true"></i> <span>Guru dan Karyawan</span></p>
              <h1 class="mb-0 bread">Guru dan Karyawan</h1>
            </div>
          </div>
        </div>
      </section> 
      <section class="ftco-counter" id="section-counter">
          <div class="container">
            <div class="row">
            <div class="col-md-6 col-lg-6 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="<?=$hitung?>">0</strong>
                </div>
                <div class="text">
                    <span>Jumlah Guru</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="<?=$hitung_karyawan?>">0</strong>
                </div>
                <div class="text">
                    <span>Jumlah Karyawan</span>
                </div>
              </div>
            </div>
          </div>
          </div>
      </section>
          
  
<section class="ftco-section bg-light" id="data-guru">
    <div class="container">
            <div class="row justify-content-center pb-3 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Data Guru SMPN 7 Bondowoso</h2>
                     <span class="subheading">Guru &amp; Karyawan</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-6">
                    <form action="#" class="search-form">
                        <div class="form-group">
                          <span class="fa fa-search"></span>
                          <input type="text" class="form-control" id="search" placeholder="Pencarian Guru Ketikkan Nama/Mapel">
                        </div>
                    </form>
                </div>
            </div>
          <div id="tampil">
            <?php
              $guru = mysqli_query($db, "SELECT * FROM employees WHERE category_emp = 'guru'");
              while ($row = mysqli_fetch_object($guru)) {?>
                  <div class="row">
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url(<?=$_ENV['base_url']?>img_uploaded/guru_karyawan/<?=$row->picture_emp?>);"></div>
                            </div>
                                <div class="text pt-3 px-3 pb-4 text-center">
                                    <h3><?=$row->name_emp?></h3>
                                    <span class="position mb-2"><?=$row->position_emp?></span>
                                    <div class="faded"></div>
                                </div>
                        </div>
                    </div>
                  </div>
              <?php }?>
          </div> 
    </div>
</section>
  
<section class="ftco-section bg-light" id="data-karyawan">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Data Karyawan SMPN 7 Bondowoso</h2>
                <span class="subheading">Guru &amp; Karyawan</span>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-9 col-md-6">
                    <form action="#" class="search-form">
                        <div class="form-group">
                          <span class="fa fa-search"></span>
                          <input type="text" class="form-control" placeholder="Pencarian Karyawan Ketikkan Nama/Pekerjaan">
                        </div>
                    </form>
                </div>
            </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 ftco-animate">
              <div class="staff">
                  <div class="img-wrap d-flex align-items-stretch">
                      <div class="img align-self-stretch" style="background-image: url(images/staff-1.jpg);"></div>
                  </div>
                      <div class="text pt-3 px-3 pb-4 text-center">
                          <h3>Bu Susi Susanti</h3>
                          <span class="position mb-2">MATEMATIKA</span>
                          <div class="faded"></div>
                      </div>
              </div>
          </div>
      </div>
    </div>
</section>
<?php require_once "partials/footer.php"?>