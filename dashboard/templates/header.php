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
    <link rel="stylesheet" href="public/style.css">
    <!-- Google Font: Inter -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&family=Rubik:wght@300;400;500&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <div class="top-navbar">
        <nav class="navbar navbar-expand-lg bg-primary text-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Sekolah JeWePe</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="main.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">About Us</a>
                        </li>
                    </ul>
                    <!-- Login Button -->
                    <button type="button" class="btn btn-secondary" onclick="location.href='login.php'">Login</button>
                </div>
            </div>
        </nav>
    </div>