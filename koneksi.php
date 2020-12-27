<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbprak6");
if(!$koneksi){
    die("Gagal Terhubung :".mysqli_connect_error());
}
?>