<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MaxiFix Kenya Networks</title>
  <meta content="We are the leading cheap internet fiber WiFi provider with zero lagging rate within Nairobi and Machakos counties and their environs." name="description">
  <meta content="maxifix, maxfix, maxifix networks, maxifix networks kenya, maxifix kenya, maxifix kenya networks, wifi provider, fiber wifi, internet provider, cheap internet provider, best wifi, best internet provider, wifi provider in Nairobi, wifi provider in Machakos, wifi provider in Joska, fiber internet connection, car alarms installation, cctv installation" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="uploads/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="uploads/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="uploads/favicon-16x16.png">
  <link rel="android-chrome" sizes="192x192" href="uploads/android-chrome-192x192.png">
  <link rel="android-chrome" type="image/png" sizes="512x512" href="uploads/android-chrome-512x512.png">
  <link rel="favicon" href="uploads/favicon.ico">
  <link rel="manifest" href="uploads/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:admin@maxfixnet.co.ke">admin@maxfixnet.co.ke</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><a href="tel:+254742311346">+254742311346</a></span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/maxifixkenyanet" class="twitter" title="twitter-x"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.facebook.com/profile.php?id=61554745587393" class="facebook" title="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="mailto:admin@maxfixnet.co.ke" class="google-plus" title="email"><i class="bi bi-envelope-at-fill"></i></a>
        <a href="https://wa.me/+254742311346" class="linkedin" title="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="tel:+254742311346" class="instagram" title="Phone"><i class="bi bi-headset"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!--<h1 class="logo"><a href="index.html">MaxiFix<span>.</span></a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"><img src="uploads/logo.jpg" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Packages</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Bronze</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">5 Mbps @2000/= per month</a></li>
                  <li><a href="#">8 Mbps @2500/= per month</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Silver</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">10 Mbps @3000/= per month</a></li>
                  <li><a href="#">12 Mbps @3500/= per month</a></li>
                  <li><a href="#">15 Mbps @4000/= per month</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Gold</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">18 Mbps @5000/= per month</a></li>
                  <li><a href="#">20 Mbps @5500/= per month</a></li>
                  <li><a href="#">30 Mbps @7000/= per month</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="package.php">Pricing</a></li>
          <li><a class="nav-link scrollto active" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="faq.php">FAQs</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
          <?php 
          if(isset($_SESSION['rol'])){
            if($_SESSION['rol']=='1'){
              echo '<li><a class="nav-link" href="dashboard/dashboard.php">Dashboard</a></li>
                  <li><a class="nav-link" href="registration/logout.php">Logout</a></li>';
            }else if($_SESSION['rol']=='2'){
              echo '<li><a class="nav-link" href="dashboard/technicians.php">Dashboard</a></li>
                  <li><a class="nav-link" href="registration/logout.php">Logout</a></li>';
            }else if($_SESSION['rol']=='3'){
              echo '<li><a class="nav-link" href="dashboard/clients.php">Dashboard</a></li>
                  <li><a class="nav-link" href="registration/logout.php">Logout</a></li>';
            }else{
              echo '<li><a class="nav-link" href="registration/logout.php">Logout</a></li>';
            }
          }else{
            echo '<li><a class="nav-link" href="registration/signup.html">Signup</a></li>
                  <li><a class="nav-link" href="registration/login.php">Login</a></li>';
          }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Who <span>We Are</span></h3>
          <p>We are an internet providing company specialised in Fiber WiFi installation and repairs.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="uploads/root.webp" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>GET HIGH SPEED INTERNET & WIFI CONNECTION FOR YOUR HOME & BUSINESS IN NAIROBI AND ITS ENVIRONS WITH HIGH SPEED STABILITY AND RELIABILITY</h3>
            <p class="fst-italic">
              We are always just a phonecall, a message or an email away. We respond as fast as possible to your inquiries.
            </p>
            <ul>
              <li>
                <i class="bi bi-alarm"></i>
                <div>
                  <h5>Our Technicians Are Always 24/7 Available To Sort Out Any Emergencies</h5>
                  <p>Incase of any emergency or installation requirement, just make a phonecall to our dedicated office phone number or send an email and our technicians will arrive on site without delay.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>We Offer The Most Affordable Rates In The Market.</h5>
                  <p>With our packages, there's something for everyone. Our prices are pocket friendly and very affordable.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>We offer all round services.</h5>
                  <p>We are also specialised in CCTV installation and maintenance, electric fence, gypsum, alarm system,bells, cleaning services and compound design, transport, delivery system and cyber service.</p>
                </div>
              </li>
            </ul>
            <div class="btn-wrap">
                <a href="https://wa.me/+254742311346" target="_blank" class="btn-buy">Talk To Us Now  <i class="bi bi-arrow-up-right-circle fs-5 fw-2"></i></a>
              </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <h3>Photos From <span>Our Team</span></h3>
        </div>

        <div class="row" id="gallry">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> <!--End Team Section-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MaxiFix Kenya Networks<span>.</span></h3>
            <p>
               <br>
              Joska,<br>
              Kenya <br><br>
              <strong>Phone:</strong> <a href="tel:+254742311346">+254742311346</a><br>
              <strong>Email:</strong> <a href="mailto:admin@maxfixnet.co.ke">admin@maxfixnet.co.ke</a><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="package.php">Packages</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="terms_of_service.php">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy.php">Privacy policy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="faq.php">FAQs</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">WiFi installation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">WiFi repairs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gypsum installation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">CCTV installation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Electric Fence installation</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Join us on social media for constant updates</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/maxifixkenyanet" class="twitter" title="twitter-x"><i class="bi bi-twitter-x"></i></a>
              <a href="https://www.facebook.com/profile.php?id=61554745587393" class="facebook" title="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="mailto:admin@maxfixnet.co.ke" class="google-plus" title="email"><i class="bi bi-envelope-at-fill"></i></a>
              <a href="https://wa.me/+254742311346" class="linkedin" title="whatsapp"><i class="bi bi-whatsapp"></i></a>
              <a href="tel:+254742311346" class="instagram" title="Phone"><i class="bi bi-headset"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; <strong><span>MaxiFix Kenya Networks</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://togol.com/">Togol</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="registration/jquery.min.js"></script>
  <script src="home/home.js"></script>

</body>

</html>