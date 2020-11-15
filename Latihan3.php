<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 - Neza Chania Putri</title>
</head>

<body>
	<?php

	echo "Bilangan Prima dari 1-50 : <br><br>";
	for ($x = 1; $x <=50; $x++) {
		$a = 0;
		for ($y = 1; $y <= $x; $y++) {
			if ($x % $y == 0) {
				$a++;
			}
		}
		if ($a == 2) {
			echo $x . " ";
		}
	}
	?>
</body>
</html>