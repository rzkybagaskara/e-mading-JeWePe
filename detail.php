<?php
    require "config/koneksi.php";
    include "dashboard/templates/header.php";

    // tampilkan semua hal yang berkaitan dengan artikel
    // ambil artikel berdasarkan id artikelnya


    $sql = "SELECT * FROM artikel WHERE id_artikel = ''";
    $result = mysqli_query($conn, $sql);
?>