<?php

require "koneksi.php";

$id = rand(0,9999);
$nama = $_POST['nama'];
$nomorid = $_POST['nomorid'];
$keluhan = $_POST['keluhan'];
$alasan = $_POST['alasan'];

echo $nama." ".$nomorid." ".$keluhan." ".$alasan;

$sql = "INSERT INTO keluhan VALUES ('$id','$nama','$nomorid','$keluhan','$alasan')";

$kueri = mysqli_query($koneksi,$sql);

header('location: ../../index.html');

?>