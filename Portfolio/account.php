<?php
require("./includes/fetchDB.inc.php");
require("./includes/update.inc.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $userDetails['full_name'] ?> Dashboard</title>
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

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container-fluid">
            <div class="d-flex justify-content-end align-items-end">
                <ol>
                    <li><a href="../Main.php">CVMade</a></li>
                    <li><a href="./main.php">Profile</a></li>
                    <li>Dashboard</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="<?= $userDetails['photo_path'] ?>" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html"><?= htmlspecialchars($userDetails['full_name']) ?></a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="<?= $smedia['twitter'] ?>" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="<?= $smedia['facebook'] ?>" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="<?= $smedia['linkedin'] ?>" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="main.php" class="nav-link scrollto "><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <?php if (isset($_SESSION['username'])) {
                        echo '<li><a href="dashboard.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Dashboard</span></a></li>';
                        echo '<li><a href="account.php" class="nav-link scrollto active"><i class="bx bxs-user-detail"></i> <span>Edit Account</span></a></li>';
                        echo '<li><a href="includes/logout.php" class="nav-link scrollto"><i class="bx bx-log-out"></i> <span>Log out</span></a></li>';
                    }
                    ?>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <main id="main">
        <form action="includes/update-acc.inc.php" method="post">
            <div class="container">
                <div class="section-title">
                    <h2>Account</h2>
                </div>
                <div class="ms-3 ">
                    <!-- ======= form data ======= -->
                    <div class="col-sm-8 mt-4">
                        <div class="form-group ">
                            <label class="form-label" for="eamil">E-mail :</label>
                            <input type="email" id="email" name="email" class="form-control" value="<?= $user['email'] ?>" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="uname">Username :</label>
                            <input type="text" id="uname" name="uname" class="form-control " value="<?= $user['username'] ?>" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="phoneNum">Phone Number :</label>
                            <input type="text" id="phoneNum" name="phoneNum" class="form-control" placeholder="+966xxxxxxxxx" value="<?= $user['phone'] ?>" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="pass">Old Password :</label>
                            <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="newpass">New Password :</label>
                            <input type="password" id="newpass" name="newpass" class="form-control" placeholder="Password" />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="confnewpass">Confirm New Password :</label>
                            <input type="password" id="confnewpass" name="confnewpass" class="form-control" placeholder="Re-type Password" />
                        </div>

                        <div class=" d-flex justify-content-end pt-3">
                            <button type="submit" class="btn bg-primary text-uppercase btn-lg text-uppercase" name="submit">save</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </main>
</body>

</html>