<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = $_POST['nama_lengkap'];
    $password = $_POST['password'];
    $no_handphone = $_POST['no_handphone'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $username = $_POST['username'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO admin (nama_lengkap, password, no_handphone, jenis_kelamin, username, alamat) VALUES ('$nama_lengkap', '$password', '$no_handphone', '$jenis_kelamin', '$username', '$alamat')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: index1.html");
    exit();
}
?>
