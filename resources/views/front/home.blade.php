<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name')}}</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="front-assets/img/logo_8.svg" rel="icon">
  <link href="front-assets/img/logo_8.svg" rel="apple-touch-icofront-n">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="front-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="front-assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="front-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="front-assets/vendor/owl.carousel/front-assets/owl.carousel.min.css" rel="stylesheet">
  <link href="front-assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="front-assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="front-assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{ url('/') }}">{{ config('app.name') }}</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="#about">Features</a></li>
          <li><a href="{{ url('login') }}">Login</a></li>
          <li><a href="#contact">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Skip the travel!
      Talk to a doctor now.</h1>
      <h2>Bring multiple tasks, timelines and teams together, better gauge project completion, manage resources and evaluate risks.</h2>
      <a href="{{ url('register') }}" class="btn-get-started scrollto">Try for Free</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= features Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="front-assets/img/about-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Product Overview</h3>
            <!-- <p data-aos="fade-up">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p> -->
            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-cube"></i>
              <h4>Get organized</h4>
              <p>Plan and structure work in a way that’s best for you. Set priorities and deadlines. Share details and assign tasks. All in one place.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-cube"></i>
              <h4>Stay on track</h4>
              <p>Follow projects and tasks through every stage. You know where work stands and can keep everyone aligned on goals.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-cube"></i>
              <h4>Hit deadlines</h4>
              <p>Create visual project plans to see how every step maps out over time. Pinpoint risks. Eliminate roadblocks. Even when plans change.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

<!-- ======= More Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>Projects, Tasks, Events</h4>
                  <p>Organize and categorize your work</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Document Storage</h4>
                  <p>Upload and attach files to tasks and projects.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Time Tracking</h4>
                  <p>Track time spent on tasks, generate spent time reports</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>Shared Calendar</h4>
                  <p>Overview of your team events in one calendar</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-left">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="front-assets/img/features-1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="front-assets/img/features-2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="front-assets/img/features-3.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="front-assets/img/features-3.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>How can we help?</h2>
          <p>Tell us about your products, ideas or just say hello!.</p>
        </div>

        <div class="row no-gutters justify-content-center" data-aos="fade-up">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>J-97 Palam colony, New Delhi,India 110077</p>
              </div>

              <div class="email mt-4">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@jobago.in</p>
              </div>

              <div class="phone mt-4">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 9716856665</p>
              </div>

            </div>

          </div>

          <div class="col-lg-5 d-flex align-items-stretch">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.412983175955!2d77.07974321487137!3d28.587384992874053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b6bf42ac59d%3A0x676e9ad8cf1d8b17!2sSpeakmedicare!5e0!3m2!1sen!2sin!4v1588320729001!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form method="post" role="form" action="{{ url('contact-us') }}" class="php-email-form" id="contactForm">
                @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" id="contact-submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>{{ config('app.name')}}</h3>
              <p>
                J-97 palam <br>
                Delhi, India<br><br>
                <strong>Phone:</strong> +91 9716856665<br>
                <strong>Email:</strong> info@jobago.in<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#features">Features</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{ config('app.name') }}</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!-- Vendor JS Files -->
  <script src="front-assets/vendor/jquery/jquery.min.js"></script>
  <script src="front-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="front-assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="front-assets/vendor/php-email-form/validate.js"></script>
  <script src="front-assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="front-assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="front-assets/vendor/venobox/venobox.min.js"></script>
  <script src="front-assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="front-assets/js/main.js"></script>

</body>

</html>