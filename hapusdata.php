<?php
//koneksi ke database
include('../kmeans-php-web/koneksi.php');
?>

<?php

$koneksi->query("DELETE FROM data_siswa");

echo "<script>alert('Semua Data Terhapus');</script>";
echo "<script>location='data.php';</script>";

?>