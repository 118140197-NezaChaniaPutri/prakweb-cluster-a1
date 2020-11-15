<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 - Neza Chania Putri</title>
</head>

<body>
	<?php
	$nama = array("lanirne", "aduh", "qifuat", "toda", "anevi" , "samid", "kifuat", "kafuh", "dato", "dimas");

	echo "Sebelum diurutkan : <br>";
	$n = 0;
	foreach ($nama as $value) {
		echo "$n. $value <br>";
		$n++;
	}

	echo "<br>Setelah diurutkan dari A-Z : <br>";
	sort($nama);
	$n = 0;
	foreach ($nama as $value) {
		echo "$n. $value <br>";
		$n++;
	}

	echo "<br>Setelah diurutkan dari Z-A : <br>";
	rsort($nama);
	$n = 0;
	foreach ($nama as $value) {
		echo "$n. $value <br>";
		$n++;
	} 
	?>
</body>
</html>