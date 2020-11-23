<!DOCTYPE html>
<html>
<head>
	<title>Tugas No.2 Modul 6 | Neza Chania Putri</title>
</head>
<body>
	<center>
		<div class = "container">
		<div class="row">
			<h2>Harga Bet</h2>
			<td>Note : <i>Harga Bet dihitung berdasarkan jumlah karakter</i></td>
			<br><br>
				<form action="" method="get">
					<label for="nama">Masukan Karakter (Nama) : </label>
					<input type="text" id="nama" name="nama" required>
					<br><br>
					<label for="warna">Masukan Warna Font: </label>
					<select name="warna" id="warna" name="warna">
						<option value="">Pilih Warna</option>
						<option value="Hitam">Hitam</option>
						<option value="Hijau">Hijau</option>
						<option value="Biru">Biru</option>
					</select>
				</center>
				</form>
					<br><br>
					<center><button type="submit" name="submit">Cek Total Harga</button></center>
	</form>
	
	<br>

	<?php

		function tampil($nama,$warna){

			$count=strlen($nama);
			$sum=0;


			if($count<=10 && $count>=1){
				for($i=1;$i<=$count;$i++){
					$sum=$sum+300;
				}

				if ($warna=="hitam" || $warna=="Hitam"){
					echo "<font style='color: black;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if ($warna=="hijau" || $warna=="Hijau"){
					echo "<font style='color: green;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if ($warna=="biru" || $warna=="Biru"){
					echo "<font style='color: blue;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if ($warna==""){
					echo "<font style='color: red;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

			}

			else if ($count>=11 && $count<=20){
				for($i=1;$i<=$count;$i++){
					$sum=$sum+500;
				}

				if($warna=="hitam" || $warna=="Hitam"){
					echo "<font style='color: black;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if($warna=="hijau" || $warna=="Hijau"){
					echo "<font style='color: green;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if($warna=="biru" || $warna=="Biru"){
					echo "<font style='color: blue;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if($warna=="") {
					echo "<font style='color: red;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}
			}

			else if ($count<=20){
				for($i=1;$i<=$count;$i++){
					$sum=$sum+700;
				}

				if ($warna=="hitam" || $warna=="Hitam"){
					echo "<font style='color: black;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if ($warna=="hijau" || $warna=="Hijau"){
					echo "<font style='color: green;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if ($warna=="biru" || $warna=="Biru"){
					echo "<font style='color: blue;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

				else if ($warna=="") {
					echo "<font style='color: red;'> Nama : $nama <br> Harga total Rp.$sum <br></font>";
				}

			}
		}
		if (isset($_GET["submit"])){
			tampil($_GET["nama"],$_GET["warna"]);
		}
	?>
</body>
</html>