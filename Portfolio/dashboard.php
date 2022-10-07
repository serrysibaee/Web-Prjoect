<?php
include("./includes/fetchDB.inc.php");
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
            echo '<li><a href=" #dashboard" class="nav-link scrollto active"><i class="bx bx-book-content"></i> <span>Dashboard</span></a></li>';
            echo '<li><a href="account.php" class="nav-link scrollto"><i class="bx bxs-user-detail"></i> <span>Edit Account</span></a></li>';
            echo '<li><a href="includes/logout.php" class="nav-link scrollto"><i class="bx bx-log-out"></i> <span>Log out</span></a></li>';
          }
          ?>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <main id="main">


    <section class="container">
      <form method="POST" action="includes/update.inc.php" enctype="multipart/form-data">

        <!-- ======= personal details ======= -->
        <div class="m-3">
          <div class="section-title">
            <h2 class="">Personal Details</h2>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="col form-group">
                <label class="form-label" for="full_name">Full name</label>
                <input type="text" id="full_name" name="full_name" class="form-control" placeholder="your real name!" value="<?= $userDetails['full_name'] ?>" required />
              </div>
            </div>

            <div class="col-sm-2">
              <div class="col form-group">
                <label class="form-label" for="age">Age</label>
                <input type="number" min="1" max="99" id="age" name="age" class="form-control" placeholder="e.g. 25" value="<?= $userDetails['age'] ?>" />
              </div>
            </div>

            <div class="col-sm-3">
              <div class="col form-group">
                <label class="form-label" for="job">Job</label>
                <input type="text" id="job" name="job" class="form-control" placeholder="e.g. Programmer" value="<?= $userDetails['job'] ?>" required />
              </div>
            </div>

            <div class="col-sm-3">
              <div class="col form-group">
                <label class="form-label" for="degree">Degree</label>
                <input type="text" id="degree" name="degree" class="form-control" placeholder="e.g. Master" value="<?= $userDetails['degree'] ?>" required />
              </div>
            </div>
          </div>

          <!-- Adress -->
          <div class="row mt-3">
            <div class="col-sm-4">
              <div class="col form-group">
                <label class="form-label" for="address_line">Address</label>
                <input type="text" id="address_line" name="address_line" class="form-control" placeholder="Address Line 1" value="<?= $address['address_line'] ?>" />
              </div>
            </div>

            <div class="col-sm-3">
              <div class="col form-group">
                <label class="form-label" for="city">City</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="e.g. Riyadh" value="<?= $address['city'] ?>" required />
              </div>
            </div>

            <div class="col-sm-2">
              <div class="col form-group">
                <label class="form-label" for="postal_code">Postal code</label>
                <input type="number" id="postal_code" name="postal_code" class="form-control" placeholder="e.g. 12525" value="<?= $address['postal_code'] ?>" required />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="col form-group">
                <label class="form-label" for="country">Country</label>
                <select id="country" name="country" class="form-control" required>
                  <option value="<?= $address['country'] ?>"><?= $address['country'] ?></option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Åland Islands">Åland Islands</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antarctica">Antarctica</option>
                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belgium">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Bouvet Island">Bouvet Island</option>
                  <option value="Brazil">Brazil</option>
                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Central African Republic">Central African Republic</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Cote D'ivoire">Cote D'ivoire</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                  <option value="Faroe Islands">Faroe Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="French Guiana">French Guiana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="French Southern Territories">French Southern Territories</option>
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guernsey">Guernsey</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea-bissau">Guinea-bissau</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Isle of Man">Isle of Man</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jersey">Jersey</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                  <option value="Korea, Republic of">Korea, Republic of</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macao">Macao</option>
                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                  <option value="Moldova, Republic of">Moldova, Republic of</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montenegro">Montenegro</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau">Palau</option>
                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Pitcairn">Pitcairn</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Reunion">Reunion</option>
                  <option value="Romania">Romania</option>
                  <option value="Russian Federation">Russian Federation</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Saint Helena">Saint Helena</option>
                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                  <option value="Saint Lucia">Saint Lucia</option>
                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                  <option value="Samoa">Samoa</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Serbia">Serbia</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovakia">Slovakia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somalia">Somalia</option>
                  <option value="South Africa">South Africa</option>
                  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                  <option value="Swaziland">Swaziland</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                  <option value="Taiwan">Taiwan</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Timor-leste">Timor-leste</option>
                  <option value="Togo">Togo</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United States">United States</option>
                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Viet Nam">Viet Nam</option>
                  <option value="Virgin Islands, British">Virgin Islands, British</option>
                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                  <option value="Wallis and Futuna">Wallis and Futuna</option>
                  <option value="Western Sahara">Western Sahara</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Photo -->
          <div class="row mt-3">
            <div class="col-sm-5">
              <div class="col form-group">
                <label class="form-label" for="photo_path">Upload profile photo</label>
                <input type="file" id="photo_path" name="photo_path" class="form-control" />
              </div>
            </div>

            <div class="col-sm-5">
              <div class="col form-group">
                <label class="form-label" for="bg_path">Upload background photo</label>
                <input type="file" id="bg_path" name="bg_path" class="form-control" />
              </div>
            </div>
          </div>
        </div>
        <!-- ======= END personal details ======= -->


        <!-- ======= About ======= -->
        <div class="m-3">

          <div class="section-title mt-5">
            <h2>About</h2>
          </div>

          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <textarea id="about" name="about" class="form-control" rows="5" placeholder="About yourself!" required><?= $userDetails['about'] ?></textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- ======= END About ======= -->


        <!-- ======= Skills ======= -->
        <div class="m-3">

          <div class="section-title mt-5">
            <h2>Skills</h2>
          </div>

          <div class="col-sm-10 form-group">
            <label class="form-label" for="skills_desc">Skills Description</label>
            <input type="text" id="skills_desc" name="skills_desc" class="form-control" placeholder="Brief summary" value="<?= $skills['skills_desc'] ?>" required />
          </div>

          <div class="row mt-3">
            <label class="form-label" for="photo">Add your skills</label>
            <!-- Skill 1 -->
            <div class="col-sm-3">
              <div class="form-group">
                <input type="text" id="skill1" name="skill1" class="form-control" placeholder="Skill 1" value="<?= $skills['skill1'] ?>" required />
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <input type="number" min="0" max="100" id="skill1_perc" name="skill1_perc" class="form-control" placeholder="Percentage" value="<?= $skills['skill1_perc'] ?>" required />
              </div>
            </div>
            <!-- Skill 2 -->
            <div class="col-sm-3">
              <div class="form-group">
                <input type="text" id="skill2" name="skill2" class="form-control" placeholder="Skill 2" value="<?= $skills['skill2'] ?>" required />
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <input type="number" min="0" max="100" id="skill2_perc" name="skill2_perc" class="form-control" placeholder="Percentage" value="<?= $skills['skill2_perc'] ?>" required />
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <!-- Skill 3 -->
            <div class="col-sm-3">
              <div class="form-group">
                <input type="text" id="skill3" name="skill3" class="form-control" placeholder="Skill 3" value="<?= $skills['skill3'] ?>" />
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <input type="number" min="0" max="100" id="skill3_perc" name="skill3_perc" class="form-control" placeholder="Percentage" value="<?= $skills['skill3_perc'] ?>" />
              </div>
            </div>
            <!-- Skill 4 -->
            <div class="col-sm-3">
              <div class="form-group">
                <input type="text" id="skill4" name="skill4" class="form-control" placeholder="Skill 4" value="<?= $skills['skill4'] ?>" />
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <input type="number" min="0" max="100" id="skill4_perc" name="skill4_perc" class="form-control" placeholder="Percentage" value="<?= $skills['skill4_perc'] ?>" />
              </div>
            </div>
          </div>
        </div>
        <!-- ======= END Skills ======= -->


        <!-- ======= CV ======= -->
        <div class="m-3">

          <div class="section-title mt-5">
            <h2>Resume</h2>
          </div>

          <!-- Summary -->
          <div class="col-sm">
            <div class="form-group">
              <h4 for="cv_summary">CV Summary</h4>
              <textarea id="cv_summary" name="cv_summary" class="form-control" rows="4" placeholder="About yourself!" required><?= $experience['cv_summary'] ?></textarea>
            </div>
          </div>

          <div class="row mt-4">
            <!-- Education -->
            <div class="col-sm-6">
              <h4>Education</h4>
              <!-- Edu 1 -->
              <div class="row">
                <div class="row">
                  <div class="col-sm-12 form-group">
                    <label class="form-label" for="edu1_name">Education 1</label>
                    <input type="text" id="edu1_name" name="edu1_name" class="form-control" placeholder="Institution Name" value="<?= $education['edu1_name'] ?>" required />
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <input type="text" id="edu1_start" name="edu1_start" class="form-control" placeholder="start year" value="<?= $education['edu1_start'] ?>" required />
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <input type="text" id="edu1_end" name="edu1_end" class="form-control" placeholder="end year" value="<?= $education['edu1_end'] ?>" required />
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" id="edu1_loc" name="edu1_loc" class="form-control" placeholder="Location/GPA" value="<?= $education['edu1_loc'] ?>" required />
                    </div>
                  </div>

                  <div class="col-sm-12 mt-2">
                    <div class="form-group">
                      <textarea id="edu1_desc" name="edu1_desc" class="form-control" rows="4" placeholder="Education summary" required><?= $education['edu1_desc'] ?></textarea>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Edu 2 -->
              <div class="row mt-4">
                <div class="row">
                  <div class="col-sm-12 form-group">
                    <label class="form-label" for="edu1_name">Education 2</label>
                    <input type="text" id="edu2_name" name="edu2_name" class="form-control" placeholder="Institution Name" value="<?= $education['edu2_name'] ?>" />
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <input type="text" id="edu2_start" name="edu2_start" class="form-control" placeholder="start year" value="<?= $education['edu2_start'] ?>" />
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <input type="text" id="edu2_end" name="edu2_end" class="form-control" placeholder="end year" value="<?= $education['edu2_end'] ?>" />
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" id="edu2_loc" name="edu2_loc" class="form-control" placeholder="Location/GPA" value="<?= $education['edu2_loc'] ?>" />
                    </div>
                  </div>

                  <div class="col-sm-12 mt-2">
                    <div class="form-group">
                      <textarea id="edu2_desc" name="edu2_desc" class="form-control" rows="4" placeholder="Education summary"><?= $education['edu2_desc'] ?></textarea>
                    </div>
                  </div>

                </div>
              </div>


            </div>

            <!-- Experience -->
            <div class="col-sm-6">
              <h4>Experience</h4>

              <!-- Exp 1 -->
              <div class="row">
                <div class="row">
                  <div class="col-sm-12 form-group">
                    <label class="form-label" for="edu1_name">Experience 1</label>
                    <input type="text" id="exp1_name" name="exp1_name" class="form-control" placeholder="Position Name" value="<?= $experience['exp1_name'] ?>" required />
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <input type="text" id="exp1_start" name="exp1_start" class="form-control" placeholder="start year" value="<?= $experience['exp1_start'] ?>" required />
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <input type="text" id="exp1_end" name="exp1_end" class="form-control" placeholder="end year" value="<?= $experience['exp1_end'] ?>" required />
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" id="exp1_loc" name="exp1_loc" class="form-control" placeholder="Location" value="<?= $experience['exp1_loc'] ?>" required />
                    </div>
                  </div>

                  <div class="col-sm-12 mt-2">
                    <div class="form-group">
                      <textarea id="edu1_desc" name="exp1_desc" class="form-control" rows="4" placeholder="Experience summary" required><?= $experience['exp1_desc'] ?></textarea>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Exp 2 -->
              <div class="row mt-4">
                <div class="row">
                  <div class="col-sm-12 form-group">
                    <label class="form-label" for="edu1_name">Experience 2</label>
                    <input type="text" id="exp2_name" name="exp2_name" class="form-control" placeholder="Position Name" value="<?= $experience['exp2_name'] ?>" />
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <input type="text" id="exp2_start" name="exp2_start" class="form-control" placeholder="start year" value="<?= $experience['exp2_start'] ?>" />
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <input type="text" id="exp2_end" name="exp2_end" class="form-control" placeholder="end year" value="<?= $experience['exp2_end'] ?>" />
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" id="exp2_loc" name="exp2_loc" class="form-control" placeholder="Location" value="<?= $experience['exp2_loc'] ?>" />
                    </div>
                  </div>

                  <div class="col-sm-12 mt-2">
                    <div class="form-group">
                      <textarea id="exp2_desc" name="exp2_desc" class="form-control" rows="4" placeholder="Experience summary"><?= $experience['exp2_desc'] ?></textarea>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- ======= END CV ======= -->


        <!-- ======= Social Media ======= -->
        <div class="m-3">

          <div class="section-title mt-5">
            <h2>Social Media</h2>
          </div>
          <div class="row ">
            <div class="col-sm-4">
              <div class="form-group">
                <label class="form-label" for="linkedin">Linkedin Link</label>
                <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="Linkedin link" value="<?= $smedia['linkedin'] ?>" required />
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label class="form-label" for="twitter">Twitter Link</label>
                <input type="text" id="twitter" name="twitter" class="form-control" placeholder="Twitter link" value="<?= $smedia['twitter'] ?>" required />
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label class="form-label" for="facebook">Facebook Link</label>
                <input type="text" id="facebook" name="facebook" class="form-control" placeholder="Facebook link" value="<?= $smedia['facebook'] ?>" required />
              </div>
            </div>

          </div>

        </div>
        <!-- ======= END Social Media  ======= -->



        <div class="d-flex justify-content-end pt-3">
          <button type="submit" class="btn bg-primary m-3 text-uppercase" valur="submit" name="submit">Save</button>
        </div>
      </form>
    </section>

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