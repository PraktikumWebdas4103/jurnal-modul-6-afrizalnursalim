<!DOCTYPE html>
<title>form</title>
<body>
<center>
	
<form action="login.php" method="POST">
<h2>Form Registrasi Mahasiswa</h2>
<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" maxlength="35" required="Harus Diisi"></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim" maxlength="10" required="Harus Diisi"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td>
				<input type="radio" name="kelas" value="41-01">41-01<br>
				<input type="radio" name="kelas" value="41-02">41-02<br>
				<input type="radio" name="kelas" value="41-03">41-03<br>
				<input type="radio" name="kelas" value="41-04">41-04
			</td>
		</tr>
		<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td>
		<input type="radio" name="jeniskelamin" value="laki-laki">Laki-laki<br>
		<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
		</td>
		</tr>
		<tr>
		<td>Fakultas</td>
		<td>:</td>
		<td>
		<select name="fakultas" id="fakultas" required="Harus Diisi">
		<option value="-">-</option>
		<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
		<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
		<option value="Fakultas Komunikasi Dan Bisnis">Fakultas Komunikasi Dan Bisnis</option>
		<option value="Industri Kreatif">Fakultas Industri Kreatif</option>
		<option value="Rekayasa Industri">Rekayasa Industri</option>
		<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonimi dan Bisnis</option>
		</td>
		</select>
		</tr>
		<tr>
		<td>Hobi</td>
		<td>:</td>
		<td>
		<input type="checkbox" name="hobi[]" value="Bersepeda">Bersepeda<br>
		<input type="checkbox" name="hobi[]" value="Berenang">Berenang<br>
		<input type="checkbox" name="hobi[]" value="Membaca">Membaca
		</td>
		<td>
		<input type="checkbox" name="hobi[]" value="Makan">Makan<br>
		<input type="checkbox" name="hobi[]" value="Bermain Game">Bermain Game<br>
		<input type="checkbox" name="hobi[]" value="Tidur">Tidur<br>
		</select>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" rows="5" cols="40" required="Harus Diisi"></textarea></td>
		</tr>
		<tr>
		<center>
		<td><input type="submit" name="submit" value="Submit">
		<input type="reset" name="submit" value="Reset"></td>
		</center>
		</tr>
</center>
</body>
</html>

<?php
if(ISSET($_POST['submit'])){
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$kelas = $_POST['kelas'];
	$jk = $_POST['jeniskelamin'];
	$fks = $_POST['fakultas'];
	$hobi = implode(",", $_POST['hobi']);
	$alamat = $_POST['alamat'];

	$error = array();
	if(strlen($_POST['nama']) >= 35){
		$error['nama']== "Harus 35 Karakter";
	}
	if(strlen($_POST['nim']) >= 10){
		$error['nim']== "Harus 10 Karakter";
	}
	if(empty($kelas)){
   $error['kelas']=="Kelas harus diisi";
	}
	if(empty($jk)){
  	 $error['jeniskelamin']=="Jenis Kelamin harus diisi";
  	}
  	if(empty($fks)){
   $error['fakultas']=="Fakultas harus diisi";
  	}
  	if(empty($hobi)){
   $error['hobi']=="Hobi harus diisi";
	}
	if(empty($alamat)){
   $error['alamat']=="Alamat harus diisi";
	}

}