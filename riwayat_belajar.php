<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Riwayat Pembelajaran</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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
    <a href="halaman_utama/index.php" class="logo d-flex align-items-center" style="text-decoration: none;">
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
                  <img src="gajah/conn/uploads/<?php echo $_SESSION['img']?>" alt="Profil Icon" style="width: 20px; height: 20px; margin-right: 5px; border-radius: 100px;">
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
<h2 style="text-align: center;">Riwayat Pembelajaran</h2>
    <div class="list-container">
        <div class="list-item" style="background-color: #5100ff55; border-radius: 10px;">
          <h4 style="color: #5200FF; font-weight: bold; margin-left: 20px;">Pengenalan Pemrograman Python</h4>
          <p style="margin-left: 20px;">15 Oktober 2023</p>
        </div>
    
        <div class="list-item" style="background-color: #5100ff55; border-radius: 10px;">
            <h4 style="color: #5200FF; font-weight: bold; margin-left: 20px;">Dasar-dasar HTML</h4>
            <p style="margin-left: 20px;">14 Oktober 2023</p>
        </div>
    
        <div class="list-item" style="background-color: #5100ff55; border-radius: 10px;">
            <h4 style="color: #5200FF; font-weight: bold; margin-left: 20px;">Pemrograman CSS Lanjutan</h4>
            <p style="margin-left: 20px;">13 Oktober 2023</p>
          </div>
    
          <div class="list-item" style="background-color: #5100ff55; border-radius: 10px;">
            <h4 style="color: #5200FF; font-weight: bold; margin-left: 20px;">Pemrograman Java untuk Pemula</h4>
            <p style="margin-left: 20px;">12 Oktober 2023</p>
          </div>
    
          <div class="list-item" style="background-color: #5100ff55; border-radius: 10px;">
            <h4 style="color: #5200FF; font-weight: bold; margin-left: 20px;">Python untuk Ilmu Data</h4>
            <p style="margin-left: 20px;">11 Oktober 2023</p>
          </div>
    
          <div class="list-item" style="background-color: #5100ff55; border-radius: 10px;">
            <h4 style="color: #5200FF; font-weight: bold; margin-left: 20px;">Pemrograman Java untuk Pemula</h4>
            <p style="margin-left: 20px;">10 Oktober 2023</p>
          </div>
      </div>
 

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