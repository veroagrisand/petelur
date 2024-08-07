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

<?php
 include ('header.php');
 include ('sidebar.php');
 include('anak_kandang_rule.php');
 ?>

  <!-- ======= Main ======= -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Tambah Laporan Gagal Panen</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
          <li class="breadcrumb-item active">Tambah Laporan Gagal Panenn</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="card">
              <div class="card-header">
                <h4>Tambah Laporan Gagal Panen</h4>
              </div>
              <div class="card-body">
                <form action="proses-tambah-admin.php" method="POST">
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="username" class="form-label">Gagal ID</label>
                      <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="col-md-6">
                      <label for="password" class="form-label">Kandang ID</label>
                      <input type="text" class="form-control" id="password" name="password" required>
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-6">
                      <label for="username" class="form-label">Jumlah</label>
                      <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="col-md-6">
                      <label for="password" class="form-label">Satuan</label>
                      <input type="text" class="form-control" id="password" name="password" required>
                    </div>
                  </div>
                  <div class="row mb-1">
                    <div class="col-md-6">
                      <label for="username" class="form-label">Tanggal Laporan</label>
                      <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                  </div>
                  <br>
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="index1.php" class="btn btn-secondary">Batal</a>
                </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End Main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
</body>

</html>
