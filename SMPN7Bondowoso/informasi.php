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
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>employees/#dataSMPN7">Data Guru</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="<?=$_ENV['front_url']?>employees/#dataSMPN7">Data Karyawan</a> 
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
	        	<li class="nav-item"><a href="<?=$_ENV['front_url']?>kontak" class="nav-link">Kontak</a></li>
	     
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
              <h1 class="mb-0 bread">Berita & Prestasi SMPN 7 Bondowoso</h1>
            </div>
        </div>
    </div>
</section> 

<!--  Alamat Sekolah -->
<section class="ftco-section" id="berita-sekolah">
    <div class="container">
        <div class="row"> 
          <!-- Latest Posts -->
          <main class="posts-listing col-lg-8 widget"> 
            
            <div class="container">
              <div class="row d-flex">
              <?php 
              $batas = 3;
              $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
              $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

              $previous = $halaman - 1;
              $next = $halaman + 1;

              $berita = mysqli_query($db, "SELECT * FROM `news` WHERE `news_category` = 'berita'");
              $jumlah_data = mysqli_num_rows($berita);
              $total_halaman = ceil($jumlah_data / $batas);

              $data_berita = mysqli_query($db, "SELECT * FROM `news` WHERE `news_category` = 'berita' LIMIT $halaman_awal, $batas");              
              while ($d = mysqli_fetch_array($data_berita)) {?>
              <?php 
                $tgl = $d['news_date'];
                $tgl_berita = date("d-m-Y",strtotime($tgl));
                
                $uid =$d['aid'];
                $admin = mysqli_query($db,"SELECT * FROM `db_smpn7bws`.`admin` WHERE `id` = '$uid'");
                $data_admin = mysqli_fetch_array($admin);
              ?>
              <div class="col-md-6 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                      <a href="<?=$_ENV['front_url']?>detail-informasi/?berita=<?=$d['slug']?>">
                        <img class="block-20 rounded lozad img-fluid " src="<?=$_ENV['base_url']?>img_uploaded/informasi/<?=$d['news_picture']?>" alt="">
                      </a>
                      <div class="text mt-3">
                        <div class="meta mb-2">
                          <div><a href="#"></a> <?=$tgl_berita?>></div>
                          <div><a href="#" class="meta-chat"><span class="fa fa-user"></span><?=$data_admin['name_admin']?></a></div>
                        </div>
                        <h3 class="heading"><a href="<?=$_ENV['front_url']?>detail-informasi/?berita=<?=$d['slug']?>"><?=substr($d['news_tittle'],0,100)."..."?></a></h3>
                      </div>
                    </div>
              </div>
              <?php } ?>
              </div>
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link"<?php if($halaman < $total_halaman) { echo "href='?halaman=$previous'"; } ?> >
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <?php 
                    for($x=1;$x<=$total_halaman;$x++){
                      ?> 
                      <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                      <?php
                    }
                  ?>	
                  <li class="page-item">
                    <a class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?> aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </main>
          <aside class="col-lg-4">   
  
          <div class="sidebar-box widget ftco-animate">
                <h3>Prestasi</h3>
              <?php 
              $batas = 6;
              $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
              $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

              $a = $halaman - 1;
              $next = $halaman + 1;

              $prestasi = mysqli_query($db, "SELECT * FROM `news` WHERE `news_category` = 'prestasi'");
              $jumlah_data = mysqli_num_rows($prestasi);
              $total_halaman = ceil($jumlah_data / $batas);

              $data_prestasi = mysqli_query($db, "SELECT * FROM `news`WHERE `news_category` = 'prestasi' LIMIT $halaman_awal, $batas"); 
              if ($prestasi == null) {
                echo "Maaf, yang ditampilkan tidak ada";
              }else{
                while ($x = mysqli_fetch_array($data_prestasi)) {?>
                <?php 
                  $tgl = $x['news_date'];
                  $tgl_berita = date("d-m-Y",strtotime($tgl));
                  
                  $uid =$x['aid'];
                  $admin = mysqli_query($db,"SELECT * FROM `db_smpn7bws`.`admin` WHERE `id` = '$uid'");
                  $data_admin = mysqli_fetch_array($admin)      
                ?>
                <div class="block-21 mb-3 d-flex ftco-animate"">
                  <a class="blog-img mr-2" style="background-image: url(<?=$_ENV['base_url']?>img_uploaded/informasi/<?=$x['news_picture']?>);"></a>
                  <div class="text">
                    <h3 class="heading" style="margin-bottom: 0 !important;"><a href="#"><?=substr($x['news_tittle'],0,100)."..."?></a></h3>
                    <?=$x['news_content']?>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span><?=$tgl_berita?></a></div>
                      <div><a href="#"><span class="icon-person"></span><?=$data_admin['name_admin']?></a></div>
                    </div>
                  </div>
                </div>
              <?php
                }
              }
              ?>
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$a'"; } ?> aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <?php 
                    for($x=1;$x<=$total_halaman;$x++){
                      ?> 
                      <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                      <?php
                    }
                  ?>	
                  <li class="page-item">
                    <a class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?> aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
          </aside>
        </div>
      </div>
</section>
<!-- selesai Alamat singkat -->
<?php include "partials/footer.php"?>