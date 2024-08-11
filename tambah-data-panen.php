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
      <h1>Tambah Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
          <li class="breadcrumb-item active">Tambah Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="card">
              <div class="card-header">
                <h4>Tambah Data</h4>
              </div>
              <div class="card-body">
                <form action="proses-tambah-admin.php" method="POST">
                  <div class="row mb-3">
                  <div class="col-md-6">
  <label for="id_kandang" class="form-label">ID Kandang</label>
  <select class="form-control" id="id_kandang" name="id_kandang" required>
    <?php
    // Connect to the database
    include('koneksi.php');
    $sql = "SELECT id_kandang FROM kandang";
    $result = mysqli_query($conn, $sql);

    // Create the dropdown list
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<option value='" . $row['id_kandang'] . "'>" . $row['id_kandang'] . "</option>";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
  </select>
</div>
                    <div class="col-md-6">
                      <label for="jumlah_panen" class="form-label">Jumlah</label>
                      <input type="number" class="form-control" id="jumlah_panen" name="jumlah_panen" required>
                    </div>
                  </div>
                  <div class="row mb-1">
                    <div class="col-md-6">
                      <label for="ukuran" class="form-label">Ukuran</label>
                      <select class="form-select" id="ukuran" name="ukuran" required>
    <?php
    // Connect to the database
    include('koneksi.php');
    $sql = "SELECT ukuran FROM ukuran_panen";
    $result = mysqli_query($conn, $sql);

    // Create the dropdown list
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<option value='" . $row['ukuran'] . "'>" . $row['ukuran'] . "</option>";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
  </select>
                    </div>
                    <div class="col-md-6">
                      <label for="tanggalpanen" class="form-label">Tanggal Panen</label>
                      <input type="date" class="form-control" id="tanggalpanen" name="tanggalpanen" required>
                    </div>
                  </div>
                  <br>
                  <?php
include ('koneksi.php');

if (isset($_POST['submit'])) {
  $nama_kandang = $_POST['nama_kandang'];
  $kapasitas = $_POST['kapasitas'];

  $stmt = $conn->prepare("SELECT * FROM kandang WHERE nama_kandang = ?");
  $stmt->bind_param("s", $nama_kandang);
  $stmt->execute();
  $result = $stmt->get_result();

  if (!$result->num_rows) {
    $stmt = $conn->prepare("INSERT INTO kandang ( nama_kandang, kapasitas) VALUES (?, ?)");
    $stmt->bind_param("ss", $nama_kandang, $kapasitas);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
      echo "<script>alert('Selamat, Data berhasil ditambah!')</script>";
    } else {
      echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
    }
  } else {
    echo "<script>alert('Nama kandang sudah ada!')</script>";
  }
}
?>
              <button type="submit" class="btn btn-success" name="submit">SIMPAN</button>
              <button type="reset" class="btn btn-warning">RESET</button>
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
