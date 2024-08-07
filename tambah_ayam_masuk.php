<?php
include ('koneksi.php');
include('anak_kandang_rule.php');

$nama_ayam = $_POST['nama_ayam'];
$jumlah_ayam = $_POST['jumlah_ayam'];
$tanggal_masuk = $_POST['tanggal_masuk'];

// Query tambah data
$query = "INSERT INTO ayam_masuk (nama_ayam, jumlah_ayam, tanggal_masuk) VALUES ('$nama_ayam', '$jumlah_ayam', '$tanggal_masuk')";

// Eksekusi query
if (mysqli_query($conn, $query)) {
  echo "Data ayam masuk berhasil ditambahkan!";
} else {
  echo "Gagal menambahkan data ayam masuk: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
