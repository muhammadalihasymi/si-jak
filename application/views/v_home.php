<!DOCTYPE html>
<html lang="en">
<head>
  <title>Si-Jak 2021</title>
  <meta charset="UTF-8">
  <meta name="description" content="assets2/WebUni Education Template">
  <meta name="keywords" content="assets2/webuni, education, creative, html">
  <meta name="viewport" content="assets2/width=device-width, initial-scale=1.0">
  <!-- Favicon -->   
  <link href="<?php echo base_url();?>assets2/img/favicon.ico" rel="shortcut icon"/>

  <!-- Google Fonts -->
  <link href="<?php echo base_url();?>assets2/https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/owl.carousel.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/style.css"/>
  
<script type="text/javascript">
      function cekform()
      {
        if(!$("#username").val())
        {
          alert('maaf username tidak boleh kosong');
          $("#username").focus();
          return false;
        }
        if(!$("#password").val())
        {
          alert('maaf password tidak boleh kosong');
          $("#password").focus();
          return false;
        }
      }
    
    </script>

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header section -->
  <header class="header-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-1">
          <div class="site-logo">
            <img src="<?php echo base_url();?>assets2/img/img.png" alt="">
           

          </div>
          <div class="nav-switch">
            <i class="fa fa-bars"></i>
          </div>
        </div>
        <div class="col-lg-7 col-md-9">
          <div class="hero-text text-white">

         <h1>Si -JAK</h1>
         
         <h4>BADAN KEUANGAN DAN ASET DAERAH</h4>
        <p>BIDANG PERBENDAHARAAN </p>
          <nav class="main-menu">
            <ul>
              <form class="intro-newslatter" method="POST" action="<?php echo base_url();?>index.php/home/getlogin" 
                        onsubmit="return cekform();">
    <input style="font-size: 15px" type="" name="username" id="username" placeholder="username">
     <input style="font-size: 15px" type="password" name="password" id="password" placeholder="password">
            <button  type="submit" name="submit" class="">Login</button>
          </form>
            </ul>
          </nav>
        </div>
      </div>
    </div>
   


  </header>
  <!-- Header section end -->


  <!-- Hero section -->
  <section class="hero-section set-bg" data-setbg="<?php echo base_url();?>assets2/img/bg.jpg">
    <div class="container">
      <div class="hero-text text-white">
       
      </div>
      <div class="row">
        <div class="col-lg-10 offset-lg-2">
          
        </div>
      </div>
    </div>
  </section>
  <!-- Hero section end -->


  <!-- categories section -->
 
        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  made <i class="fa fa-home-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">BKAD</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
      </div>
    </div>
  </footer> 
  <!-- footer section end -->


  <!--====== Javascripts & Jquery ======-->
  <script src="<?php echo base_url();?>assets2/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url();?>assets2/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets2/js/mixitup.min.js"></script>
  <script src="<?php echo base_url();?>assets2/js/circle-progress.min.js"></script>
  <script src="<?php echo base_url();?>assets2/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets2/js/main.js"></script>
  
</html>