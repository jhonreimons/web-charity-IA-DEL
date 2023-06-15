<?php
  require "config.php";

  $query = mysqli_query($conn,"SELECT * FROM pengurus");
  $result = mysqli_query($conn,"SELECT * FROM donations_result");
  $upcaoming = mysqli_query($conn,"SELECT * FROM donations_upcoming");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Web Charity IA Del</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Web Charity IA Del</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#about">Home</a></li>
          <li><a class="nav-link scrollto" href="#hero">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Join Us</a></li>
          <li><a class="nav-link scrollto o" href="#portfolio">Donation Results</a></li>
          <li><a class="nav-link scrollto" href="#team">Upcoming Donations</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted rounded-pill scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="about" class="d-flex text-center  bg-primary text-light about">
      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <br><br>
            <h2 class="text-center">Apa itu web charity ?</h2><br>
            <h6 class="text-center">Web charity adalah sistem yang di gunakan untuk melakukan penggalangan dana. Untuk
              Membantu para Mahasiswa yang kurang mamapu secara finansial di Kampus IT Del. Donasi dapat di berikan
              dalam bentuk Beasiswa dengan sesuai dengan syarat dan ketentuan yang di buat oleh kampus IT Del </h6>
          </div>
          <div class="col-xl-7 col-lg-9 text-center">
            <br><br>
            <h2 class="text-center">Anda dapat menyalurkan bantuan anda dengan berdonasi melalui Rekening :</h2><br>
          </div>
          <div class="d-block text-center">
          <div class = "mb-3 mx-5">
              <img style="height:50px;" class="rounded" src="assets/img/logo/bni.png">
              <img style="height:50px;" class="rounded col-1 me-3 ms-3" src="assets/img/logo/bri.jpg">
              <img class="rounded col-1" src="assets/img/logo/madniri.jpg">
          </div>
          <div class = "">
              <h6>BNI : 328472394872342</h6><h6>BRI : 328472394872342</h6>
                  <h6>Mandiri : 32847239487234</h6>
            </div>
          </div>
        </div>
      </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container position-relative">
        <div class="card-title text-center">
          <h2>About Us</h2>
          <p>Data Pengurus</p>
        </div>
        <div class="row icon-boxes">
          <?php while($data = mysqli_fetch_assoc($query)) :?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div><img class="w-100 h-100" src="assets/img/foto/<?php echo $data['foto']?>"></div>
              <!-- <div class="icon"><i class="ri-stack-line"></i></div> -->
              <h4 class="title"><a href=""><?php echo $data['jabatan']; ?></a></h4>
              <p class="description">
              <table>
                <tr>
                  <td> Nama </td>
                  <td> : </td>
                  <td><?php echo $data['nama']; ?></td>
                </tr>
                <tr>
                  <td> Jabatan </td>
                  <td> : </td>
                  <td><?php echo $data['jabatan']; ?></td>
                </tr>
                <tr>
                  <td> email </td>
                  <td> : </td>
                  <td><?php echo $data['email']; ?></td>
                </tr>
                <tr>
                  <td> No Hp </td>
                  </td>
                  <td> : </td>
                  <td><?php echo $data['no_hp']; ?></td>
                </tr>
              </table>
              </p>
            </div>
          </div>
          <?php endwhile;?>
        </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Langkah-langkah cara untuk berdonasi</h2>
          <!-- <b>Yang Bukan anggota</b> -->
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <div><img style="width:150px; height:80px;" src="assets/img/tutorial/home.png"></div>
              </div>
              <h4><a href="">1. Mengirimkan dana bantuan melalui rekening yang tertera pada bagian Home</a></h4>
              <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <div><img style="width:150px; height:80px;" src="assets/img/tutorial/atm.jpg"></div>
              </div>
              <h4><a href="">2. Patikan data pada saat melakukan konfirmasi trnsfer rekening atas nama : gerry
                  wowoling</a></h4>
              <p class="text-primary">Anda dapat melakukan transfer melalui teller,ATM, atau e-bangking
              <p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                  </path>
                </svg>
                <i class="bx bx-check"></i>
              </div>
              <h4><a href="">3. Jika transaksi berhasi di krim. Berarti anda sudah berhasil melakukan donasi</a></h4>
              <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box iconbox-pink">
            <div class="icon">
                <div><img style="width:200px; height:100px; border-inline-color: red;" src="assets/img/tutorial/about.png"></div>
              </div>
              <h4><a href="">4. Lakukan verifikasi ke salah satu pengurus</a></h4>
              <p class="text-primary">Anda dapat menghubungi salah satu pengurus yang dapat di lihat pada 
              menu about</p>
              <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box iconbox-pink">
            <div class="icon">
                <div><img style="width:200px; height:100px; border-inline-color: red;" src="assets/img/tutorial/login.png"></div>
              </div>
              <h4><a href="">5. Cek data pada website Charity</a></h4>
              <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> -->
            </div>
          </div>
          <b class="text-center mt-5">Anda juga dapat menjdi anggota dengan cara sebagai berikut :</b>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <h4><a href="">1. Melakuakan pendaftaran</a></h4>
              <ul>
                <li class="text-start text-primary list-group-numbered">
                  <p>Mengirimkan Pendaftaran dengan format :</p>
                  <p>Nama : </p>
                  <p>Pekerjaan : </p>
                  <p>email : </p>
                  <p>No. HP : </p>
                  <p>Alamat : </p>
                  <p>Lampiran (scan ijazah) : </p>
                </li>
              </ul>
              <div class="text-start fs-6">
                <span>NB:</span>
                <small class="text-danger">Anda harus memrupakan alumni IT Del</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <h4><a href="">2. Verifikasi</a></h4>
              <ul class="text-primary">
                <li class="text-start list-group-numbered">
                  <p>Kirim Pendaaftaran anda melalui contact :</p>
                </li>
                <ul class="text-start">
                  <li>info@example.com</li>
                  <li>+1 5589 55488 55s</li>
                  <li>+62989560469</li>
                </ul>
                <li class="text-start list-group-numbered">
                  <p>etalah pendaftaran terkirim Pengurus akan melakukan verikasi</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <h4><a href="">3.  Pemberian akun</a></h4>
              <ul Class="text-primary">
                <li class="text-start list-group-numbered">
                  <p>- Cek email yang anda daftarakan</p>
                </li> 
                <li class="text-start list-group-numbered">
                  <p>- Jika verifikasi berhasiil</p>
                </li> 
                <li class="text-start list-group-numbered">
                  <p>- Anda akan menerima Akun anda</p>
                </li> 
                <li class="text-start list-group-numbered">
                  <p>- Anda dapta login dengan akun yang sudah di berikan</p>
                </li> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Sevices Section -->

    <!-- ======= Cta Section ======= -->
    <!-- End Cta Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Donations Results</h2>
        </div>
        <div class="table-lg">
        <table class="table">
  <thead class="table-dark">
      <tr>
        <th>
          No
        </th>
        <th class="col-2">
        tanggal
        </th>
        <th>
        Beasiswa
        </th>
        <th>
        Deskripsi
        </th>
        <th>
        Penerima Beasiswa
        </th>
          </tr>
  </thead>
  <tbody>
    <?php $i = 1; while($data = mysqli_fetch_assoc($result)):?>
    <tr>
      <td><?php echo $i++?></td>
      <td><?php echo $data['tanggal']; ?></td>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['deskripsi']?></td>
      <td><a href="detail.php?id=<?php echo$data['id']; ?>"><button class="btn btn-primary">view</button></a></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
        </div>
      </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>upcoming Donations</h2>
        </div>
        <div class="link-success">
        <table class="table">
        <thead class="table-dark">
      <tr>
        <th>
          No
        </th>
        <th class="col-2">
        tanggal
        </th>
        <th>
        Beasiswa
        </th>
        <th>
        Deskripsi
        </th>
        
          </tr>
  </thead>
  <tbody>
    <?php $i = 1; while($data = mysqli_fetch_assoc($upcaoming)):?>
    <tr>
      <td><?php echo $i++?></td>
      <td><?php echo $data['tanggal']; ?></td>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['deskripsi']?></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
          
        </div>
      </div>
    </section><!-- End Team Section -->
    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- End Frequently Asked Questions Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
        </div>
        <!-- <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div> -->
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Sitoluama, kecamatan Lagubot, Kampus IT Del</p>
              </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>charityiadel@example.com</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62854395454</p>
              </div>
            </div>
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
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Web Charity IA Del</h3>
            <p>Sitoluama, kecamatan Laguboti, kabupaten Toba Samosir (Tobasa), Sumatera Utara<br>
              <strong>Phone:</strong> +62854395454<br>
              <strong>Email:</strong> charityiadel@example.com<br>
            </p>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright"> &copy; web charity <strong><span></span></strong>. All Rights Reserved </div>
        </div>
        <!-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div> -->
      </div>
  </footer><!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>