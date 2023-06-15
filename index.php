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

</head>

<body>

  <?php include("../kmeans-php-web/navbar.php"); ?>

  <div class="pimg1">
    <div class="ptext1">
      <span class="border">
        SMA Negeri 1 Cisarua
      </span>
    </div>
    <div class="pbutton">
      <span class="border">
        <a href="../kmeans-php-web/kriteria.php"><button class="submit-btn">Mulai</button></a>
      </span>
    </div>
  </div>
  <section class="section section-light">
    <div class="column">
      <h2>Logo</h2>
      <img src="../kmeans-php-web/pic/logosmancis.png">
    </div>
    <div class="column">
      <h2>Sejarah</h2>
      <p>SMAN 1 Cisarua Bogor terletak di kawasan wisata kabupaten Bogor tepatnya di Kecamatan Cisarua berdiri tanggal 04 April 2006, sebagai kelas jauh dari SMA Negeri 1 Megamendung.
        Pada saat itu untuk sementara kegiatan berjalan dilaksanakan di SMP Negeri 1 Cisarua.
        Setelah itu pembangunan di SMAN 1 Cisarua berkembang pesat sehingga pada tanggal 03 Januari 2009 SMA Negeri 1 Cisarua menempati gedung baru yang beralamat di Jl. Adhijaksa RT. 02 RW. 02 Desa Leuwimalang Kecamatan Cisarua Kabupaten Bogor.
      </p>
    </div>
  </section>
  <div class="pimg2">
    <div class="ptext2">
      <span class="border trans">
        VISI DAN MISI
      </span>
    </div>
  </div>
  <section class="section section-dark">
    <div class="column">
      <h2>Visi</h2>
      <p>
        Visi SMAN 1 Cisarua adalah Terwujudnya Peserta Didik yang Religius, Berprestasi, dan Berwawasan Lingkungan.
      </p>
    </div>
    <div class="column">
      <h2>Misi</h2>
      <ul>
        <li>Mengembangkan potensi kecerdasan intelektual, emosional, dan spiritual.</li>
        <li>Meningkatkan kualitas dan kuantitas lulusan yang diterima di Perguruan Tinggi Negeri.</li>
        <li>Membangun watak dan kepribadian peserta didik yang jujur, bermartabat dan berwawasan kebangsaan.</li>
        <li>Mengembangkan lingkungan sekolah yang hijau, elok, bersih, aman, tertib, rapi, dan nyaman dalam upaya penyelamatan lingkungan hidup.</li>
      </ul>
    </div>
  </section>
  <div class="footer">
    <?php include("../kmeans-php-web/footer1.php"); ?>
  </div>
</body>

</html>