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

  <div class="container-ubahdata">
    <div class="page-header">
      <h1>Ubah Data</h1>
    </div>
    <div class="page-content">
      <div class="row">
        <div class="col-sm-6">
          <?php
          $ambil = $koneksi->query("SELECT * FROM data_siswa WHERE id_data='$_GET[id]'");
          $pecah = $ambil->fetch_assoc();
          ?>
          <form method="POST">
            <label>Nama Siswa</label>
            <input type="text" name="name" value="<?php echo $pecah['nama_siswa']; ?>">
            <label>Nilai</label>
            <input type="number" name="nilai" value="<?php echo $pecah['nilai']; ?>">
            <label>Minat Jurusan</label>
            <input type="text" name="minat" value="<?php echo $pecah['minat_jurusan']; ?>">
            <label>Kode Jurusan</label>
            <input type="number" name="kode" value="<?php echo $pecah['kode_jurusan']; ?>">
            <button class="btn1 edt" name="ubah">Ubah</button>
          </form>
          <?php
          if (isset($_POST['ubah'])) {
            $koneksi->query("UPDATE data_siswa SET nama_siswa='$_POST[name]',nilai='$_POST[nilai]',
              minat_jurusan='$_POST[minat]',kode_jurusan='$_POST[kode]' WHERE id_data='$_GET[id]'");

            echo "<script>alert('Data telah diubah');</script>";
            echo "<script>location='data.php';</script>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <?php include("../kmeans-php-web/footer3.php"); ?>

</body>

</html>