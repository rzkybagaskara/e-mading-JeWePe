<?php
// TODO use prepared statement to avoid SQL injection (?)
  include "../templates/sidebar.php";
  require '../../config/koneksi.php';

  // get ID artikel
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
      $delete_id = $_POST['delete_id'];
      $sql = "DELETE FROM artikel WHERE id_artikel = '$delete_id'";
      $result = mysqli_query($conn, $sql);
      
        if($result){
          echo '<script>alert("Data berhasil terhapus!") </script>';
          header("Location: ../daftar_artikel.php");
        } else {
          echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo '<script>alert("Invalid request!") </script>';
        header("Location: ../daftar_artikel.php");
    }
?>