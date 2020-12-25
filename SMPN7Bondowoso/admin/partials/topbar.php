  <!--header start-->
  <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="admin.php" class="logo"><b>SMPN<span>7Bws</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="dropdown-toggle logout " data-toggle="dropdown" >Edit Profile<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                  <li><a class="logout" data-toggle="modal" data-target="#myModal<?=$id_admin;?>">Edit Profile</a></li>
                  <li><a class="logout" data-toggle="modal" data-target="#resetPassword<?=$id_admin;?>">Reset Password</a></li>
            </ul>    
          </li>
          <li><a class="logout" href="<?=$_ENV['base_url']?>controller/exit.php" >Logout</a></li>
        </ul> 
      </div>

    </header>
    <!--header end-->