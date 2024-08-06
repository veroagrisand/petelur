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
 ?>

  <!-- ======= Main ======= -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Tambah Data Ayam</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
          <li class="breadcrumb-item active">Tambah Data Ayam</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="card">
              <div class="card-header">
                <h4>Tambah Data Ayam</h4>
              </div>
              <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="nama_ayam" class="form-label">Nama Ayam</label>
                      <input type="text" class="form-control" id="nama_ayam" name="nama_ayam" required>
                    </div>
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
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-6">
                      <label for="jumlah_ayam_masuk" class="form-label">Jumlah</label>
                      <input type="number" class="form-control" id="jumlah_ayam_masuk" name="jumlah_ayam_masuk" required>
                    </div>
                    <div class="col-md-6">
                      <label for="tanggalmasuk" class="form-label">Tanggal Masuk</label>
                      <input type="date" class="form-control" id="tanggalmasuk" name="tanggalmasuk" required>
                    </div>
                  </div>
                  <br>
                  <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Connect to the database
  include('koneksi.php');

  // Get the form data
  $nama_ayam = $_POST["nama_ayam"];
  $id_kandang = $_POST["id_kandang"];
  $jumlah_ayam_masuk = $_POST["jumlah_ayam_masuk"];
  $tanggalmasuk = $_POST["tanggalmasuk"];

  // Insert the data into the database
  $sql = "INSERT INTO ayam_masuk (nama_ayam, id_kandang, jumlah_ayam_masuk, tanggalmasuk) VALUES ('$nama_ayam', '$id_kandang', '$jumlah_ayam_masuk', '$tanggalmasuk')";
  $result = mysqli_query($conn, $sql);

  // Check if the data is inserted successfully
  if ($result) {
    echo "<script>alert('Data berhasil ditambahkan!');</script>";
    echo "<script>window.location.href='tambah-ayam.php';</script>";
  } else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
  }

  // Close the database connection
  mysqli_close($conn);
}
?>
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
</body>

</html>
