<?php
//koneksi ke database
include('../kmeans-php-web/koneksi.php');

$query = $koneksi->query("SELECT * FROM data_siswa");
$data = [];
$provinsi = [];
while ($row = $query->fetch_assoc()) {
    $data[] = $row;
    $provinsi[] = $row['nama_siswa'];
    //echo 'pre'; print_r ($data);
    //echo 'pre'; print_r ($provinsi);
}

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

<!-- CSS -->
<style type="text/css">
    table {
        background: #fff;
        padding: 5px;
        width: 100%;
        border-spacing: 0;
        border-collapse: collapse;
        border: 1px solid black;

    }

    table th {
        padding: 6px;
        border: 1px solid black;
    }

    table td {
        padding: 6px;
        border: 1px solid black;
    }

    tr,
    td {
        vertical-align: top !important;
    }

    #right {
        border-right: none !important;
    }

    #left {
        border-left: none !important;
    }

    .isi {
        height: 300px !important;
    }

    .disp {
        text-align: center;
        padding: 1.5rem 0;
        margin-bottom: .5rem;
    }

    .logodisp {
        float: left;
        position: relative;
        width: 110px;
        height: 110px;
        margin: 0 0 0 1rem;
    }

    #lead {
        width: auto;
        position: relative;
        margin: 25px 0 0 75%;
    }

    .head h2 {
        text-align: center;
        text-decoration: underline;
    }

    .head h4 {
        text-align: left;
        margin-bottom: -5px;
    }

    .head1 {
        margin-bottom: -10px;
        font-weight: bold;
    }

    .lead {
        font-weight: bold;
        text-decoration: underline;
        margin-bottom: -10px;
    }

    .lead1 {
        margin-bottom: -10px;
    }

    .tgh {
        text-align: center;
    }

    #nama {
        font-size: 2.1rem;
        margin-bottom: -1rem;
    }

    #alamat {
        font-size: 16px;
    }

    .up {
        text-transform: uppercase;
        margin: 0;
        line-height: 2.2rem;
        font-size: 1.5rem;
    }

    .status {
        margin-top: 0;
        font-size: 1.5rem;
        margin-bottom: .5rem;
    }

    #lbr {
        font-size: 20px;
        font-weight: bold;
    }

    .separator {
        border-bottom: 5px solid #616161;
        margin: -1.3rem 0 1.5rem;
    }

    .ttd {
        float: right;
        margin-top: 30px;
        margin-right: 30px;
    }

    .separator2 {
        border-bottom: 2px solid #616161;
        margin: -1rem 0 1rem;
        margin-top: 200px;
    }

    @media print {
        body {
            font-size: 12px;
            color: #212121;
        }

        nav {
            display: none;
        }

        table {
            background: #fff;
            padding: 5px;
            width: 100%;
            border-spacing: 0;
            border-collapse: collapse;
            border: 1px solid black;

        }

        table th {
            padding: 6px;
            border: 1px solid black;
        }

        table td {
            padding: 6px;
            border: 1px solid black;
        }

        #lbr {
            font-size: 20px;
        }

        .isi {
            height: 200px !important;
        }

        .tgh {
            text-align: center;
        }

        .disp {
            text-align: center;
            margin: -.5rem 0;
        }

        .logodisp {
            float: left;
            position: relative;
            width: 80px;
            height: 80px;
            margin: .5rem 0 0 .5rem;
        }

        #lead {
            width: auto;
            position: relative;
            margin: 15px 0 0 75%;
        }

        .lead {
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: -10px;
        }

        .lead1 {
            margin-bottom: -10px;
        }

        #nama {
            font-size: 25px !important;
            font-weight: bold;
            text-transform: uppercase;
            margin: -10px 0 -20px 0;
        }

        .up {
            text-transform: uppercase;
            margin: 0;
            line-height: 2.2rem;
            font-size: 1.5rem;
        }

        .status {
            margin-top: 0;
            font-size: 1.5rem;
            margin-bottom: .5rem;
        }

        #alamat {
            margin-top: -15px;
            font-size: 13px;
            margin-left: 82px;
        }

        #lbr {
            font-size: 17px;
            font-weight: bold;
        }

        .separator {
            border-bottom: 2px solid #616161;
            margin: -1rem 0 1rem;
        }

        .separator2 {
            border-bottom: 2px solid #616161;
            margin: -1rem 0 1rem;
            margin-top: 200px;
        }

        .ttd {
            float: right;
            margin-top: 30px;
            margin-right: 30px;
        }

    }
</style>

<body onload=window.print();>

    <?php
    foreach ($hasil_iterasi as $key => $value) { ?>
    <?php }
    ?>
    <!-- print privew -->
    <div class="row surat">
        <div class="disp hidd">
            <!-- kepala surat -->
            <img class="logodisp" src="./pic/logobogor.png" />
            <h6 class="up">PEMERINTAH DAERAH PROVINSI JAWA BARAT</h6>
            <h5 class="up" id="nama">DINAS PENDIDIKAN</h5><br />
            <h6 class="status">SMA NEGERI 1 CISARUA</h6>
            <span id="alamat">Jalan Adhijaksa Rt/Rw 002/002 Desa Leuwimalang Kec. Cisarua Kab. Bogor 16750 Telp. (0251) 8298378</span>
        </div>
        <div class="separator"></div>
        <div class="head">
            <h2>HASIL PENGUMUMAN JURUSAN SISWA KELAS X</h2>
            <h4>HARAP DIBACA :</h4>
            <p class="head1">1. Kode Jurusan P1 = IPA dan Kode Jurusan P2 = IPS.</p>
            <p style="font-weight: bold;">2. Untuk yang mendapatkan hasil jurusan IPA diperbolehkan untuk berpindah jurusan IPS dan melaporkannya ke Guru BK.</p>
        </div>
        <table class="bordered" id="tbl">
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
        <div id="lead">
            <p class="lead1">Cisarua, ...................................</p>
            <p>Kepala Sekolah</p>
            <div style="height: 50px;"></div>

            <p class="lead"></p>

            <p class="lead">Dra. Hj. Ai Nurhayati, M. Pd</p>

            <p>NIP. 196308131988032005</p>

        </div>
    </div>




</body>