<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Collega">
    <meta name="keywords" content="Collega">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <title>Hashmicro</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owlcarousel.css">
    @yield('css')
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
  </head>
  <body class="landing-wrraper">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper landing-page">
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- header start-->
        <header class="landing-header">
          <div class="custom-container">
            <div class="row">
              <div class="col-12">
                <nav class="navbar navbar-light p-0" id="navbar-example2">
                    <a class="navbar-brand" href="javascript:void(0)"> 
                        <img class="img-fluid" src="/assets/images/logo/logo.png" alt="">
                    </a>
                  <ul class="landing-menu nav nav-pills">
                    <li class="nav-item menu-back">back<i class="fa fa-angle-right"></i></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="/">Home</a></li> --}}
                  </ul>
                  <div class="buy-block"><a class="btn-landing" href="/login">Masuk</a>
                    <div class="toggle-menu"><i class="fa fa-bars"></i></div>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </header>
        <!-- header end-->
        <!--home section start-->
        @yield('body')
        
        <div class="sub-footer">
          <div class="custom-container">
            <div class="row">
              <div class="col-md-6 col-sm-2">
                {{-- <div class="footer-contain"><img class="img-fluid" src="/assets/images/logo/logo.png" alt=""></div> --}}
              </div>
              <div class="col-md-6 col-sm-10">
                <div class="footer-contain">
                  <p class="mb-0">Copyright 2022 ©All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--footer end-->
      </div>
    </div>
    <!-- latest jquery-->
    <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    
    <script src="/assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="/assets/js/bootstrap/popper.min.js"></script>
    <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="/assets/js/owlcarousel/owl-custom.js"></script>
    <script src="/assets/js/landing_sticky.js"></script>
    <script src="/assets/js/landing.js"></script>
    <script src="/assets/js/jarallax_libs/libs.min.js"></script>
    @yield('script')
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="/assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>