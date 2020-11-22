<!DOCTYPE html>
<html>
<head>
	<title>Tugas No.1 Modul 6 | Neza Chania Putri</title>
</head>
<body>
	<?php
	$jumlah = 1;
	$angka = $_POST["bil1"];

		if ($_POST["hitung"]) {
			for($bil1=1;$bil1<=$angka;$bil1++)
			{
				$jumlah=$jumlah*$bil1;
			}
			echo "<b>Faktorial dari $angka adalah $jumlah</b>";?>
			<br/><br/>
			<?php
		}
		else
		{
		?>
		<h1> Menghitung Nilai Faktorial dari Suatu Bilangan</h1>
			<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
			<b>Masukkan Angka</b>
			<input type="text" name="bil1">
			<input type="submit" value="Hitung" name="hitung">
		</form>
	<?php
}
?>
</body>
</html>