<?php
  require '../config/koneksi.php';
  include "templates/sidebar.php";
  
  if($_SERVER['REQUEST_METHOD'] == "GET"){
    $update_id = $_GET['update_id'];
    
    // ambil artikel berdasarkan ID
    $result = mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel = '$update_id'");
    $row = mysqli_fetch_array($result);
  }else{
    echo "ID Artikel tidak bisa di bind!";
    exit();
  }
?>

<!-- Content Wrapper-->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid box">
            <h1>Edit Artikel</h1>
            <form action="../dashboard/actions/update_artikel_action.php" method="POST" enctype="multipart/form-data">

                <!-- Judul Artikel -->
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul Artikel</label>
                    <input type="text" class="form-control" name="judul_artikel"
                        value="<?php echo htmlspecialchars($row['judul']); ?>">
                </div>

                <!-- Isi Artikel -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Isi Artikel</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        name="isi_artikel"><?php echo htmlspecialchars($row['isi']); ?></textarea>
                </div>

                <!-- Upload Gambar -->
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Gambar</label>
                    <input class="form-control" type="file" id="formFile" name="upload_gambar">
                </div>

                <!-- Nama Uploader -->
                <div class="form-group">
                    <label for="exampleFormControlInput1">Uploader</label>
                    <input type="text" class="form-control" name="uploader"
                        value="<?php echo htmlspecialchars($row['uploader']); ?>">
                </div>

                <!-- Radio Button (status artkel) -->
                <div class="form-group">
                    <label for="exampleFormControlInput1">Status Artikel</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_artikel" id="radioButtonDraft"
                            <?php echo ($row['status_artikel'] == 'Draft') ? 'checked' : ''; ?> value="Draft">
                        <label class="form-check-label" for="radioButtonDraft">
                            Draft
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_artikel" id="radioButtonPublish"
                            <?php echo ($row['status_artikel'] == 'Publish') ? 'checked' : ''; ?> value="Publish">
                        <label class="form-check-label" for="radioButtonPublish">
                            Publish
                        </label>
                    </div>
                </div>


                <!-- Button -->
                <div class="button-placements grid">
                    <input type="hidden" name="update_id" value="<?php echo $row['id_artikel']?>">
                    <button type="submit" class="btn btn-primary text-center w-100 mb-3">Update Artikel</button>
                </div>

            </form>
        </div>
    </section>
</div>
</div>

<?php
  include "templates/footer.php";
?>