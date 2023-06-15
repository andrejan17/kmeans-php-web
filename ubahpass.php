<?php
//koneksi ke database
include('../kmeans-php-web/koneksi.php');

if (!isset($_SESSION['admin'])) {
  echo "<script>alert('Anda harus login');</script>";
  echo "<script>location='login.php';</script>";
  header('location:login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>SMA Negri 1 Cisarua</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="../kmeans-php-web/css/style1.css">
  <link rel="stylesheet" type="text/css" media="screen" href="../kmeans-php-web//css/style2.css">

</head>

<body>

  <?php include("../kmeans-php-web/navbar.php"); ?>

  <div class="container-ubahpass">
    <div class="page-header">
      <h1>Ubah Password</h1>
    </div>
    <div class="page-content">
      <div class="row">
        <div class="col-sm-6">
          <?php
          $ambil = $koneksi->query("SELECT * FROM admin WHERE id_admin='$_GET[id]'");
          $pecah = $ambil->fetch_assoc();
          ?>
          <form method="POST">
            <label>Password Lama</label>
            <input type="password" name="passlama">
            <label>Password Baru</label>
            <input type="password" name="passbaru">
            <label>Konfirmasi Password Baru</label>
            <input type="password" name="konfpassbaru">
            <button class="btn1 edt" name="ubah">Ubah</button>
          </form>
          <?php
          if (isset($_POST['ubah'])) {
            //membuat variabel untuk menyimpan data inputan yang di isikan di form
            $passlama      = $_POST['passlama'];
            $passbaru      = $_POST['passbaru'];
            $konfpassbaru  = $_POST['konfpassbaru'];

            //cek dahulu ke database dengan query SELECT
            //kondisi adalah WHERE (dimana) kolom password adalah $password_lama di encrypt m5
            //encrypt -> md5($password_lama)
            $ambil = $koneksi->query("SELECT password FROM admin WHERE id_admin='$_GET[id]' AND password='$passlama'");

            if ($ambil->num_rows) {
              //kondisi ini jika password lama yang dimasukkan sama dengan yang ada di database
              //membuat kondisi minimal password adalah 5 karakter
              if (strlen($passbaru) >= 5) {
                //jika password baru sudah 5 atau lebih, maka lanjut ke bawah
                //membuat kondisi jika password baru harus sama dengan konfirmasi password
                if ($passbaru == $konfpassbaru) {
                  //jika semua kondisi sudah benar, maka melakukan update kedatabase
                  //query UPDATE SET password = encrypt md5 password_baru
                  //kondisi WHERE id user = session id pada saat login, maka yang di ubah hanya user dengan id tersebut	
                  $update = $koneksi->query("UPDATE admin SET password='$passbaru' WHERE id_admin='$_GET[id]'");
                  if ($update) {
                    //kondisi jika proses query UPDATE berhasil
                    echo "<script>alert('Password Telah Diubah');</script>";
                    echo "<script>location='index.php';</script>";
                  } else {
                    //kondisi jika proses query gagal
                    echo "<script>alert('Password Gagal Diubah');</script>";
                    echo "<script>location=ubahpass.php';</script>";
                  }
                } else {
                  //kondisi jika password baru beda dengan konfirmasi password
                  echo "<script>alert('Konfirmasi Password Tidak Cocok');</script>";
                  echo "<script>location=ubahpass.php';</script>";
                }
              } else {
                //kondisi jika password baru yang dimasukkan kurang dari 5 karakter
                echo "<script>alert('Minimal Password 5 Karakter');</script>";
                echo "<script>location=ubahpass.php';</script>";
              }
            } else {
              //kondisi jika password lama tidak cocok dengan data yang ada di database
              echo "<script>alert('Password Lama Tidak Cocok');</script>";
              echo "<script>location=ubahpass.php';</script>";
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <?php include("../kmeans-php-web/footer3.php"); ?>
</body>

</html>