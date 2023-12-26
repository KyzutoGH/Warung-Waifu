<?php
// Mengambil koneksi ke database
include "koneksi.php";

// Menangani data yang dikirim dari form
$nama = $_POST['nama'];
$domisili = $_POST['domisili'];
$waifu = $_POST['waifu'];
$source_waifu = $_POST['saus'];
$tipe = $_POST['tipe'];

// Menyimpan data ke database
$sql = "INSERT INTO requestwaifu (nama, domisili, waifu, saus, tipe) 
        VALUES ('$nama', '$domisili', '$waifu', '$source_waifu', '$tipe')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan ke database.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
