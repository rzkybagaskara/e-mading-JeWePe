<?php
    include "dashboard/templates/header.php";
    require "config/koneksi.php";

    // tampilkan artikel dimana statusnya adalah Publish
    $sql = "SELECT * FROM artikel WHERE status_artikel = 'Publish'";
    $result = mysqli_query($conn, $sql)
?>

<!-- Header Text -->
<div class="header-text">
    <h3 class="mt-1 ml-1">e-Mading JeWePe</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas massa vel eros suscipit scelerisque.
        Pellentesque varius justo et scelerisque commodo..</p>
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
                            echo '<img src="' . $imagePath . '" alt="Image" class="card-img-top">';
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