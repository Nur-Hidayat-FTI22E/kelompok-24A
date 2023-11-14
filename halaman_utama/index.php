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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
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

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Features-Centered-Icons-icons.css">
    
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center" style="text-decoration: none;">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block">VedulPro</span>
      </a>
    </div><!-- End Logo -->
  
  
  </header><!-- End Header -->
  
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
  
    <ul class="sidebar-nav" id="sidebar-nav">
        <a href="./index.html">
            <li class="nav-item">
                <a class="nav-link collapsed" href="../halaman_profil/index.php" style="display: flex; align-items: center;">
                    <img src="../gajah/conn/uploads/<?php echo $_SESSION['img']; ?>" alt="Profil Icon" style="width: 20px; height: 20px; margin-right: 5px;">
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
        <a class="nav-link collapsed" href="../modul.html" >
          <i class="bi bi-book-half"></i>
          <span>Modul</span><i></i>
        </a>
      </li>
      <!-- End Components Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="../riwayat_belajar.html" >
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

  <main id="main" class="main">
    <div class="container py-4 py-xl-5">
        <div class="text-center text-white-50 bg-primary border rounded border-0 p-3">
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col-md-9">
                    <div class="p-3">
                        <h4 class="display-5 fw-bold text-start text-white mb-0">Selamat Datang,</h4>
                        <h4 class="display-5 fw-bold text-start text-white mb-0"><?php echo $_SESSION['username']; ?></h4>
                        <p class="text-start text-white mb-0">Pengguna</p>
                    </div>
                </div>
                <div class="col">
                    <lottie-player src="" mode="normal" speed="0"></lottie-player>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                    <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-house-fill">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"></path>
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"></path>
                        </svg></div>
                    <div class="px-3">
                        <h4>Home</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                    <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book-half">
                            <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"></path>
                        </svg></div>
                    <div class="px-3">
                        <h4>Modul</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                    <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-journal-bookmark-fill">
                            <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"></path>
                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"></path>
                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"></path>
                        </svg></div>
                    <div class="px-3">
                        <h4>Riwayat</h4>
                        <h4>Pembelajaran</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                    <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-question-circle">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path>
                        </svg></div>
                    <div class="px-3">
                        <h4>Help &amp;</h4>
                        <h4>Support</h4>
                    </div>
                </div>
            </div>
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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/lottie-player.min.js"></script>
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