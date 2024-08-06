<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM users WHERE id = '$id'";

if($conn->query($query)) {
    echo "DATA BERHASIL DIHAPUS!";
    header("location: admin.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>