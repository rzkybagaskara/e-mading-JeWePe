<?php
    include "dashboard/templates/header.php";
    require "config/koneksi.php";

    // tampilkan artikel dimana statusnya adalah Publish
    $sql = "SELECT * FROM artikel WHERE status_artikel = 'Publish'";
    $result = mysqli_query($conn, $sql)
?>

<!-- Header Text -->
<div class="header-text text-center pb-3 pt-3">
    <h3 class="mt-4 ml-1 pb-2">e-Mading JeWePe</h3>
    <p class="mt-2">Website sekolah JeWePe untuk menampilkan elektronik mading kegiatan sekolah.</p>
</div>

<!-- Article Content -->
<div class="container">
    <!-- Cards -->
    <div class="grid p-1 gap-2">
        <div class="row">
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <?php
                        $baseURL = 'public/img/';
                        $gambar = $row['gambar'];
                        $imagePath = $baseURL . $gambar;

                        if (!empty($gambar) && file_exists($imagePath)) {
                            echo '<img src="' . $imagePath . '" alt="Gambar Artikel" class="card-img-top img-thumbnail">';
                        } else {
                            echo 'Image not available';
                        }
                        ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['judul']; ?></h5>
                        <p class="card-text text-truncate"><?php echo $row['isi']; ?></p>
                        <a href="detail.php?id_artikel=<?php echo $row['id_artikel']; ?>" class="btn btn-primary">Detail
                            Artikel</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

</html>