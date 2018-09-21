<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
</head>
<body>

	<?php 

	$con = mysqli_connect('localhost', 'root', '', 'praktikum5')

	 ?>


	<form method="POST">
		Nama <input type="text" name="nama" value=""><br>
		NIM <input type="text" name="nim" value=""><br>
		Gambar <input type="file" name="gambar" value=""><br>
		<input type="submit" name="submit" value="KIRIM"><br>
	</form>


	<?php 

	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$gambar = $_POST['gambar'];

		$masukan = ("insert into form_pendaftaran (Nama, NIM, Gambar) values ('$nama', '$nim', '$gambar')");
		$result =mysql_query($masukan);

	}
	if ($result) {
		echo "berhasil";
		}
		else {
			echo "gagal";
		}
/*
	if (isset($result=count($_POST['submit'])) 
		echo "$result";
	
	else
		echo "tidak berhasil";

	//if ($masukan = count($_POST['submit'])) 
	//	echo $masukan;	
*/
	 ?>
</body>
</html>