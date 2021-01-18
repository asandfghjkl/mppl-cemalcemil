<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Order</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +62 81234567890&nbsp;&nbsp;
        <span class="d-none d-lg-inline-block"><i class="icofont-location-pin"></i> Gresik</span>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ route('home')}}">Choose Your Order</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="book-a-table text-center"><a href="{{ route('home')}}">Back</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
      <script type="text/javascript">
    var clicks = 0;
    function onClick() {
        clicks += 1;
        document.getElementById("clicks").innerHTML = clicks;
    };
    
    function onClickk() {
        clicks -= 1;
        document.getElementById("clicks").innerHTML = clicks;
    };
    
    </script>

  <main id="main">
  <section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">
        <h3><br><br></h3>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-sweet">Manis</li>
              <li data-filter=".filter-savory">Asin</li>
              <li data-filter=".filter-specialty">Spesial</li>
            </ul>
          </div>
        </div>
        
        <!-- Success message -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
      @endif

      <form action="" method="post" action="{{ route('order.store') }}">
      @csrf
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-sweet">
            <img src="assets/img/menu/bola-coklat.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bola-bola Coklat</a><span>Rp10.000,00</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-sweet">
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="bolabolacoklat" id="bolabolacoklat" placeholder="Jumlah" data-rule="between:1,10" data-msg="masukkan jumlah yang sesuai, minimal = 1 / maksimal 10" />
              <div class="validate"></div>
            </div>

          </div>

          <div class="col-lg-6 menu-item filter-sweet">
            <img src="assets/img/menu/choco-cookies.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Choco Cookies</a><span>Rp8.000,00</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-sweet">
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="chococookies" id="chococookies" placeholder="Jumlah"data-rule="between:1,10" data-msg="masukkan jumlah yang sesuai, minimal = 1 / maksimal 10" />
              <div class="validate"></div>
            </div>

          </div>

          <div class="col-lg-6 menu-item filter-savory">
            <img src="assets/img/menu/mie-crispy.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mie Crispy</a><span>Rp8.000,00</span>
            </div>
          </div>


          <div class="col-lg-6 menu-item filter-savory">
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="miecrispy" id="miecrispy" placeholder="Jumlah" data-rule="between:1,10" data-msg="masukkan jumlah yang sesuai, minimal = 1 / maksimal 10" />
              <div class="validate"></div>
            </div>

          </div>

          <div class="col-lg-6 menu-item filter-sweet">
            <img src="assets/img/menu/cupcake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Cupcake Dengan Topping</a><span>Rp10.000,00</span>
            </div>
          </div>
          
          <div class="col-lg-6 menu-item filter-sweet">
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="cupcaketopping" id="cupcaketopping" placeholder="Jumlah" data-rule="between:1,10" data-msg="masukkan jumlah yang sesuai, minimal = 1 / maksimal 10" />
              <div class="validate"></div>
            </div>

          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/mix.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mix Box 4 in 1</a><span>Rp33.000,00</span>
            </div>
          </div>
          
          <div class="col-lg-6 menu-item filter-specialty">
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="mixbox4in1" id="mixbox4in1" placeholder="Jumlah" data-rule="between:1,10" data-msg="masukkan jumlah yang sesuai, minimal = 1 / maksimal 10" />
              <div class="validate"></div>
            </div>

          </div>

          <div class="col-lg-6 menu-item filter-sweet filter-savory filter-specialty">
            <div class="menu-content">
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-sweet filter-savory filter-specialty">
          </div>
        </div>
        
        <input type="submit" name="send" value="Pesan" class="btn btn-dark btn-block">
      </form>

        {{-- <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-12 text-center">        
            <a href=#>
              <input type="submit" name="send" value="Pesan" class="btn btn-dark btn-block">
          </div>
        </div> --}}

      </div>
    </section>

 

  </div>

    
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Cemal-Cemil</h3>
              <p>
                <strong>Phone:</strong> +62 81234567890<br>
                <strong>Email:</strong> cemalcemil@gmail.com<br>
              </p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Cemal-Cemil</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>