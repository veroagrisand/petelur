<?php

include('koneksi.php');

//get id
$id = $_GET['id_kandang'];

$query = "DELETE FROM kandang WHERE id_kandang = '$id'";

if($conn->query($query)) {
    echo "DATA BERHASIL DIHAPUS!";
    header("location: data-kandang.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>