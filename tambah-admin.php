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
      <h1>Tambah Admin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
          <li class="breadcrumb-item active">Tambah Admin</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            <h4>Tambah Admin</h4>
          </div>
          <div class="card-body">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="namalengkap" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="namalengkap" name="namalengkap" required>
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" required>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-6">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="col-md-6">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
              </div>
              <br>
              <?php
              include ('koneksi.php');
              if (isset($_POST['submit'])) {
                $namalengkap = $_POST['namalengkap'];
                $email = $_POST['email'];
                $password = hash('sha256', $_POST['password']); // Hash the input password using SHA-256
                $cpassword = hash('sha256', $_POST['password']); // Hash the input confirm password using SHA-256
                $alamat = $_POST['alamat'];

                if ($password == $cpassword) {
                  $sql = "SELECT * FROM users WHERE email='$email'";
                  $result = mysqli_query($conn, $sql);
                  if (!$result->num_rows > 0) {
                    $sql = "INSERT INTO users (namalengkap, email, password, alamat)
                            VALUES ('$namalengkap', '$email', '$password', '$alamat')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                      echo "<script>alert('Selamat, Penambahan berhasil!')</script>";
                      
                    } else {
                      echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
                    }
                  } else {
                    echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
                  }
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
</body>

</html>
