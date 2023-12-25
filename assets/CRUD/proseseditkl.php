<?php

require "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$nomorid = $_POST['nomorid'];
$keluhan = $_POST['keluhan'];
$alasan = $_POST['alasan'];

echo $nama." ".$nomorid." ".$keluhan." ".$alasan;
$sql = "UPDATE keluhan SET nama='$nama', nomorid='$nomorid', keluhan='$keluhan', alasan='$alasan' WHERE idkeluhan=$id";

$kueri = mysqli_query($koneksi,$sql);

header('location: keluhkesah.php');

?>