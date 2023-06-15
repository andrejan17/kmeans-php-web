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

  <div class="pimg3">
    <div class="ptext3">
      <span class="border">
        Algoritma K-Means
      </span>
    </div>
  </div>
  <section class="section section-mid">
    <h2>Penjelasan Algoritma K-Means</h2>
    <p>Algoritma K-means merupakan salah satu algoritma clustering.
      Tujuan algoritma ini yaitu untuk membagi data menjadi beberapa kelompok.
      Algoritma ini menerima masukan berupa data tanpa label kelas.
      Hal ini berbeda dengan supervised learning yang menerima masukan berupa vektor (X1 , Y1) , (X2 , Y2) , ..., (Xi , Yi),
      di mana Xi merupakan data dari suatu data pelatihan dan Yi merupakan label kelas untuk Xi.</p>
    <p>Pada algoritma pembelajaran ini,
      komputer mengelompokkan sendiri data-data yang menjadi masukannya tanpa mengetahui terlebih dulu target kelasnya.
      Pembelajaran ini termasuk dalam unsupervised learning.
      Masukan yang diterima adalah data atau objek dan K buah kelompok (cluster) yang diinginkan.
      Algoritma ini akan mengelompokkan data atau objek ke dalam K buah kelompok tersebut.
      Pada setiap cluster terdapat titik pusat (centroid) yang merepresentasikan cluster tersebut.</p>
    <p>K-means ditemukan oleh beberapa orang yaitu Lloyd (1957, 1982), Forgey (1965) , Friedman and Rubin (1967) , and McQueen (1967).
      Ide dari clustering pertama kali ditemukan oleh Lloyd pada tahun 1957,
      namun hal tersebut baru dipublikasi pada tahun 1982. Pada tahun 1965,
      Forgey juga mempublikasi teknik yang sama sehingga terkadang dikenal sebagai Lloyd-Forgy pada beberapa sumber.</p>
    <p>Algoritma K-means pada aplikasi ini digunakan untuk menentukan jurusan siswa SMAN 1 Cisarua. Hasil akurasi yang didapat dari beberapa jurnal
      memiliki tingkat akurasi yang cukup tinggi dalam menentukan jurusan siswa dan diharapkan dapat memudahkan staf sekolah dalam melakukan penentuan jurusan SMA.</p>
  </section>
  <?php include("../kmeans-php-web/footer1.php"); ?>
</body>

</html>