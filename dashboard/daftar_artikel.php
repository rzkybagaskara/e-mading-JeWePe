<?php
  require '../config/koneksi.php';
  include "templates/sidebar.php";

  $sql = "SELECT id_artikel, judul, isi, uploader, status_artikel FROM artikel";
  $result = mysqli_query($conn, $sql);
?>

      <!-- Content Wrapper-->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <h1>Daftar Artikel</h1>
            
            <!-- Table -->
            <table class="table table-bordered text-center">
                <thead>
                  <tr class = "bg-dark text-white">
                    <th scope="col">ID Artikel</th>
                    <th scope="col">Judul Artikel</th>
                    <th scope="col">Isi Artikel</th>
                    <!-- <th scope="col">Gambar</th> -->
                    <th scope="col">Uploader</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                      while ($row = mysqli_fetch_array($result)) {
                  ?>
                      <td><?php echo $row['id_artikel']?></td>
                      <td><?php echo $row['judul']?></td>
                      <td><?php echo $row['isi']?></td>
                      <td><?php echo $row['uploader']?></td>
                      <td><?php echo $row['status_artikel']?></td>
                      <td>
                        <!-- update -->
                          <form action="../dashboard/update_artikel.php" method="GET">
                          <input type="hidden" name="update_id" value="<?php echo $row['id_artikel']?>">
                              <button type="submit" class="btn btn-primary text-center w-100 mb-3">Edit</button>
                          </form>

                        <!-- delete based on query -->
                          <form action="../dashboard/actions/delete_artikel_action.php" method="POST">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id_artikel']?>">
                            <button type="submit" class="btn btn-danger text-center w-100" onclick="return confirm('Yakin Ingin Hapus?')">Delete</button>
                          </form>
                      </td>
                  </tr>
                  <?php 
                      }     
                  ?>
                </tbody>
              </table>

          </div>
        </section>
      </div>
    </div>

<?php
  include "templates/footer.php";
?>
