<?php
session_start();

// $con = new mysqli('localhost', 'root', '', 'vedul');
// $sql = "SELECT * FROM user_account";
// $result = mysqli_query($con, $sql);
// $users = array();

// // Loop hasil query dan simpan data ke array asosiatif
// while ($row = mysqli_fetch_assoc($result)) {
//     $users[] = $row;
// }
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>

      <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Articles-Cards-images.css">

    
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>
    <div class="d-flex align-items-center justify-content-between">
      <a href="../halaman_utama/index.php" class="logo d-flex align-items-center" style="text-decoration: none;">
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
                <a class="nav-link collapsed" href="../halaman_profil/index.php" style="display: flex; align-items: center;">
                    <img src="../gajah/conn/uploads/<?php echo $_SESSION['img']; ?>" alt="Profil Icon" style="width: 20px; height: 20px; margin-right: 5px; border-radius: 200px">
                    <span>Profil Saya</span>
                </a>
            </li><!-- End Dashboard Nav -->
            
            
        </a>
      <li class="nav-item">
        <a class="nav-link collapsed" href="../halaman_utama/index.php">
          <i class="bi bi-house-fill"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="../modul.php" >
          <i class="bi bi-book-half"></i>
          <span>Modul</span><i></i>
        </a>
      </li>
      <!-- End Components Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="../riwayat_belajar.php" >
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
  
      <button class="btn" style="border: 2px solid; color: #616161; border-radius: 12px; margin: 20px;"><a href="../login.html" style="color: #616161;"><i class="bi bi-box-arrow-right"></i>   Logout</a></button>
  </aside><!-- End Sidebar-->

    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col-md-4">
                <div class="card"></div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body p-4">
                        <h4 class="text-center card-title"><strong>Profil Saya</strong></h4><button class="btn btn-primary" type="button" style="background: #5200FF;"><strong>INFORMASI PRIBADI</strong></button>
                        <p class="card-text"><strong>Nama Lengkap : <?php echo $_SESSION['nama']; ?></strong><br>
                        
                        <strong>Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $_SESSION['email']; ?></strong><br>
                        
                        <strong>No. Telepon&nbsp; &nbsp; &nbsp; : 
                          <?php 
                          if ($_SESSION['no_hp'] == "") {
                            echo "<button type='submit'>add</button>";
                          } else {
                            echo $_SESSION['no_hp'];
                          }
                          ?> 
                        </strong><br>
                        
                        <strong>Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 
                          <?php 
                            if ($_SESSION['alamat'] == "") {
                              echo "<button type='submit'>add</button>";
                            } else {
                              echo $_SESSION['alamat '];
                            }
                          ?>   
                        </strong></p><button class="btn btn-primary" type="button" style="background: #5200FF;">
                        
                        <strong>INFORMASI AKUN</strong></button>
                        <p class="card-text"><strong>Nama Pengguna&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?php echo $_SESSION['username']; ?></strong><br>
                        
                        <strong>Tanggal Pembuatan Akun : <?php echo $_SESSION['create_account']; ?></strong><br>
                        
                        <strong>Status&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : vvip</strong></p>
                    </div>
                </div>
            </div>
            <div class="col" style="background: #5200FF;">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 300px;" src="../gajah/conn/uploads/<?php echo $_SESSION['img']; ?>" width="334" height="300"></div>
            </div>
        </div>
    </div>

    <!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Kelompok 24A</span></strong>. 2023
    </div>
    <div class="credits">
    </div>
  </footer><!-- End Footer -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


</body>
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</html>