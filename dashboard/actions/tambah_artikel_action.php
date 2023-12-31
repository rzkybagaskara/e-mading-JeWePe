<?php
  require '../../config/koneksi.php';

// pasangkan variabel dengan name yang ada pada input type
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $judul_artikel = $_POST['judul_artikel'];
    $isi_artikel = $_POST['isi_artikel'];
    $upload_gambar = $_FILES['upload_gambar']['name']; //key value
    $uploader = $_POST['uploader'];
    $status_artikel = $_POST['status_artikel'];

    $upload_directory = "../../public/img/";
    $uploaded_pict = $_FILES['upload_gambar'];

    // unique file names (pict)
    $unique_pictname = uniqid() . '_' . $uploaded_pict['name'];

    // move pict
    $target_path = $upload_directory . $unique_pictname;
    move_uploaded_file($uploaded_pict['tmp_name'], $target_path);

    $sql = "INSERT INTO artikel (judul, isi, gambar, uploader, status_artikel) VALUES ('$judul_artikel', '$isi_artikel', '$target_path', '$uploader', '$status_artikel')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Data berhasil tersimpan!")</script>';
        header("Location: ../daftar_artikel.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>