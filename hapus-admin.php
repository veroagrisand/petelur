<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM admin WHERE id_admin = '$id'";

if($conn->query($query)) {
    header("location: admin.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>