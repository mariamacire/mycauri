<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Services</title>
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
          <li ><a href="{{url('about')}}"><strong>A propos</strong></a></li>
          <li class="drop-down active"><a href="{{url('service')}}"><strong>Nos Services</strong></a>
            <ul>
              <li><a href="{{url('wallet')}}">CAURI Wallet </a></li>      
              <li><a href="{{url('transfer')}}">CAURI Transfer</a></li>
              <li><a href="{{url('pay')}}">CAURI Pay</a></li>
              <li><a href="{{url('shop')}}">CAURI Shop</a></li>
              <li><a href="{{url('express')}}">CAURI Express</a></li>
            </ul>
          </li>
          <li><a href="{{url('agence')}}"><strong>Nos Agences</strong></a></li>
          <li ><a href="{{url('contact')}}"><strong> nous Contacter</strong></a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Services</h2>
          <ol>
            <li><a href="{{url('index')}}">Home</a></li>
            <li><a href="{{url('transfer')}}"> CAURI Transfer</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq" style="background-color: #FAFCFF;">
      <div class="container" data-aos="fade-up">

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

        <div class="section-title">
          <!-- <h2>F.A.Q</h2> -->
          <p class="p3">Frequently Asked Questions</p>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Comment se connecter</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Pour se connecter, vous devez rentrer votre num??ro de compte, votre mot de passe. Ensuite vous devez accepter les conditions d???utilisation puis entrer votre code PIN.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>C'est quoi le num??ro de compte</h4>
          </div>
          <div class="col-lg-7">
            <p>
              C???est votre num??ro de t??l??phone que vous avez saisi lors de votre enregistrement.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Comment r??aliser un transfert d???argent</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Vous devez avoir un t??l??phone compatible (voir question ?? est-ce que tous les mobiles sont compatibles avec Cauri ??). Vous pouvez directement r??aliser vos transferts d'argent depuis l'application Cauri (mobile ou web) Pensez ?? recharger votre compte Cauri avant de faire vos transferts.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Existe-t-il des possibilit??s permettant de corriger les erreurs d???une transaction</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Non, mais il est toujours possible d???annuler la transaction avant le paiement et d???en refaire une autre.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Puis-je annuler ma transaction de transfert d???argent</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Oui, mais seulement si la transaction n???est pas per??ue par le B??n??ficiaire.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Je me suis tromp?? de num??ro et envoy?? de l???argent ?? la mauvaise personne. Que puis-je faire</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Vous pouvez annuler la transaction si le b??n??ficiaire n???a pas re??u l???argent.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Qui peut ouvrir un compte  chez CAURI</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Toute personne ayant la capacit?? juridique dans son pays de r??sidence.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Y a-t-il un d??lai d???activation ?? la cr??ation du compte</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Non, l???activation de votre compte est instantan??e          
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Comment m???assurer que mon compte est actif</h4>
          </div>
          <div class="col-lg-7">
            <p>
              D??s votre inscription vous recevrez instantan??ment par SMS votre code PIN, votre num??ro de compte et votre mot de passe.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Je me suis fait voler mon t??l??phone que dois-je faire</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Appeler le service client pour bloquer votre compte Munissez-vous de votre pi??ce d???identit?? utilis??e lors de votre enregistrement, de la question secr??te et de la r??ponse ?? celle-ci.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Quels sont les avantages de CAURI</h4>
          </div>
          <div class="col-lg-7">
            <p>
              *un transfert ??conomique : Cauri propose des tarifs comp??titifs. *un transfert s??curis?? : la saisie de votre mot de passe et votre code PIN ?? chaque op??ration s??curise vos transferts et le service de mobile ?? mobile garantit la bonne r??ception de l'argent par votre destinataire *un large r??seau mondial : gr??ce aux nombreux Points de services disponibles, vos proches peuvent utiliser l'argent plus facilement et plus rapidement (moins de d??placements)
            </p>
          </div>
        </div><!-- End F.A.Q Item-->
      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->
  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          
          <h3 style="padding-top: 10px;"> Vous n???avez pas trouv?? votre r??ponse ? N???h??sitez pas !</h3>
          
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="{{url('contact')}}">Contactez-nous</a>
        </div>
      </div>
    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MYCAURI</h3>
            <p>
             Kip?? rue de l'universit?? <br>
              Mercure International<br>
              Guin??e Conakry <br><br>
              <strong>Phone:</strong> +224 654 18 14 00<br>
              <strong>Email:</strong> contact@gubgroup.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('index')}}">mycauri</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('about')}}">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('service')}}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('agence')}}">Nos agences</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('contact')}}">Contact</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('wallet')}}">CAURI Wallet</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('transfer')}}">CAURI Transfer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('pay')}}">CAURI Pay</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('shop')}}">CAURI Shop</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('express')}}">CAURI Express</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>S???inscrire ?? la newsletter</h4>
            <p>Soyez les premiers ?? ??tre inform??s.</p>
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