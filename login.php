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
<body class="bg-danger">
<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Halaman Login</div>
                    <p class="card-title">Login Akun</p>
                    <?php 
                    $submit=@$_POST['submit'];
                    if($submit=='Login'){
                        $username=$_POST['username'];
                        $password=md5($_POST['password']);

                        $sql=mysqli_query($conn, "SELECT * FROM user WHERE Username='$username' AND Password='$password'");
                        $cek=mysqli_num_rows($sql);
                        if ($cek!=0){
                            $sesi=mysqli_fetch_array($sql);
                            echo'Login Berhasil!!';
                            $_SESSION['username']=$sesi['Username'];
                            $_SESSION['user_id']=$sesi['UserID'];
                            $_SESSION['email']=$sesi['Email'];
                            $_SESSION['nama_lengkap']=$sesi['NamaLengkap'];
                            echo '<meta http-equiv="refresh" content="0.8; url=./">';
                      }else{
                        echo 'Login Gagal!';
                        echo '<meta http-equiv="refresh" content="0.8; url=login.php">';
                      }
                    }
                    ?>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <input type="submit" value="Login" class="btn btn-danger my-3" name="submit">
                <p>Belum Punya Akun? <a href="daftar.php" class="link-danger">Daftar Sekarang</a></p>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>