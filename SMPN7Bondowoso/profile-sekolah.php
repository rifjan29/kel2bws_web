<?php include "admin/config/conn.php"?>
<?php include "partials/header.php"?>
<?php
	$sql = mysqli_query($db,"SELECT * FROM contact");
	$data = mysqli_fetch_array($sql);

 	$profile = mysqli_query($db, "SELECT * FROM profile");
  $data_profile = mysqli_fetch_array($profile);
 
  $pimpinan = mysqli_query($db, "SELECT * FROM headmaster ORDER BY id DESC LIMIT 1");
  $data_pimpinan = mysqli_fetch_array($pimpinan);
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
	        	<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Profil
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					  <a class="dropdown-item" href="#tentang-sekolah">Tentang Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#tentang-sekolah">Profil Sekolah</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#logo-sekolah">Makna Logo</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#visi-sekolah">Visi & Misi</a>	 
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
<section class="hero-wrap hero-wrap-2" style="background-color: #031C0A;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?=$_ENV['front_url']?>">Beranda</a></span><i class="fa fa-caret-right mr-1" aria-hidden="true"></i> <span>Profil Sekolah</span></p>
              <h1 class="mb-0 bread">Profil SMPN 7 Bondowoso</h1>
            </div>
        </div>
    </div>
</section> 
 
<!-- sejarah singkat -->
<section class="ftco-section-sekolah" id="tentang-sekolah">
    <div class="container">
        <div class="row">
          <!-- Sejarah Posts -->
          <main class="col-lg-8 widget"> 
            <div class="container">
              <div class="row">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2>SEJARAH SINGKAT</h2>
                </div>
                <div class="ftco-animate">
                    <?=$data_profile['profile_history']?>
                </div>
              </div>
            </div>
          </main>
          <aside class="col-lg-4">
            <!-- Kepala Sekolah -->
            <div class="widget kepala-sekolah">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2>KEPALA SEKOLAH</h2>    
                    <div class="">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(<?=$_ENV['base_url']?>img_uploaded/cms/profile_pimpinan/<?=$data_pimpinan['picture_hm']?>);"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                                <h3><?=$data_pimpinan['name_hm']?></h3>
                                <!-- <span class="position mb-2">MATEMATIKA</span> -->
                            <div class="faded">
                                <table >
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td><?=$data_pimpinan['name_hm']?></td>
                                    </tr>
                                    <tr>
                                        <th>Pendidikan Terakhir</th>
                                        <td><?=$data_pimpinan['educate_hm']?></td>
                                    </tr>
                                    <tr>
                                        <th>Pengalaman Kerja</th>
                                        <td><?=$data_pimpinan['experience']?></td>
                                    </tr>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </aside>
        </div>
      </div>
</section>
<!-- selesai sejarah singkat -->

<!-- bg-light -->
<!-- VISI & Misi -->
<section class="ftco-section-sekolah " id="visi-sekolah">
    <div class="container">
        <div class="row">
          <!-- Sejarah Posts -->
          <main class="col-lg-12 widget"> 
            <div class="container">
              <div class="row">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2>VISI & MISI</h2>
                </div>
                <div class="ftco-animate">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2><i class="fa fa-caret-right pr-2" aria-hidden="true"></i>VISI</h2>
                    </div>
                    <div class="visi">
                      <?=$data_profile['profile_visi']?>
                    </div>
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2><i class="fa fa-caret-right pr-2" aria-hidden="true"></i>MISI</h2>
                    </div>
                    <div class="misi" >
                      <?=$data_profile['profile_misi']?>
                    </div>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
</section>

<!-- Makna Logo -->
<section class="ftco-section-sekolah" id="logo-sekolah">
    <div class="container">
        <div class="row">
          <!-- Sejarah Posts -->
          <main class="col-lg-12 widget"> 
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 heading-section text-center ftco-animate">
                    <h2>MAKNA LOGO</h2>
                    <img src="<?=$_ENV['base_url']?>img_uploaded/cms/profile_sekolah/<?=$data_profile['profile_logo']?>" class="img-fluid" alt="Gambar Logo SMPN 7 Bondowoso" srcset="">
                  
                </div>
                <div class="col-lg-12 col-md-12 heading-section text-center ftco-animate" >
                    <h2 style="color: #46A15B;">SMPN 7 Bondowoso</h2>
                </div>
                <div class="col-lg-12 col-md-12 heading-section text-center ftco-animate" >
                    <i><?=$data_profile['profile_title']?></i>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
</section>
<!-- selesai Makna Logo singkat -->
<!--  Alamat Sekolah -->
<section class="ftco-section" id="alamat-sekolah">
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                            <?=$data_profile['profile_location']?>
                            </div>
                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-md-5 p-4"  style="background-color: #031C0A;">
                                    <h3>SMPN 7 Bondowoso</h3>
                                    <p class="mb-4">Alamat SMPN 7 Bondowoso</p>
                            <div class="dbox w-100 d-flex align-items-start">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text pl-3">
                                <p><span>Alamat:</span><?=$data_profile['profile_address']?></p>
                                </div>
                          </div>
                      </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
<!-- selesai Alamat singkat -->
<?php include "partials/footer.php"?>