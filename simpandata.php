<?
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jekel = $_POST['jekel'];
	$agama = $_POST['agama'];
	$negara = $_POST['negara'];
	$status = $_POST['status'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$email = $_POST['email'];
	$sd = $_POST['sd'];
	$smp = $_POST['smp'];
	$sma = $_POST['sma'];
	$kuliah = $_POST['kuliah'];
	$skill = $_POST['skill'];
	$tahun_kerja = $_POST['tahun_kerja'];
	$kerja = $_POST['kerja'];

	$simpan = mysqli_query($koneksi, "insert into data_cv values('$nama', '$tgl_lahir', '$jekel', '$agama', '$negara', '$status', '$alamat', '$telepon', '$email', '$sd', '$smp', '$sma', '$kuliah', '$skill', '$tahun_kerja', '$kerja')");
?>