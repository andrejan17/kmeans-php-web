<?php
//koneksi ke database
include('../kmeans-php-web/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>SMA Negri 1 Cisarua</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="../kmeans-php-web/css/login.css">

</head>

<body>
  <div class="container-title">
    <h1>APLIKASI</h1>
    <h1>PENENTUAN JURUSAN</h1>
    <h4>&copy; SMAN 1 CISARUA BOGOR</h4>
  </div>
  <div id="container-login">
    <div id="page-content">
      <div id="page-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form">
        <label for="user-name" style="padding-top:13px">
          &nbsp;Username
        </label>
        <input id="user-name" class="form-content" type="text" name="user" />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password
        </label>
        <input id="user-password" class="form-content" type="password" name="pass" />
        <div class="form-border"></div>

        <input id="submit-btn" type="submit" name="login" value="LOGIN" />
      </form>
      <?php
      if (isset($_POST['login'])) {
        $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]'
            AND password='$_POST[pass]'");
        $yangcocok = $ambil->num_rows;
        if ($yangcocok == 1) {
          $_SESSION['admin'] = $ambil->fetch_assoc();
          echo "<script>alert('Login Berhasil');</script>";
          echo "<script>location='index.php';</script>";
        } else {
          echo "<script>alert('Login Gagal');</script>";
          echo "<script>location='login.php';</script>";
        }
      }
      ?>
    </div>
  </div>

</body>

</html>