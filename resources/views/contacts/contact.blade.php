<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern - v2.1.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@gubgroup.com</a>
        <i class="icofont-phone"></i> +224 654 18 14 00
      </div>
      <div class="social-links">
        <a target="_blank" href="https://twitter.com/mycauri" class="twitter"><i class="icofont-twitter"></i></a>
        <a target="_blank" href="https://www.facebook.com/mycauri" class="facebook"><i class="icofont-facebook"></i></a>
        <a target="_blank" href="https://www.instagram.com/mycauri" class="instagram"><i class="icofont-instagram"></i></a>
        {{-- <a href="#" class="skype"><i class="icofont-skype"></i></a> --}}
        <a target="_blank" href="https://www.linkedin.com/company/my-cauri" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!-- <h1 class="text-light"><a href="{{url('index')}}">MYCAURI</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{url('index')}}"><img src="assets/img/logo.png" alt="" class="img-fluid" style="width: 40px; height:50px;"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="{{url('index')}}"><strong>Mycauri</strong></a></li>
          <li><a href="{{url('about')}}"><strong>A propos</strong></a></li>
          <li class="drop-down"><a href="{{url('service')}}"><strong>Nos Services</strong></a>
            <ul>
              <li><a href="{{url('wallet')}}">CAURI Wallet </a></li>      
              <li><a href="{{url('transfer')}}">CAURI Transfer</a></li>
              <li><a href="{{url('pay')}}">CAURI Pay</a></li>
              <li><a href="{{url('shop')}}">CAURI Shop</a></li>
              <li><a href="{{url('express')}}">CAURI Express</a></li>
            </ul>
          </li>
          <li><a href="{{url('agence')}}"><strong>Nos Agences</strong></a></li>
          <li class="active"><a href="{{url('contact')}}"><strong> nous Contacter</strong></a></li>

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="{{url('index')}}">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    

    

    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact">
      <div class="container">

        <div class="row">
          <div class="col-4"></div>
          <div class="col-4">              
            @if(\Session::has('success'))
              <div class="alert alert-success" role="alert">
                {{ \Session::get('success') }}
              </div>
            @endif
          </div>
          <div class="col-4"></div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>Kipé rue de l'université<br>Mercure International 
                  <br>Guinée Conakry</p>  
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>contact@gubgroup.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+224 654 18 14 00</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">        

            <form action="{{url('send')}}" method="post" class="email-form">
              {{ csrf_field()}}  
              
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="Your Name" required="required" />
                  @error('name')
                    <p style="color: red;">{{ $errors->first('name')}}</p> 
                  @enderror
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Your Email" required="required" /> 
                  @error('email')
                    <p style="color: red;">{{ $errors->first('email')}}</p> 
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject"  placeholder="Subject" required="required" />
                @error('subject')
                  <p style="color: red;">{{ $errors->first('subject')}}</p> 
                @enderror
              </div>
              <div class="form-group">
                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5"  placeholder="Message" required="required"></textarea>
                @error('message')
                  <p style="color: red;">{{ $errors->first('message')}}</p> 
                @enderror
              </div>
              <div class="mb-3"></div>
              <div class="text-center" class="form-control">
                <button  class="btn" type="submit">Send Message</button>
              </div>
            </form>
          </div>

        </div>

      </div>
      <br><br>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <div class="row d-flex justify-content-around align-items-center text-black" >
    <div class="col-12 d-flex justify-content-around align-items-center" style="min-height:200px;background-color:#f3f1f0;" >
      <p style="text-align: center;margin-bottom:0px; font-size:30px; color:#224f86;"> Nos agents à votre service du Lundi au <br> Vendredi de 9h à 17h30, et le Samedi de 9h30 à 13h</p>
      
    </div>
  </div>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MYCAURI</h3>
            <p>
              kipé rue de l'université <br>
              Mercure International<br>
              Guinée Conakry <br><br>
              <strong>Phone:</strong> +224 654 18 14 00<br>
              <strong>Email:</strong> contact@gubgroup.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens Utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('index')}}">Mycauri</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('about')}}">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('service')}}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('agence')}}">Nos agences</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('contact')}}">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('wallet')}}">CAURI Wallet</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('transfer')}}">CAURI Transfer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('pay')}}">CAURI Pay</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('shop')}}">CAURI Shop</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('express')}}">CAURI Express</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>S’inscrire à la newsletter </h4>
            <p>Soyez les premiers à être informés.</p>
            <form action="{{url('newsletter')}}" method="post">
              
              {{ csrf_field()}}
              <input type="email" name="email" class="@error('email') is-invalid @enderror" required placeholder="Entrez votre email">
              <input type="submit" value="Subscribe">                   
              @error('email')
                  <div class="invalid-feedback"> 
                      {{$errors->first('email')}}
                  </div>
              @enderror
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>MYCAURI</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a target="_blank" href="https://twitter.com/mycauri" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a target="_blank" href="https://www.facebook.com/mycauri" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a target="_blank" href="https://www.instagram.com/mycauri" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a target="_blank" href="https://www.linkedin.com/company/my-cauri" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>