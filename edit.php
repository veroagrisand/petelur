<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Telur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Data Telur</h2>
        <form method="POST" action="edit.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<!-- ID Telur -->">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<!-- Nama Telur -->" required>
            </div>
            <div class="form-group">
                <label>Harga per kg</label>
                <input type="text" name="harga" class="form-control" value="<!-- Harga Telur -->" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" required><!-- Deskripsi Telur --></textarea>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control-file">
                <img src="<!-- Foto Telur -->" alt="Foto Telur" width="50">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
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
</html>
