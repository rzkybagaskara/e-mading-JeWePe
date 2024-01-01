<?php
    require "config/koneksi.php";
    include "dashboard/templates/header.php";

    // tampilkan semua hal yang berkaitan dengan artikel
    // ambil artikel berdasarkan id artikelnya dari URL (ternary operator)
    $id_artikel = isset($_GET['id_artikel']) ? $_GET['id_artikel'] : null;

    if($id_artikel){
        $sql = "SELECT * FROM artikel WHERE id_artikel = '$id_artikel'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result); //fetch associative array (or objects in JS)
        
        // akses nilainya
        $judul = $row['judul'];
        $isi = $row['isi'];
        $gambar= $row['gambar'];
        $uploader= $row['uploader'];
    }else{
        echo "Artikel tidak ditemukan";
        exit();
    }
?>

<!-- Detail Artikel -->
<div class="detail-artikel ms-3 mt-3">
    <h3 class="mt-1 ml-1"> <?php echo $judul;?> </h3>
    <h5 class="mt-1 ml-1"> Uploader: <?php echo $uploader;?> </h5>
    <div class="text-center">
        <img src="public/img/<?php echo $gambar; ?>" alt="Gambar Artikel" class="img-fluid mx-auto text-center">
    </div>
    <p class="mt-1 ml-1"> <?php echo $isi; ?> </p>
</div>