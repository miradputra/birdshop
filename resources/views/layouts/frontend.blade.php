<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="frontend/eiser/img/favicon.png" type="image/png" />
  <title>Pojok Bird Shop</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="frontend/eiser/css/bootstrap.css" />
  <link rel="stylesheet" href="frontend/eiser/vendors/linericon/style.css" />
  <link rel="stylesheet" href="frontend/eiser/css/font-awesome.min.css" />
  <link rel="stylesheet" href="frontend/eiser/css/themify-icons.css" />
  <link rel="stylesheet" href="frontend/eiser/css/flaticon.css" />
  <link rel="stylesheet" href="frontend/eiser/vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="frontend/eiser/vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="frontend/eiser/vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="frontend/eiser/vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="frontend/eiser/vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="frontend/eiser/css/style.css" />
  <link rel="stylesheet" href="frontend/eiser/css/responsive.css" />
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <div class="container">
       @include('layouts.navbar')
      </div>
    </div>
  </header>
  <!--================Header Menu Area =================-->
    @yield('content')
  <!--================ start footer Area  =================-->
  <footer class="footer-area section_gap">
        <p>
          <center>
          Copyright &copy;<script>document.write(new Date().getFullYear());</script>
           All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true">
           </i>Pojok Bird Shop</a>
          </center>
        </p>
    </div>
  </footer>
  <!--================ End footer Area  =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="frontend/eiser/vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="frontend/eiser/vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="frontend/eiser/vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="frontend/eiser/vendors/isotope/isotope-min.js"></script>
  <script src="frontend/eiser/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="frontend/eiser/vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="frontend/eiser/vendors/counter-up/jquery.counterup.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>