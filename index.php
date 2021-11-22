<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form CV</title>
	<link rel="shortcut icon" type="images" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="form-style.css">
</head>
<body>
	<main>
		<header>
			<span class="logo"><img src="images/logo.png" alt="logo"></span>
			<h1 class="textheader">Pembuatan CV</h1>
		</header>
		<hr class="ul">
		<section>
			<form method="post" action="simpandata.php"> <!--untuk action karena belum di ajarkan untuk bahasa php, maka form ini akan di lempar ke file cv.html di file tersebut adalah hasil dummy dari data informasi yg di ambil dari database-->
				<div class="content">
					<h2>Data Diri</h2>
					<div class="input-profil">
						<label>Nama Lengkap&nbsp;</label>
						<input type="text" name="nama"><br>
						<label>Tempat, Tanggal Lahir</label>
						<input type="text" name="tgl_lahir"><br>
						<label>Jenis Kelamin</label>
						<select name="jekel">
							<option value="male">Laki-Laki</option>
							<option value="female">Perempuan</option>
						</select>
						<br>
						<label>Agama</label>
						<select name="agama">
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Katholik">Katholik</option>
						</select>
						<br>
						<label>Kewarganegaraan</label>
						<input type="text" name="negara"><br>
						<label>Status</label>
						<select name="status">
							<option value="meried">Kawin</option>
							<option value="single">Belum Kawin</option>
						</select>
						<br>
						<label>Alamat Sekarang</label>
						<textarea name="alamat" placeholder="Masukkan Alamat Anda"></textarea>
						<br>
						<label>Telepon</label>
						<input type="text" name="telepon"><br>
						<label>Email</label>
						<input type="email" name="email">
					</div>
					<hr class="ul-body">
					<h2>Data Pendidikan</h2>
					<div class="input-edu">
						<label>SD</label>
						<input type="text" name="sd" placeholder="Masukkan Nama Sekolah"><br>
						<label>SMP</label>
						<input type="text" name="smp" placeholder="Masukkan Nama Sekolah"><br>
						<label>SMA</label>
						<input type="text" name="sma" placeholder="Masukkan Nama Sekolah"><br>
						<label>Kuliah</label>
						<input type="text" name="kuliah" placeholder="Masukkan Nama Kampus">
					</div>
					<hr class="ul-body">
					<h2>Kemampuan Diri</h2>
					<div class="input-skill">
						<textarea name="skill" placeholder="Masukkan Semua Kemampuan Anda"></textarea>
					</div>
					<hr class="ul-body">
					<h2>Pengalaman Kerja</h2>
					<div class="exp-job">
						<label>Tahun</label>
						<input type="month" name="tahun_kerja">
						<input type="text" name="kerja" placeholder="Masukkan Tempat Kerja dan Staff Kerja">
					</div>
					<div class="submit">
						<input type="submit" name="simpan">
					</div>
				</div>
			</form>
			
		</section>
	</main>
</body>
</html>