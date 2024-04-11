<?php include 'koneksi.php'; session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKK 2024 | Website Galeri Foto </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="?url=home">Gallery Foto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="?url=home">Home</a>
            </li>
            <?php if(isset($_SESSION['user_id'])): ?>
            <li class="nav-item">
            <a class="nav-link" href="?url=upload">Upload</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?url=album">Album</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?url=profile"><?= ucwords($_SESSION ['username']) ?></a>
            </li>
            <?php else: ?>
            <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="daftar.php">Daftar</a>
            </li>
            <?php endif; ?>
        </ul>
        </div>
    </div>
    </nav>
        <?php
        $url=@$_GET["url"];
        if ($url=='home'){
            include 'page/home.php';
        }elseif($url=='profile'){
            include 'page/profil.php';
        }else if($url=='upload'){
            include 'page/upload.php';
        }else if($url=='album'){
            include 'page/album.php';
        }else{
            include 'page/home.php';
        }
        ?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>