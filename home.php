<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>FreyFolio - Portfolio Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free Website Template" name="keywords" />
  <meta content="Free Website Template" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />

  <!-- CSS Libraries -->
  <link
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    rel="stylesheet" />
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<style>
  /*******************************/
  /********* General CSS *********/
  /*******************************/
  body {
    color: #5483e9;
    background: #ffffff;
    font-family: "Montserrat", sans-serif;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    color: #414141;
  }

  a {
    color: #313131;
    transition: 0.3s;
  }

  a:hover,
  a:active,
  a:focus {
    color: #5483e9;
    outline: none;
    text-decoration: none;
  }

  .btn:focus,
  .form-control:focus {
    box-shadow: none;
  }

  .container-fluid {
    max-width: 1366px;
  }

  .btn {
    padding: 12px 25px;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    color: #ffffff;
    background: #5483e9;
    border: 2px solid transparent;
    border-radius: 0;
    box-shadow: inset 0 0 0 50px #5483e9;
    transition: ease-out 0.3s;
    -webkit-transition: ease-out 0.3s;
    -moz-transition: ease-out 0.3s;
  }

  .btn:hover {
    color: #5483e9;
    background: transparent;
    box-shadow: inset 0 0 0 0 #5483e9;
    border-color: #5483e9;
  }

  #loader {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #ffffff;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: opacity 0.3s ease-out, visibility 0s linear 0.3s;
    -o-transition: opacity 0.3s ease-out, visibility 0s linear 0.3s;
    transition: opacity 0.3s ease-out, visibility 0s linear 0.3s;
    z-index: 999;
  }

  #loader.show {
    -webkit-transition: opacity 0.6s ease-out, visibility 0s linear 0s;
    -o-transition: opacity 0.6s ease-out, visibility 0s linear 0s;
    transition: opacity 0.6s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
  }

  #loader .loader {
    position: relative;
    width: 45px;
    height: 45px;
    border: 5px solid #dddddd;
    border-top: 5px solid #5483e9;
    border-radius: 50%;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
  }

  @-webkit-keyframes spin {
    0% {
      -webkit-transform: rotate(0deg);
    }

    100% {
      -webkit-transform: rotate(360deg);
    }
  }

  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  .back-to-top {
    position: fixed;
    display: none;
    width: 44px;
    height: 44px;
    padding: 8px 0;
    text-align: center;
    line-height: 1;
    font-size: 22px;
    right: 15px;
    bottom: 15px;
    z-index: 9;
  }

  .back-to-top i {
    color: #ffffff;
  }

  .back-to-top:hover i {
    color: #414141;
  }

  /**********************************/
  /*********** Nav Bar CSS **********/
  /**********************************/
  .navbar {
    position: relative;
    transition: 0.5s;
    z-index: 999;
  }

  .navbar.nav-sticky {
    position: fixed;
    top: 0;
    width: 100%;
    box-shadow: 0 2px 5px rgba(11, 16, 62, 0.95);
  }

  .navbar .navbar-brand {
    margin: 0;
    font-size: 45px;
    line-height: 0px;
    font-weight: 700;
    letter-spacing: 2px;
    transition: 0.5s;
  }

  .navbar .navbar-brand img {
    max-width: 100%;
    max-height: 40px;
  }

  .navbar .dropdown-menu {
    margin-top: 0;
    border: 0;
    border-radius: 0;
    background: #f8f9fa;
  }

  @media (min-width: 992px) {
    .navbar {
      position: absolute;
      width: 100%;
      padding: 30px 60px;
      background: transparent !important;
      border-bottom: 1px dashed rgba(256, 256, 256, 0.2);
      z-index: 9;
    }

    .navbar.nav-sticky {
      padding: 10px 60px;
      background: #ffffff !important;
    }

    .navbar .navbar-brand {
      color: #ffffff;
    }

    .navbar.nav-sticky .navbar-brand {
      color: #5483e9;
    }

    .navbar-light .navbar-nav .nav-link,
    .navbar-light .navbar-nav .nav-link:focus {
      padding: 10px 10px 8px 10px;
      color: #ffffff;
      font-size: 15px;
      font-weight: 500;
    }

    .navbar-light.nav-sticky .navbar-nav .nav-link,
    .navbar-light.nav-sticky .navbar-nav .nav-link:focus {
      color: #414141;
    }

    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link.active {
      color: #111111;
    }

    .navbar-light.nav-sticky .navbar-nav .nav-link:hover,
    .navbar-light.nav-sticky .navbar-nav .nav-link.active {
      color: #5483e9;
    }
  }

  @media (max-width: 991.98px) {
    .navbar {
      padding: 15px;
      background: #ffffff !important;
    }

    .navbar .navbar-brand {
      color: #5483e9;
    }

    .navbar .navbar-nav {
      margin-top: 15px;
    }

    .navbar a.nav-link {
      padding: 5px;
    }

    .navbar .dropdown-menu {
      box-shadow: none;
    }
  }

  /*******************************/
  /********** Hero CSS ***********/
  /*******************************/
  .hero {
    position: relative;
    width: 100%;
    margin-bottom: 45px;
    padding: 120px 0 0 0;
    overflow: hidden;
    background: linear-gradient(rgba(11, 16, 62, 0.95),
        rgba(11, 16, 62, 0.95)),
      url(../img/hero-bg.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .hero .container-fluid {
    padding: 0;
  }

  .hero .hero-image {
    position: relative;
    text-align: right;
    padding-right: 75px;
  }

  .hero .hero-image img {
    max-width: 80%;
    max-height: 80%;
  }

  .hero .hero-content {
    position: relative;
    padding-left: 75px;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
  }

  .hero .hero-text p {
    color: #ffffff;
    font-size: 25px;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .hero .hero-text h1 {
    color: #ffffff;
    font-size: 60px;
    font-weight: 700;
    letter-spacing: 3px;
    margin-bottom: 15px;
  }

  .hero .hero-text h2 {
    display: inline-block;
    margin: 0;
    height: 35px;
    color: #ffffff;
    font-size: 35px;
    font-weight: 600;
  }

  .hero .hero-text .typed-text {
    display: none;
  }

  .hero .hero-text .typed-cursor {
    font-size: 35px;
    font-weight: 300;
    color: #ffffff;
  }

  .hero .hero-btn .btn {
    margin-top: 35px;
    color: #5483e9;
    background: #ffffff;
    box-shadow: inset 0 0 0 50px #ffffff;
  }

  .hero .hero-btn .btn:hover {
    color: #ffffff;
    background: transparent;
    box-shadow: inset 0 0 0 0 #ffffff;
    border-color: #ffffff;
  }

  .hero .hero-btn .btn:first-child {
    margin-right: 10px;
  }

  @media (max-width: 991.98px) {
    .hero {
      padding-top: 60px;
    }

    .hero .hero-content {
      padding: 0 15px;
    }

    .hero .hero-text p {
      font-size: 20px;
    }

    .hero .hero-text h1 {
      font-size: 45px;
    }

    .hero .hero-text h2 {
      font-size: 25px;
      height: 25px;
    }

    .hero .hero-btn .btn {
      padding: 12px 30px;
      letter-spacing: 1px;
    }
  }

  @media (max-width: 767.98px) {
    .hero {
      padding-top: 60px;
      padding-bottom: 60px;
    }

    .hero,
    .hero .hero-text,
    .hero .hero-btn {
      width: 100%;
      text-align: center;
    }

    .hero .hero-text p {
      font-size: 18px;
    }

    .hero .hero-text h1 {
      font-size: 35px;
    }

    .hero .hero-text h2 {
      font-size: 22px;
      height: 22px;
    }

    .hero .hero-btn .btn {
      padding: 10px 15px;
      letter-spacing: 1px;
    }
  }

  @media (max-width: 575.98px) {
    .hero .hero-text p {
      font-size: 16px;
    }

    .hero .hero-text h1 {
      font-size: 30px;
    }

    .hero .hero-text h2 {
      font-size: 18px;
      height: 18px;
    }

    .hero .hero-btn .btn {
      padding: 8px 10px;
      letter-spacing: 0;
    }
  }

  /*******************************/
  /******* Section Header ********/
  /*******************************/
  .section-header {
    position: relative;
    margin-bottom: 45px;
  }

  .section-header p {
    display: inline-block;
    margin: 0 30px;
    margin-bottom: 10px;
    padding-left: 15px;
    position: relative;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    background: #ffffff;
  }

  .section-header p::before {
    position: absolute;
    content: "";
    height: 3px;
    top: 11px;
    right: 0;
    left: -30px;
    background: #5483e9;
    z-index: -1;
  }

  .section-header p::after {
    position: absolute;
    content: "";
    width: 3px;
    height: 3px;
    top: 11px;
    left: 3px;
    background: #5483e9;
    z-index: 1;
  }

  .section-header h2 {
    margin: 0;
    position: relative;
    font-size: 45px;
    font-weight: 700;
  }

  @media (max-width: 767.98px) {
    .section-header h2 {
      font-size: 30px;
    }
  }

  /*******************************/
  /********* Footer CSS **********/
  /*******************************/
  .footer {
    position: relative;
    margin-top: 45px;
    background: #0b103ef2;
  }

  .footer .container-fluid {
    padding: 60px 0 0 0;
  }

  .footer .footer-info {
    position: relative;
    width: 100%;
    text-align: center;
  }

  .footer .footer-info h2 {
    margin-bottom: 20px;
    font-size: 30px;
    font-weight: 700;
    color: #ffffff;
  }

  .footer .footer-info h3 {
    margin-bottom: 25px;
    font-size: 22px;
    font-weight: 600;
    color: #ffffff;
  }

  .footer .footer-menu {
    width: 100%;
    display: flex;
    justify-content: center;
  }

  .footer .footer-menu p {
    color: #ffffff;
    font-size: 22px;
    font-weight: 600;
    line-height: 20px;
    padding: 0 15px;
    border-right: 1px solid #ffffff;
  }

  .footer .footer-menu p:last-child {
    border: none;
  }

  .footer .footer-social {
    position: relative;
    margin-top: 15px;
  }

  .footer .footer-social a {
    display: inline-block;
  }

  .footer .footer-social a i {
    margin-right: 15px;
    font-size: 20px;
    color: #ffffff;
    transition: 0.3s;
  }

  .footer .footer-social a:last-child i {
    margin: 0;
  }

  .footer .footer-social a:hover i {
    color: #414141;
  }

  .footer .copyright {
    position: relative;
    text-align: center;
    margin-top: 30px;
    padding-top: 25px;
    padding-bottom: 25px;
  }

  .footer .copyright::before {
    position: absolute;
    content: "";
    width: 50%;
    height: 1px;
    top: 0;
    left: 25%;
    background: rgba(68, 116, 248, 0.95);
  }

  .footer .copyright p {
    margin: 0;
    color: #ffffff;
  }

  .footer .copyright .col-md-6:last-child p {
    text-align: right;
  }

  .footer .copyright p a {
    color: #ffffff;
    font-weight: 600;
  }

  .footer .copyright p a:hover {
    color: #414141;
  }

  @media (max-width: 575.98px) {
    .footer .footer-info h2 {
      margin-bottom: 20px;
      font-size: 20px;
      font-weight: 600;
    }

    .footer .footer-info h3 {
      margin-bottom: 20px;
      font-size: 16px;
    }

    .footer .footer-menu p {
      font-size: 16px;
      line-height: 16px;
      padding: 0 5px;
    }
  }
</style>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
  <!-- Nav Bar Start -->
  <div class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
      <a href="index.html" class="navbar-brand">FreyFolio</a>
      <button
        type="button"
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div
        class="collapse navbar-collapse justify-content-between"
        id="navbarCollapse">
        <div class="navbar-nav ml-auto">
          <a href="home.php" class="nav-item nav-link active">Home</a>
          <a href="education.php" class="nav-item nav-link">Education</a>
          <a href="portofolio.php" class="nav-item nav-link">Portfolio</a>
          <a href="hobby.php" class="nav-item nav-link">Hobby</a>
          <a href="contact.php" class="nav-item nav-link">Contact</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Nav Bar End -->

  <!-- Hero Start -->
  <div class="hero" id="home">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-6">
          <div class="hero-content">
            <div class="hero-text">
              <p>Welcome To My Website!</p>
              <h1>I'm Freyadiva</h1>
              <h2></h2>
              <div class="typed-text">
                Content Writer, Video Editor, English Speaker, Japanese Speaker, Korean Speaker
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 d-none d-md-block">
          <div class="hero-image">
            <img src="img/saya1.png" alt="Hero Image" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->

  <!-- About Start -->
  <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-img">
            <img src="img\porto img\Gedung_UPJ1.jpg" alt="Image" />
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <div class="section-header text-left">
              <p>Learn About Me</p>
              <h2>INFP Girl</h2>
            </div>
            <div class="about-text">
              <p>
                I'm a college student majoring Informatics at Universitas
                Pembangunan Jaya. I was born in Jakarta. I have a big passion
                in technology and hopefully turn this passion into a career !
              </p>
            </div>
            <div class="skills">
              <?php
              include 'koneksidb.php';

              // Query untuk mengambil data dari tabel skills
              $query = "SELECT * FROM skills";
              $result = mysqli_query($conn, $query);

              // Memeriksa apakah ada hasil yang dikembalikan
              if (mysqli_num_rows($result) > 0) {
                // Loop melalui setiap baris hasil
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<div class="skill-name">';
                  echo '<p>' . htmlspecialchars($row['skill_name']) . '</p>';
                  echo '<p>' . htmlspecialchars($row['percentage']) . '%</p>';
                  echo '</div>';
                  echo '<div class="progress">';
                  echo '<div class="progress-bar" role="progressbar" aria-valuenow="' . htmlspecialchars($row['percentage']) . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . htmlspecialchars($row['percentage']) . '%;"></div>';
                  echo '</div>';
                }
              } else {
                echo '<p>No skills available.</p>';
              }

              // Menutup koneksi
              mysqli_close($conn);
              ?>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- About End -->

  <!-- Footer Start -->
  <div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container-fluid">
      <div class="container">
        <div class="footer-info">
          <?php
          include 'koneksidb.php';

          // Query untuk mengambil data footer info
          $query = "SELECT * FROM footer_info LIMIT 1";
          $result = mysqli_query($conn, $query);
          $footer = mysqli_fetch_assoc($result);

          if ($footer) {
            echo '<h2>' . htmlspecialchars($footer['name']) . '</h2>';
            echo '<h3>' . htmlspecialchars($footer['address']) . '</h3>';
            echo '<div class="footer-menu">';
            echo '<p>' . htmlspecialchars($footer['phone']) . '</p>';
            echo '<p>' . htmlspecialchars($footer['email']) . '</p>';
            echo '</div>';
          }

          // Query untuk mengambil data social links
          $query_social = "SELECT * FROM social_links";
          $result_social = mysqli_query($conn, $query_social);

          echo '<div class="footer-social">';
          if (mysqli_num_rows($result_social) > 0) {
            while ($social = mysqli_fetch_assoc($result_social)) {
              echo '<a href="' . htmlspecialchars($social['link']) . '"><i class="' . htmlspecialchars($social['icon_class']) . '"></i></a>';
            }
          }
          echo '</div>';

          // Menutup koneksi
          mysqli_close($conn);
          ?>
        </div>
      </div>
      <div class="container copyright">
        <p>
          &copy; <a href="#">Freyadiva</a>, All Right Reserved | Designed By
          <a href="https://htmlcodex.com">HTML Codex</a>
        </p>
      </div>
    </div>
  </div>

  <!-- Footer End -->

  <!-- Back to top button -->
  <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Pre Loader -->
  <div id="loader" class="show">
    <div class="loader"></div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>