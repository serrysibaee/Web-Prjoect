<?php
require("./includes/fetchDB.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $userDetails['full_name'] ?> Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.7.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?= htmlspecialchars($userDetails['photo_path']) ?>" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html"><?= $userDetails['full_name']; ?></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="<?= $smedia['twitter'] ?>" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="<?= $smedia['facebook'] ?>" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="<?= $smedia['linkedin'] ?>" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <?php if (isset($_SESSION['username'])) echo '<li><a href="dashboard.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Dashboard</span></a></li>';
          ?>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background: url('<?= htmlspecialchars($userDetails['bg_path']) ?>') top center;width: 100%;height: 100vh;background-size: cover;">
    <div class="hero-container" data-aos="fade-in">
      <h1><?= htmlspecialchars($userDetails['full_name']) ?></h1>
      <p>I'm <span class="typed" data-typed-items="<?= htmlspecialchars($userDetails['job']) ?>"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
        </div>

        <div class="row">
          <p>
            <?= nl2br(htmlspecialchars($userDetails['about'])) ?>
          </p>
          <div class="col-sm-4" data-aos="fade-right">
            <img src="<?= htmlspecialchars($userDetails['photo_path']) ?>" class="img-fluid" style="height:80%;width:100%;">
          </div>
          <div class="mt-2 col-sm-8 pt-4 pt-sm-0 content" data-aos="fade-left">
            <h3><?= htmlspecialchars($userDetails['job']) ?></h3>
            <div class="row mt-4">
              <div class="col-sm-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= htmlspecialchars($user['phone']) ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= htmlspecialchars($address['city']) ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?= htmlspecialchars($user['email']) ?></span>
                </ul>
              </div>
              <div class="col-sm-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= htmlspecialchars($userDetails['age']) ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?= htmlspecialchars($userDetails['degree']) ?></span></li>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p><?= nl2br(htmlspecialchars($skills['skills_desc'])) ?></p>
        </div>

        <div class="row skills-content">

          <div class="col-sm-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill"><?= htmlspecialchars($skills['skill1']) ?> <i class="val"><?= htmlspecialchars($skills['skill1_perc']) ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?= htmlspecialchars($skills['skill1_perc']) ?>" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
            <?php
            if (!empty($skills['skill3'])) {
              echo  '<div class="progress">';
              echo  '<span class="skill">' . htmlspecialchars($skills['skill3']) . '<i class="val">' . htmlspecialchars($skills['skill3_perc']) . '%</i></span>';
              echo  '<div class="progress-bar-wrap">';
              echo  '<div class="progress-bar" role="progressbar" aria-valuenow="' . htmlspecialchars($skills['skill3_perc']) . '" aria-valuemin="0" aria-valuemax="100">';
              echo  '</div>' .
                '</div>' .
                '</div>';
            } ?>
          </div>

          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill"><?= htmlspecialchars($skills['skill2']) ?> <i class="val"><?= htmlspecialchars($skills['skill2_perc']) ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?= htmlspecialchars($skills['skill2_perc']) ?>" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
            <?php
            if (!empty($skills['skill3'])) {
              echo  '<div class="progress">';
              echo  '<span class="skill">' . htmlspecialchars($skills['skill4']) . '<i class="val">' . htmlspecialchars($skills['skill4_perc']) . '%</i></span>';
              echo  '<div class="progress-bar-wrap">';
              echo  '<div class="progress-bar" role="progressbar" aria-valuenow="' . htmlspecialchars($skills['skill4_perc']) . '" aria-valuemin="0" aria-valuemax="100">';
              echo  '</div>' .
                '</div>' .
                '</div>';
            } ?>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
        </div>

        <div class="row">
          <div class="col-sm-6" data-aos="fade-up">
            <h3 class="resume-title">Summary</h3>
            <div class="resume-item pb-0">
              <h4><?= htmlspecialchars($userDetails['full_name']) ?></h4>
              <p><em><?= nl2br(htmlspecialchars($experience['cv_summary'])); ?></em></p>
            </div>

            <h3 class="resume-title justify-content-start">Education</h3>
            <div class="resume-item">
              <h4><?= htmlspecialchars($education['edu1_name']) ?></h4>
              <h5><?= htmlspecialchars($education['edu1_start']) ?> - <?= htmlspecialchars($education['edu1_end']) ?></h5>
              <p><em><?= htmlspecialchars($education['edu1_loc']) ?></em></p>
              <p><?= nl2br(htmlspecialchars($education['edu1_desc'])) ?></p>
            </div>
            <?php if (!empty($education['edu2_name'])) {
              echo '<div class="resume-item justify-content-start">';
              echo '<h4> ' . htmlspecialchars($education['edu2_name']) . ' </h4>';
              echo '<h5> ' . htmlspecialchars($education['edu2_start']) . " - " . htmlspecialchars($education['edu2_end']) . ' </h5>';
              echo '<p><em> ' . htmlspecialchars($education['edu2_loc']) . ' </em></p>';
              echo '<p> ' . nl2br(htmlspecialchars($education['edu2_desc'])) . '</p></div>';
            } ?>


          </div>
          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item justify-content-start">
              <h4><?= htmlspecialchars($experience['exp1_name']) ?></h4>
              <h5><?= htmlspecialchars($experience['exp1_start']) ?> - <?= htmlspecialchars($experience['exp1_end']) ?></h5>
              <p><em><?= htmlspecialchars($experience['exp1_loc']) ?></em></p>
              <p><?= nl2br(htmlspecialchars($experience['exp1_desc'])) ?></p>
            </div>
            <?php if (!empty($experience['exp2_name'])) {
              echo '<div class="resume-item justify-content-start">';
              echo '<h4> ' . htmlspecialchars($experience['exp2_name']) . ' </h4>';
              echo '<h5> ' . htmlspecialchars($experience['exp2_start']) . " - " . htmlspecialchars($experience['exp2_end']) . ' </h5>';
              echo '<p><em> ' . htmlspecialchars($experience['exp2_loc']) . ' </em></p>';
              echo '<p> ' . nl2br(htmlspecialchars($experience['exp2_desc'])) . '</p></div>';
            } ?>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div data-aos="fade-in">
          <div class="container">
            <div class="info">
              <div class="row">

                <div class="col-sm-4 address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Address</h4>
                  <p><?= htmlspecialchars($address['address_line']) . "<br/>" . htmlspecialchars($address['city']) . " "
                        . htmlspecialchars($address['postal_code']) . ", " . htmlspecialchars($address['country']) ?></p>
                </div>

                <div class="col-sm-4 email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email</h4>
                  <p><?= htmlspecialchars($user['email']) ?></p>
                </div>

                <div class="col-sm-4 phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call</h4>
                  <p><?= htmlspecialchars($user['phone']) ?></p>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>