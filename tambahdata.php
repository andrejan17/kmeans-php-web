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
  <link rel="stylesheet" type="text/css" media="screen" href="../kmeans-php-web/css/style2.css">

</head>

<body>

  <?php include("../kmeans-php-web/navbar.php"); ?>

  <div class="container-tbdata">
    <div class="page-header">
      <h1>Tambah Data</h1>
    </div>
    <div class="page-content">
      <div class="row">
        <div class="col-sm-6">
          <form method="POST">
            <label>Nama Siswa</label>
            <input type="text" name="nama">
            <label>Nilai</label>
            <input type="number" name="nilai">
            <label>Minat Jurusan</label>
            <input type="text" name="minat">
            <label>Kode Jurusan</label>
            <input type="number" name="kode">
            <button class="btn1 add" name="save">Tambah</button>
          </form>
          <?php
          if (isset($_POST['save'])) {
            $koneksi->query("INSERT INTO data_siswa
              (nama_siswa,nilai,minat_jurusan,kode_jurusan)
              VALUES('$_POST[nama]','$_POST[nilai]','$_POST[minat]','$_POST[kode]')");

            echo "<script>alert('Data Ditambahkan');</script>";
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