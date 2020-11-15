<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Neza Chania Putri</title>
</head>
<body>
    <?php
    $bilangan1 = 20;
    $bilangan2 = 5;

    echo "bilangan 1=" . $bilangan1 . "<br>";
    echo "bilangan 2=" . $bilangan2 . "<br>";
    echo "<br>Berikut merupakan hasil dari setiap operasi <br><br>"; 

    echo "PENJUMLAHAN <br>";
    echo "Operator : + <br>";
    $operator = $bilangan1 + $bilangan2;
    echo "Hasil : " . $operator . "<br>";

    echo "<br>PENGURANGAN <br>";
    echo "Operator : - <br>";
    $operator = $bilangan1 - $bilangan2;
    echo "Hasil : " . $operator . "<br>";

    echo "<br>PERKALIAN <br>";
    echo "Operator : * <br>";
    $operator = $bilangan1 * $bilangan2;
    echo "Hasil : " . $operator . "<br>";

    echo "<br>PEMBAGIAN <br>";
    echo "Operator : / <br>";
    $operator = $bilangan1 / $bilangan2;
    echo "Hasil : " . $operator . "<br>";

    echo "<br>MODULUS <br>";
    echo "Operator : % <br>";
    $operator = $bilangan1 % $bilangan2;
    echo "Hasil : " . $operator . "<br>";
    ?>
</body>
</html>