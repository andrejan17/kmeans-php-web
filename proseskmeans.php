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
  <link rel="stylesheet" type="text/css" media="screen" href="../kmeans-php-web//css/style2.css">
</head>

<body>

  <?php include("../kmeans-php-web/navbar.php"); ?>

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
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="page-content">
        <?php
        foreach ($hasil_iterasi as $key => $value) { ?>
          <div class="content-header">
            <div class="form-group">
              <h2>ITERASI KE <?php echo ($key + 1) ?></h2>
            </div>
          </div>

          <table class="kriteria">
            <h2 style="text-align: center">CENTROID</h2>
            <thead>
              <tr>
                <th width="20%">NO</th>
                <th width="60%"><?php echo $variable_x; ?></th>
                <th width="20%"><?php echo $variable_y; ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($centroid[$key] as $key_c => $value_c) { ?>
                <tr>
                  <td><?php echo ($key_c + 1); ?></td>
                  <td><?php echo number_format($value_c[0], 2); ?></td>
                  <td><?php echo number_format($value_c[1], 2); ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>

          <table>
            <h2 style="text-align: center">PERHITUNGAN</h2>
            <thead>
              <tr>
                <th>NO</th>
                <th>NAMA SISWA</th>
                <th><?php echo $variable_x; ?></th>
                <th><?php echo $variable_y; ?></th>
                <th>JARAK KE CENTROID 1</th>
                <th>JARAK KE CENTROID 2</th>
                <th>JARAK TERDEKAT</th>
                <th>HASIL JURUSAN</th>
              </tr>
              <tr>

              </tr>
            </thead>
            <tbody>
              <?php foreach ($value as $key_data => $value_data) { ?>
                <tr>
                  <td><?php echo $key_data + 1; ?></td>
                  <td><?php echo $provinsi[$key_data] ?></td>
                  <td><?php echo $value_data['data'][0]; ?></td>
                  <td><?php echo $value_data['data'][1]; ?></td>
                  <?php
                  foreach ($value_data['jarak_ke_centroid'] as $key_jc => $value_jc) { ?>
                    <td><?php echo number_format($value_jc, 2); ?></td>
                  <?php
                  }
                  ?>
                  <td><?php echo number_format($value_data['jarak_terdekat']['value'], 2); ?></td>
                  <td>P<?php echo $value_data['jarak_terdekat']['cluster']; ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="page-content">
      <div class="content-header">
        <div class="form-group">
          <button class="btn1 prs" onclick="openNav()"> Perhitungan</button>
        </div>
        <div class="form-group">
          <a href="cetak_hasil.php" target="_blank"><button class="btn1 prs">Cetak</button></a>
        </div>
        <div class="form-group">
          <a href="export_excel.php"><button class="btn1 prs">Export Excel</button></a>
        </div>
      </div>
      <table>
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
  </div>
  <?php include("../kmeans-php-web/footer1.php"); ?>

  <script>
    function openNav() {
      document.getElementById("myNav").style.display = "block";
    }

    function closeNav() {
      document.getElementById("myNav").style.display = "none";
    }
  </script>

</body>

</html>