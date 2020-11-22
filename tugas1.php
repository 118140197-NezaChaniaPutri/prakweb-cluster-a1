<!DOCTYPE html>
<html>
<head>
	<title>Tugas No.1 Modul 6 | Neza Chania Putri</title>
</head>
<body>
		<h1> Menghitung Nilai Faktorial dari Suatu Bilangan</h1>

		<form action="" method="get">
				
			<label for="input">Masukkan Angka :</label>
			<input type="number" id="input" name="angka">
			<button type="submit" name="submit">Hitung</button>
		</form><br>
	</body>
</html>

	<?php

	function faktorial($n){

	$ftr = 1;
	echo "$n! = ";

			for($i=$n;$i>0;$i--)
			{
				if ($i==1) {
					echo "$i";
				}

				else {
					echo "$i * ";
				}

				$ftr=$ftr*$i;
			}

			echo " = $ftr";
		}

		if (isset($_GET["submit"])) {
				faktorial($_GET["angka"]);
		}
	
	?>
