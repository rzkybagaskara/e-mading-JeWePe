<?php
  include "../templates/sidebar.php";
  require '../../config/koneksi.php';
  
  // cek artikel sudah sesuai dengan id dan post tersebut ada (count > 0)
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($_POST) > 0) {
    //cocokkan variabel dengan name
    $update_id = $_POST['update_id'];
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
    
    $sql = "UPDATE `artikel` SET `judul` = '$judul_artikel', `isi` = '$isi_artikel', `gambar` = '$target_path', `uploader` = '$uploader', `status_artikel` = '$status_artikel' WHERE `id_artikel` = '$update_id'";

    if (mysqli_query($conn, $sql)) {
      echo '<script>alert("Data berhasil terupdate!")</script>';
      header("Location: ../daftar_artikel.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    //ambil semua datanya
    $result = mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel = '$update_id'");
    $row = mysqli_fetch_array($result);
  }
 
?>