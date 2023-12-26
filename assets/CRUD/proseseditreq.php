<?php

require "koneksi.php";

// Menangani data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$domisili = $_POST['domisili'];
$waifu = $_POST['waifu'];
$source_waifu = $_POST['saus'];
$tipe = $_POST['tipe'];

echo $nama." ".$nomorid." ".$keluhan." ".$alasan;
$sql = "UPDATE requestwaifu SET nama='$nama', domisili='$domisili', waifu='$waifu', saus='$source_waifu', tipe='$tipe' WHERE id=$id";

$kueri = mysqli_query($koneksi,$sql);

header('location: lihatrequest.php');

?>
