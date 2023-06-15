<?php
//koneksi ke database
include('../kmeans-php-web/koneksi.php');

if (!isset($_SESSION['admin'])) {
  echo "<script>alert('Anda harus login');</script>";
  echo "<script>location='login.php';</script>";
  header('location:login.php');
  exit();
}

if (isset($_GET['berhasil'])) {
  echo "<script>alert('Berhasil Import Data');</script>";
  echo "<script>location='data.php';</script>";
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

  <div class="container-data">
    <div class="page-header">
      <h1>Data</h1>
    </div>
    <div class="page-content">
      <div class="content-header">
        <div class="form-group">
          <form method="post" enctype="multipart/form-data" action="upload_aksi.php">
            <input name="filesiswa" type="file" required="required">
            <input class="btn1 add" name="upload" type="submit" value="Import">
          </form>
        </div>
        <div class="form-group">
          <a href="tambahdata.php"><button class="btn1 add">Tambah</button></a>
        </div>
        <div class="form-group">
          <a href="hapusdata.php"><button class="btn1 del">Hapus Semua</button></a>
        </div>
        <div class="form-group">
          <a href="proseskmeans.php" target="_blank"><button class="btn1 prs">Proses K-Means</button></a>
        </div>
      </div>
      <table>
        <thead>
          <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NILAI</th>
            <th>MINAT JURUSAN</th>
            <th>KODE JURUSAN</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor = 1; ?>
          <?php $ambil = $koneksi->query("SELECT * FROM data_siswa"); ?>
          <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $nomor++; ?></td>
              <td><?php echo $pecah['nama_siswa']; ?></td>
              <td><?php echo $pecah['nilai']; ?></td>
              <td><?php echo $pecah['minat_jurusan']; ?></td>
              <td><?php echo $pecah['kode_jurusan']; ?></td>
              <td>
                <a href="ubahdata.php?&id=<?php echo $pecah['id_data']; ?>"><button class="btn2 edt">Ubah</button></a>
                <a href="hapusperdata.php?&id=<?php echo $pecah['id_data']; ?>"><button class="btn2 del">Hapus</button></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php include("../kmeans-php-web/footer2.php"); ?>
</body>

</html>