<?php
//koneksi ke database
include('../kmeans-php-web/koneksi.php');
?>

<?php

$koneksi->query("DELETE FROM kriteria_jurusan WHERE id_kriteria='$_GET[id]'");

echo "<script>alert('Kriteria Terhapus');</script>";
echo "<script>location='kriteria.php';</script>";

?>