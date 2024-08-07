<?php
include('koneksi.php');
if (isset($_SESSION['level']) && $_SESSION['level'] == 'anak_kandang') {
    if (!strpos($_SERVER['REQUEST_URI'], 'anak_kandang')) {
        header("Location: anak_kandang/index1.php");
        exit();
    }
}

//include(anak_kandang_rule.php);