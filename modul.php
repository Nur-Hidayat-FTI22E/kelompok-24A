<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Modul</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<style>
  .card-body {
    height: 35rem;
  }
</style>
<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>
  <div class="d-flex align-items-center justify-content-between">
    <a href="halaman_profil/index.php" class="logo d-flex align-items-center" style="text-decoration: none;">
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <span class="d-none d-lg-block">VedulPro</span>
    </a>
  </div><!-- End Logo -->


</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
      <a href="./index.php">
          <li class="nav-item">
              <a class="nav-link collapsed" href="./halaman_profil/index.php" style="display: flex; align-items: center;">
                  <img src="gajah/conn/uploads/<?php echo $_SESSION['img']; ?>" alt="Profil Icon" style="width: 20px; height: 20px; margin-right: 5px; border-radius: 100px;">
                  <span>Profil Saya</span>
              </a>
          </li><!-- End Dashboard Nav -->
          
          
      </a>
    <li class="nav-item">
      <a class="nav-link collapsed" href="./halaman_utama/index.php">
        <i class="bi bi-house-fill"></i>
        <span>Home</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="modul.php" >
        <i class="bi bi-book-half"></i>
        <span>Modul</span><i></i>
      </a>
    </li>
    <!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="./riwayat_belajar.php" >
        <i class="bi bi-journal-bookmark-fill"></i>
        <span>Riwayat Pembelajaran</span><i></i>
      </a>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-question-circle"></i>

        </i><span>Help & Supprot</span><i></i>
      </a>
    </li><!-- End Tables Nav -->

    <br><br><br><br><br><br><br><br><br>

    <button class="btn" style="border: 2px solid; color: #616161; border-radius: 12px; margin: 20px;"><a href="login.html" style="color: #616161;"><i class="bi bi-box-arrow-right"></i>   Logout</a></button>
</aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
        <!-- SEARCH -->
    </div>
    
    <!-- End Page Title -->


    <section class="section">
      <div class="row" style="display: flex; justify-content: space-around;">
    
        <div class="col-lg-6">
          <div class="card" style="max-width: 400px; margin: 0 auto; margin-bottom: 30px;">
            <div class="card-body">
              <h5 class="card-title">Modul Python</h5>
    
              <!-- Line Chart -->
              <div id="lineChart" style="max-width: 100%; height: auto;"></div>
              <img src="https://www.python.org/static/community_logos/python-logo-master-v3-TM-flattened.png" alt="" style="max-width: 100%; height: auto;">
    
              <p style="margin: 20px;">Python adalah bahasa pemrograman tujuan umum yang ditafsirkan, tingkat tinggi. Dibuat oleh Guido van Rossum dan pertama kali dirilis pada tahun 1991, filosofi desain Python menekankan keterbacaan kode dengan penggunaan spasi putih yang signifikan.</p>
            
            <button class="btn" style="border: 2px solid; color: #616161; border-radius: 12px; margin: 20px;"><a href="" style="color: #616161;">Pesan Sekarang</a></button>
            </div>
          </div>
        </div>
    
        <div class="col-lg-6">
          <div class="card" style="max-width: 400px; margin: 0 auto; margin-bottom: 30px;">
            <div class="card-body">
              <h5 class="card-title">Modul Java</h5>
    
              <!-- Line Chart -->
              <div id="lineChart" style="max-width: 100%; height: auto;"></div>
              <img src="https://logos-world.net/wp-content/uploads/2022/07/Java-Logo.png" alt="" style="max-width: 100%; height: 150px;">
    
              <p style="margin: 20px;">Java adalah bahasa pemrograman yang dapat dijalankan di berbagai komputer termasuk telepon genggam. Bahasa ini awalnya dibuat oleh James Gosling saat masih bergabung di Sun Microsystems, yang saat ini merupakan bagian dari Oracle dan dirilis tahun 1995.</p>
              
            <button class="btn" style="border: 2px solid; color: #616161; border-radius: 12px; margin: 20px;"><a href="" style="color: #616161;">Pesan Sekarang</a></button>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card" style="max-width: 400px; margin: 0 auto; margin-bottom: 30px;">
            <div class="card-body">
              <h5 class="card-title">Modul JavaScript</h5>
    
              <!-- Line Chart -->
              <div id="lineChart" style="max-width: 100%; height: auto;"></div>
              <img src="https://www.freepnglogos.com/uploads/javascript-png/javascript-logo-transparent-logo-javascript-images-3.png" alt="" style="max-width: 100%; height: 150px;">
    
              <p style="margin: 20px;">JavaScript adalah suatu bahasa pemrograman tingkat tinggi dan dinamis. JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Google Chrome, Internet Explorer. Kode JavaScript dapat disisipkan dalam halaman web menggunakan tag script.</p>
              
            <button class="btn" style="border: 2px solid; color: #616161; border-radius: 12px; margin: 20px;"><a href="" style="color: #616161;">Pesan Sekarang</a></button>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card" style="max-width: 400px; margin: 0 auto; margin-bottom: 30px;">
            <div class="card-body">
              <h5 class="card-title">Modul Golang</h5>
    
              <!-- Line Chart -->
              <div id="lineChart" style="max-width: 100%; height: auto;"></div>
              <img src="https://www.digitalkode.com/images/uploads/golang-img.png" alt="" style="max-width: 100%; height: 150px;">
    
              <p style="margin: 20px;">Go adalah bahasa pemrograman yang dibuat di Google pada tahun 2009 oleh Robert Griesemer, Rob Pike, dan Ken Thompson. Go adalah bahasa pemrograman sumber terbuka yang mudah, sederhana, efisien. Selain itu, Go memiliki level yang sama dengan Java.</p>
              
            <button class="btn" style="border: 2px solid; color: #616161; border-radius: 12px; margin: 20px;"><a href="" style="color: #616161;">Pesan Sekarang</a></button>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card" style="max-width: 400px; margin: 0 auto; margin-bottom: 30px;">
            <div class="card-body">
              <h5 class="card-title">Modul HTML</h5>
    
              <!-- Line Chart -->
              <div id="lineChart" style="max-width: 100%; height: auto;"></div>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa-bW2a0otsQQY_SIQNZQAJEIGTouWE3llEYUIJUA&s" alt="" style="max-width: 100%; height: 150px;">
    
              <p style="margin: 20px;">Hypertext Markup Language adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. Ini dapat dibantu oleh teknologi seperti Cascading Style Sheets dan bahasa skrip lainnya seperti JavaScript, VBScript, dan PHP.</p>
              
            <button class="btn" style="border: 2px solid; color: #616161; border-radius: 12px; margin: 20px;"><a href="" style="color: #616161;">Pesan Sekarang</a></button>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card" style="max-width: 400px; margin: 0 auto; margin-bottom: 30px;">
            <div class="card-body">
              <h5 class="card-title">Modul CSS</h5>
    
              <!-- Line Chart -->
              <div id="lineChart" style="max-width: 100%; height: auto;"></div>
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/1452px-CSS3_logo_and_wordmark.svg.png" alt="" style="max-width: 100%; height: 150px;;">
    
              <p style="margin: 20px;">Cascading Style Sheets (CSS) merupakan bahasa pemrograman yang digunakan untuk menentukan bagaimana dokumen dan website akan disajikan. CSS dibuat oleh Word Wide Web Consortium (W3C) pada 1996.</p>
              
            <button class="btn" style="border: 2px solid; color: #616161; border-radius: 12px; margin: 20px;"><a href="" style="color: #616161;">Pesan Sekarang</a></button>
            </div>
          </div>
        </div>
      </div>
    </section>
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Kelompok 24A</span></strong>. 2023
    </div>
    <div class="credits">
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>