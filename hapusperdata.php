<?php
//koneksi ke database
include('../kmeans-php-web/koneksi.php');
?>

<?php

$koneksi->query("DELETE FROM data_siswa WHERE id_data='$_GET[id]'");

echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='data.php';</script>";

?>