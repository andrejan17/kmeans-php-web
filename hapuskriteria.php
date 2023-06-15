<?php
//koneksi ke database
include('../kmeans-php-web/koneksi.php');
?>

<?php

$koneksi->query("DELETE FROM kriteria_jurusan");

echo "<script>alert('Semua Kriteria Terhapus');</script>";
echo "<script>location='kriteria.php';</script>";

?>