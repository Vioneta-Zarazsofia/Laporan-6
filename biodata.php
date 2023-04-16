<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<h2>Input Biodata</h2>
	<form action="" method="post">
		<label for="nama">Nama:</label><br>
		<input type="text" id="nama" name="nama"><br><br>
		<label for="birthdate">Tanggal Lahir:</label><br>
		<input type="date" id="birthdate" name="birthdate" required><br><br>
		<label for="umur">Umur:</label><br>
		<input type="number" id="umur" name="umur"><br><br>
		<label for="hobby">Hobi:</label><br>
		<textarea id="hobby" name="hobby" rows="3" cols="30" required></textarea><br><br>
		<label for="alamat">Alamat:</label><br>
		<textarea id="alamat" name="alamat" rows="3" cols="30" required></textarea><br>
		<input type="submit" value="Simpan"><br>
	</form>
	<?php 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$nama = $_POST['nama'];
			$birthdate = $_POST['birthdate'];
			$umur = $_POST['umur'];
			$hobby = $_POST['hobby'];
			$alamat = $_POST['alamat'];

			echo "<h3>Biodata Anda :</h3>";
			echo "Nama: " . $nama . "<br>";
			echo "Tanggal Lahir: " . $birthdate ."<br>";
			echo "Umur: " . $umur . "<br>";
			echo "Hobi: " . $hobby . "<br>";
			echo "Alamat: " . $alamat . "<br>";
		}
	?>