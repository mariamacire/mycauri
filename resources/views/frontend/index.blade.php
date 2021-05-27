<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MYCAURI</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
          <li class="active"><a href="{{url('index')}}"><strong>Mycauri</strong></a></li>
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
          <li><a href="{{url('contact')}}"><strong> nous Contacter</strong></a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

              
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
          
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
          
              
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>CAURI Wallet</h2>
              <p>Pourquoi porter de l’argent sur soi ? Utilisez plutôt CAURI Wallet  </p>
              <p>Votre Wallet sur vous partout où vous êtes simple et sécurisé.  </p>
              
              <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>CAURI Transfer</h2>
              <p>Envoyez et recevez de l’argent instantanément en toute simplicité partout où vous êtes.</p>
              <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>CAURI Pay </h2>
              <p>Simplifiez-vous la vie, profitez dès maintenant des recharges téléphonique CAURI Pay sans frais.</p>
              <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>CAURI Shop</h2>
              <p>Faites vos achats en ligne aux meilleurs prix partout en guinée.</p>
              <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
            </div>
          </div>
        </div>

        <!-- Slide 5-->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>CAURI Express</h2>
              <p>Soucieux de faire parvenir vos colis à destination ?</p>
              <p>Rassurez-vous CAURI Express est là pour vous garantir la livraison de vos colis en toute sécurité partout en  guinée.</p>
              <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Depuis plus de <span>10 ans</span> </h3>
            <p>l’entreprise a su acquérir l’expérience et le professionnalisme nécessaire afin d’honorer toutes ses prestations. vous pouvez nous contacter au +224 654 18 14 00 ou en remplissant notre formulaire de contact </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{url('contact')}}">Contactez-nous</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 class="h2"><strong>Check out our services</strong></h2>
        </div>

        <div class="row d-flex justify-content-around">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <a href="{{url('express')}}"><div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title">CAURI Express</a></h4>
              <p class="description">Ne perdez plus de temps inscrivez-vous dès maintenant devenez livreur ou client pour envoyer ou partager  des colis en toute sécurité.</p>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <a href="{{url('transfer')}}"><div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title">CAURI Transfer</a></h4>
              <p class="description">Désormais plus besoins de vous inquiéter pour vos échanges monétaires, CAURI Transfer vous assure la sécurité de toutes vos transactions effectuées.</p>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-around">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
            <a href="{{url('wallet')}}"><div class="icon"><i class="bx bx-wallet"></i></div>
              <h4 class="title">CAURI Wallet</a></h4>
              <p class="description">Votre porte-monnaie électronique avec vous partout où vous êtes.</p>
            </div>
          </div>
        </div>
          
        <div class="row d-flex justify-content-around">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <a href="{{url('pay')}}"><div class="icon"><i class="bx bx-phone"></i></div>
              <h4 class="title">CAURI Pay</a></h4>
              <p class="description">Restez toujours en contact avec vos proches en rechargeant tous les operateurs téléphonique en guinée.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <a href="{{url('shop')}}"><div class="icon"><i class="bx bx-cart"></i></div>
              <h4 class="title">CAURI Shop</a></h4>
              <p class="description">Profitez de la diversité de nos produits mis à votre disposition. Acheter moins cher  tous les jours.</p>
            </div>
          </div>
        </div>
        
      </div>
    </section><!-- End Services Section -->

    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">
          <div class="col-md-12"></div>
          <div class="col-lg d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3> <strong>POURQUOI CHOISIR MYCAURI </strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span>Multi-services <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                      Nous vous proposons une multitude de service adapté à vos besoins.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span>Rapide et efficace <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                      Votre temps est précieux pour nous. MYCAURI investit énormément dans la qualité des services fournis, nous disposons d'une équipe dynamique qui travaille pour l'efficience de nos prestations.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span>Des services ultra-sécurisé<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      La préservation de vos données personnelles est primordiale pour nous car elle fait partie de l’éthique de l’entreprise.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2 class="h2"><strong>nos clients parlent de nous</strong></h2>
        </div>
          
        <div class="row">

          <div class="col-lg-6" data-aos="fade-up">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/a.png" class="testimonial-img" alt="">
              <h3>Will Brown</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item mt-4 mt-lg-0">
              <img src="assets/img/testimonials/y9.png" class="testimonial-img" alt="">
              <h3>Merdan Yigit</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam .
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/c.png" class="testimonial-img" alt="">
              <h3>Merdan Yigit</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/bb.png" class="testimonial-img" alt="">
              <h3>Ibrahima Sory Diallo</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MYCAURI</h3>
            <p>
              Kipé rue de l'université <br>
              Mercure International  <br>
              Guinée Conakry<br><br>
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
            <h4>S’inscrire à la newsletter</h4>
            <p>Soyez les premiers à être informés. </p>
            
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  


</body>

</html>