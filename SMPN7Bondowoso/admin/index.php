<?php 
  include_once "config/conn.php";
  include "partials/header.php"; 
?>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
     *********************************************************************************************************************************************************** -->
    <?php include "partials/topbar.php"?>
    <?php $title ="home";?> 
    <?php include "partials/sidebar.php"?>
    <?php include "partials/edit_profile.php"?>
    <!-- **********************************************************************************************************************************************************   
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <div class="row mt">
              <!-- SERVER STATUS PANELS -->
              <!-- Admin -->
              <div class="col-md-6 col-sm-6 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>GALERI</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-picture-o fa-3x"></i></h1>
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p><strong>Data</strong><br/>Galeri:</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h2>1</h2>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Admin -->

              <!-- sarana prasarana -->
              <div class="col-md-6 col-sm-6 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>Sarana Prasarana</h5>
                  </div>
                  <h1 class="mt" style="color: white;"><i class="fa fa-picture-o fa-3x"></i></h1>
                  
                  <div class="row donut-chart">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p>Data<br/>Sarana Prasarana:</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h2 style="color:#264653;">20</h2>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /sarana prasarana -->
              <!-- Data Informasi -->
              <div class="col-md-6 col-sm-6 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>Informasi</h5>
                  </div>
                  <h1 class="mt" style="color: white;"><i class="fa fa-file-text fa-3x"></i></h1>
                  
                  <div class="row donut-chart">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p>Data<br/>Berita & Prestasi:</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h2 style="color:#264653;">50</h2>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /sarana prasarana -->              
              <!-- Guru & Karyawan -->
              <div class="col-md-6 col-sm-6 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>GURU & KARYAWAN</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-users fa-3x"></i></h1>
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p><strong>Data</strong><br/>Guru & Karyawan:</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h2>1</h2>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Guru & Karyawan -->            
            
             
            </div>
      
         
        
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->

            <!-- CALENDAR-->
            <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
   <?php include "partials/footer.php"?>
</body>

</html>
