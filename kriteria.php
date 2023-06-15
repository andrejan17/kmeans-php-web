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

  <div class="container-kriteria">
    <div class="page-header">
      <h1>Kriteria</h1>
    </div>
    <div class="page-content">
      <div class="content-header">
        <div class="form-group">
          <a href="tambahkriteria.php"><button class="btn1 add">Tambah</button></a>
        </div>
        <div class="form-group">
          <a href="hapuskriteria.php"><button class="btn1 del">Hapus Semua</button></a>
        </div>
      </div>
      <table>
        <thead>
          <tr>
            <th>NO</th>
            <th>NILAI CENTER</th>
            <th>JURUSAN</th>
            <th>KODE JURUSAN</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor = 1; ?>
          <?php $ambil = $koneksi->query("SELECT * FROM kriteria_jurusan"); ?>
          <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $nomor++; ?></td>
              <td><?php echo $pecah['nilai_center']; ?></td>
              <td><?php echo $pecah['jurusan']; ?></td>
              <td><?php echo $pecah['kode_jurusan']; ?></td>
              <td>
                <a href="ubahkriteria.php?&id=<?php echo $pecah['id_kriteria']; ?>"><button class="btn2 edt">Ubah</button></a>
                <a href="hapusperkriteria.php?&id=<?php echo $pecah['id_kriteria']; ?>"><button class="btn2 del">Hapus</button></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php include("../kmeans-php-web/footer3.php"); ?>
</body>

</html>