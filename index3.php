<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Template Bootstrap NiceAdmin</title>
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
<?php
 include ('header.php');
 include ('sidebar.php');
 include('anak_kandang_rule.php');
 ?>
<body>



  <!-- ======= Main Content ======= -->
  <main id="main" class="main">
    <div class="container">
        <h2 class="mb-4">Penjualan Telur</h2>
        <div class="mb-4">
            <button type="button" class="btn btn-primary" onclick="window.location.href='tambah.php'">+ Tambah Telur</button>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Harga per kg</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh data statis, ganti dengan data dinamis dari database -->
                    <tr>
                      <td>Telur 1 Butir</td>
                      <td><img src="assets/img/telur1.jpg" alt="" style="width: 100px; height: auto;"></td>
                      <td>Rp 2.000</td>
                      <td>Telur bagus grade A</td>
                      <td>
                          <button class="btn btn-success btn-sm" onclick="window.location.href='edit.php?id=1'">Edit</button>
                          <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                      </td>
                  </tr>
                  <tr>
                      <td>Telur 1 Papan</td>
                      <td><img src="assets/img/telur2.jpg" alt="" style="width: 100px; height: auto;"></td>
                      <td>Rp 55.000</td>
                      <td>Telur bagus grade A</td>
                      <td>
                          <button class="btn btn-success btn-sm" onclick="window.location.href='edit.php?id=2'">Edit</button>
                          <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                      </td>
                  </tr>
                  
                       
                    <!-- Akhir contoh data statis -->
                </tbody>
            </table>
        </div>
    </div>
  </main><!-- End Main Content -->

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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
