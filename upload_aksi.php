
<?php
// menghubungkan dengan koneksi
include('../kmeans-php-web/koneksi.php');
// menghubungkan dengan library excel reader
include('../kmeans-php-web/excel_reader2.php');
?>
 
<?php
// upload file xls
$target = basename($_FILES['filesiswa']['name']);
move_uploaded_file($_FILES['filesiswa']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filesiswa']['name'], 0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filesiswa']['name'], false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index = 0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i = 2; $i <= $jumlah_baris; $i++) {

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$nama_siswa     = $data->val($i, 1);
	$nilai   = $data->val($i, 2);
	$minat_jurusan  = $data->val($i, 3);
	$kode_jurusan  = $data->val($i, 4);

	if ($nama_siswa != "" && $nilai != "" && $minat_jurusan != "" && $kode_jurusan != "") {
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi, "INSERT into data_siswa values('','$nama_siswa','$nilai','$minat_jurusan','$kode_jurusan')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filesiswa']['name']);

// alihkan halaman ke index.php
header("location:data.php?berhasil=$berhasil");
?>