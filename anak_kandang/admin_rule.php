<?php
include('koneksi.php');
if (isset($_SESSION['level']) && $_SESSION['level'] == 'admin') {
    if (!strpos($_SERVER['REQUEST_URI'], 'admin')) {
        header("Location:/../index1.php");
        exit();
    }
}
