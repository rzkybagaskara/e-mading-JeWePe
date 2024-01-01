<?php
  include "templates/sidebar.php";
?>

<!-- Content Wrapper-->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid box">
            <h1>Tambah Artikel</h1>
            <form action="../dashboard/actions/tambah_artikel_action.php" method="POST" enctype="multipart/form-data">

                <!-- Judul Artikel -->
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul Artikel</label>
                    <input type="text" class="form-control" name="judul_artikel">
                </div>

                <!-- Isi Artikel -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Isi Artikel</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        name="isi_artikel"></textarea>
                </div>

                <!-- Upload Gambar -->
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Gambar</label>
                    <input class="form-control" type="file" id="formFile" name="upload_gambar">
                </div>

                <!-- Nama Uploader -->
                <div class="form-group">
                    <label for="exampleFormControlInput1">Uploader</label>
                    <input type="text" class="form-control" name="uploader">
                </div>

                <!-- Radio Button (status artkel) -->
                <div class="form-group">
                    <label for="exampleFormControlInput1">Status Artikel</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_artikel" id="radioButtonDraft"
                            value="Draft">
                        <label class="form-check-label" for="radioButtonDraft">
                            Draft
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_artikel" id="radioButtonPublish"
                            value="Publish">
                        <label class="form-check-label" for="radioButtonPublish">
                            Publish
                        </label>
                    </div>
                </div>

                <!-- Button -->
                <div class="button-placements grid">
                    <button type="submit" class="btn btn-primary text-center w-100 mb-3">Tambah Artikel</button>
                </div>

            </form>
        </div>
    </section>
</div>
</div>

<?php
  include "templates/footer.php";
?>