 <!--footer start-->
 <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
            with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="" class="go-top">
          <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
    <?php
      $sql = mysqli_query($db,"SELECT * FROM admin WHERE id ='1'");

      while ($data = mysqli_fetch_assoc($sql)) {

    ?>
    <!--footer end-->
  </section>
  <script src="<?=$_ENV['base_url']?>lib/jquery/jquery.min.js"></script>
  <script src="<?=$_ENV['base_url']?>lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=$_ENV['base_url']?>lib/jquery.scrollTo.min.js"></script>
  <script src="<?=$_ENV['base_url']?>lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <!-- js placed at the end of the document so the pages load faster -->

  <script class="include" type="text/javascript" src="<?=$_ENV['base_url']?>lib/jquery.dcjqaccordion.2.7.js"></script>

  <!--common script for all pages-->
  <script src="<?=$_ENV['base_url']?>lib/common-scripts.js"></script>
  <script type="text/javascript" src="<?=$_ENV['base_url']?>lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="<?=$_ENV['base_url']?>lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="<?=$_ENV['base_url']?>lib/sparkline-chart.js"></script>
  <script src="<?=$_ENV['base_url']?>lib/zabuto_calendar.js"></script>
    <!-- js placed at the end of the document so the pages load faster -->
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Selamat Datang <?=$data['name_admin']?>!',
        // (string | mandatory) the text inside the notification
        text: 'Digunakan untuk memanipulasi data untuk website SMPN 7 Bondowoso',
        // (string | optional) the image to display on the left
        image: '<?=$_ENV['base_url']?>img_uploaded/<?=$data['picture_admin']?>',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });
      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        
        action_nav: function() {
          return myNavFunction(this.id);
        },
        today: true,
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myFunction() {
      var x = document.getElementById("password_lama");
      var y = document.getElementById("password_baru");
      if (x.type === "password" && y.type === "password") {
        x.type = "text";
        y.type = "text";
      } else {
        x.type = "password";
        y.type = "password";
        }
      }
  </script>
    
<?php }?>