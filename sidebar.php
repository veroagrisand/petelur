<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
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

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index1.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Kelola Akun</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin.php">
              <i class="bi bi-circle"></i><span>Admin</span>
            </a>
          </li>
          <li>
            <a href="anak-kandang.php">
              <i class="bi bi-circle"></i><span>Anak Kandang</span>
            </a>
          </li>
        </ul>
      </li><!-- End Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data-pakan.php">
              <i class="bi bi-circle"></i><span>Data Pakan</span>
            </a>
          </li>
          <li>
            <a href="data-vaksin.php">
              <i class="bi bi-circle"></i><span>Data Vaksin</span>
            </a>
          </li>
          <li>
            <a href="data-kandang.php">
              <i class="bi bi-circle"></i><span>Data Kandang</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Peternakan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="ayam-masuk.php">
              <i class="bi bi-circle"></i><span>Ayam Masuk</span>
            </a>
          </li>
          <li>
            <a href="pemberian-pakan.php">
              <i class="bi bi-circle"></i><span>Pemberian Pakan</span>
            </a>
          </li>
          <li>
            <a href="pemberian-vaksin.php">
              <i class="bi bi-circle"></i><span>Pemberian Vaksin</span>
            </a>
          </li>
          <li>
            <a href="panen.php">
              <i class="bi bi-circle"></i><span>Panen</span>
            </a>
          </li>
          <li>
            <a href="gagal-panen.php">
              <i class="bi bi-circle"></i><span>Gagal Panen</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="laporan-ayam-masuk.php">
              <i class="bi bi-circle"></i><span>Laporan Ayam Masuk</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.php">
              <i class="bi bi-circle"></i><span>Laporan Vaksin</span>
            </a>
          </li>
          <li>
            <a href="laporan-panen.php">
              <i class="bi bi-circle"></i><span>Laporan Panen</span>
            </a>
          </li> 
          <li>
            <a href="laporan-gagal-panen.php">
              <i class="bi bi-circle"></i><span>Laporan Gagal Panen</span>
            </a>
          </li> 
          <li>
            <a href="laporan-stok-telur.php">
              <i class="bi bi-circle"></i><span>Laporan Stock Telur</span>
            </a>
          </li> 
  </li>
</ul>
      </li><!-- End Forms Nav -->


      <li class="nav-item">
        <a class="nav-link " href="index3.php">
          <i class="bi bi-grid"></i>
          <span>Penjualan</span>
        </a>
     

  </aside>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>