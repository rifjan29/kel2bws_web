<footer class="footer">
			<div class="container-fluid px-lg-5">
				<div class="row">
					<div class="col-md-9 py-5">
						<div class="row">
							<div class="col-md-4 mb-md-0 mb-4">
								<h2 class="footer-heading">Social Media</h2>
								<ul class="ftco-footer-social p-0">
									<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						<div class="col-md-4 mb-md-0 mb-4">
								<h2 class="footer-heading">Tentang Sekolah</h2>
								<ul class="list-unstyled">
									<li><a href="<?=$_ENV['front_url']?>profile-sekolah.php#tentang-sekolah" class="py-1 d-block">Sejarah</a></li>
									<li><a href="<?=$_ENV['front_url']?>profile-sekolah.php#visi-sekolah" class="py-1 d-block">Visi & Misi</a></li>
								</ul>
						</div>
						<div class="col-md-4 mb-md-0 mb-4">
							<h2 class="footer-heading">Informasi Terkini</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-1 d-block">Berita</a></li>
								<li><a href="#" class="py-1 d-block">Prestasi</a></li>
							</ul>
						</div>
										
						</div>
						<div class="row mt-md-5">
							<div class="col-md-12">
								<p class="copyright"> <a href="#" target="">SMPN 7 Bondowoso</a></p>
								<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
								
							</div>
						</div>
					</div>
					<div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
						<h2 class="footer-heading">Kink Tautan</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-1 d-block">https://hackerthemes.com/bootstrap-cheatsheet/#justify-content-end</a></li>
							<li><a href="#" class="py-1 d-block">https://hackerthemes.com/bootstrap-cheatsheet/#justify-content-end</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src="https://cdn.jsdelivr.net/npm/lozad"></script>
  <script src="<?=$_ENV['front_url']?>js/jquery.min.js"></script>
  <script src="<?=$_ENV['front_url']?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=$_ENV['front_url']?>js/popper.min.js"></script>
  <script src="<?=$_ENV['front_url']?>js/bootstrap.min.js"></script>
  <script src="<?=$_ENV['front_url']?>js/jquery.easing.1.3.js"></script>
  <script src="<?=$_ENV['front_url']?>js/jquery.waypoints.min.js"></script>
  <script src="<?=$_ENV['front_url']?>js/jquery.stellar.min.js"></script>
  <script src="<?=$_ENV['front_url']?>js/jquery.animateNumber.min.js"></script>
  <script src="<?=$_ENV['front_url']?>js/owl.carousel.min.js"></script>
  <script src="<?=$_ENV['front_url']?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?=$_ENV['front_url']?>js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?=$_ENV['front_url']?>js/google-map.js"></script>
  <script src="<?=$_ENV['front_url']?>js/main.js"></script>
  <script>
    ///////////////// fixed menu on scroll for desktop
    if ($(window).width() > 992) {
        $(window).scroll(function(){  
            if ($(this).scrollTop() > 40) {
                $('#ftco-navbar').addClass("fixed-top");
                // add padding top to show content behind navbar
                $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
            }else{
                $('#ftco-navbar').removeClass("fixed-top");
                // remove padding top from body
                $('body').css('padding-top', '0');
            }   
        });
		} // end if
		$(document).ready(function(){

        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');
            
            if(value == "all")
            {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            }
            else
            {
        //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
        //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');
                
            }
        });

        if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
        }
        $(this).addClass("active");

        });

  </script> 
  <script src="">
      const observer = lozad(); // lazy loads elements with default selector as ".lozad"
      observer.observe();
  </script>
  </body>
</html>
