<?php
//koneksi ke database
include('../kmeans-php-web/koneksi.php');

if (!isset($_SESSION['admin'])) {
  echo "<script>alert('Anda harus login');</script>";
  echo "<script>location='login.php';</script>";
  header('location:login.php');
  exit();
}

$query = $koneksi->query("SELECT * FROM data_siswa");
$data = [];
$provinsi = [];
while ($row = $query->fetch_assoc()) {
  $data[] = $row;
  $provinsi[] = $row['nama_siswa'];
  //echo 'pre'; print_r ($data);
  //echo 'pre'; print_r ($provinsi);
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
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_hasiljurusan.xls");
?>

<body>
  <div class="container-proseskm">
    <?php
    include '../kmeans-php-web/kmeans.php';

    //start program

    //get data dari database
    $query = $koneksi->query("SELECT * FROM data_siswa");
    $data = [];
    //echo 'pre'; print_r ($data);

    //masukan data jumlah guru dan siswa ke array data
    while ($row = $query->fetch_assoc()) {
      $data[] = [$row['nilai'], $row['kode_jurusan']];
      //echo '<pre>'; print_r ($data);
    }
    $query = $koneksi->query("SELECT * FROM kriteria_jurusan");
    $centroid = [];

    while ($row = $query->fetch_assoc()) {
      $centroid[0][] = [
        $row['nilai_center'],
        $row['kode_jurusan']
      ];
      //echo '<pre>'; print_r ($centroid);
    }

    //jumlah cluster
    $cluster = count($centroid);
    //echo '<pre>'; print_r ($cluster);
    $variable_x = 'NILAI';
    //echo 'pre'; print_r ($variable_x);
    $variable_y = 'MINAT JURUSAN';
    //echo 'pre'; print_r ($variable_y);

    $hasil_iterasi = [];
    $hasil_cluster = [];

    $iterasi = 0;
    while (true) {
      $table_iterasi = [];
      //untuk setiap data ke i (x dan y)
      foreach ($data as $key => $value) {
        //untuk setiap table centroid pada iterasi ke i
        $table_iterasi[$key]['data'] = $value;
        foreach ($centroid[$iterasi] as $key_c => $value_c) {
          //hitung jarak euclidean 
          $table_iterasi[$key]['jarak_ke_centroid'][] = jarakEuclidean($value, $value_c);
        }
        //hitung jarak terdekat dan tentukan cluster nya
        $table_iterasi[$key]['jarak_terdekat'] = jarakTerdekat($table_iterasi[$key]['jarak_ke_centroid'], $centroid);
      }
      array_push($hasil_iterasi, $table_iterasi);
      $centroid[++$iterasi] = perbaruiCentroid($table_iterasi, $hasil_cluster);
      $lanjutkan = centroidBerubah($centroid, $iterasi);
      $boolval = boolval($lanjutkan) ? 'ya' : 'tidak';
      //echo 'proses iterasi ke-'.$iterasi.' : lanjutkan iterasi ? '.$boolval.'<br>';
      if (!$lanjutkan)
        break;
      //loop sampai setiap nilai centroid sama dengan nilai centroid sebelumnya
    }
    ?>
    <div class="page-header">
      <h1>Hasil Penjurusan</h1>
    </div>
    <?php
    foreach ($hasil_iterasi as $key => $value) { ?>
    <?php }
    ?>

    <table class="data">
      <thead>
        <tr>
          <th style="text-align: center">NO</th>
          <th style="text-align: center">NAMA SISWA</th>
          <th style="text-align: center"><?php echo $variable_x; ?></th>
          <th style="text-align: center">HASIL JURUSAN</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($value as $key_data => $value_data) { ?>
          <tr>
            <td style="text-align: center"><?php echo $key_data + 1; ?></td>
            <td style="text-align: center"><?php echo $provinsi[$key_data] ?></td>
            <td style="text-align: center"><?php echo $value_data['data'][0]; ?></td>
            <td style="text-align: center">P<?php echo $value_data['jarak_terdekat']['cluster']; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>