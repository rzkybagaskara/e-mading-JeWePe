<?php
  // Include config file
  include "config/koneksi.php";

   // cek apakah form sudah disubmit
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // cek apakah user_input dan pw_input sudah sesuai dengan name yang ada pada form
    if (isset($_POST['user_input']) && isset($_POST['pw_input'])) {
      // pasangkan variabel username dan password berdasarkan name yang ada pada form 
      $username = $_POST['user_input'];
      $password = $_POST['pw_input'];

      // query
      $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        // simpan username dan password dengan session
        if(is_array($row)){
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
        }
        // jika sessionnya sama maka lempar ke halaman daftar_artikel.php
        if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
            header("Location: dashboard/daftar_artikel.php");
            exit(); //stop script
        }else{
            echo '<script>alert("Username atau Password salah!") </script>';
        }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-mading JeWePe</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="public/login.css">
</head>

<body>
    <section class="section vh-100">
        <!-- Welcome Message -->
        <div class="message pt-4">
            <h2 class="text-center">Selamat Datang</h2>
            <h2 class="text-center">Admin JeWePe</h2>
        </div>

        <!-- Login Box -->
        <div class="login-box d-flex justify-content-center mt-2 w-10">
            <form method="POST">
                <div class="mb-3">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" name="user_input">
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pw_input">
                </div>
                <button type="submit" class="btn btn-primary text-center w-100">Login</button>
            </form>
        </div>
    </section>

</body>

</html>