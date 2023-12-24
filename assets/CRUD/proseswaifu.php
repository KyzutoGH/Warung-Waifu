<?php
// Mengambil koneksi ke database
include "koneksi.php";

// Menangani data yang dikirim dari form
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$domisili = mysqli_real_escape_string($koneksi, $_POST['domisili']);
$waifu = mysqli_real_escape_string($koneksi, $_POST['waifu']);
$source_waifu = mysqli_real_escape_string($koneksi, $_POST['saus']);
$tipe = mysqli_real_escape_string($koneksi, $_POST['tipe']);

// Menyimpan data ke database
$sql = "INSERT INTO requestwaifu (nama, domisili, waifu, saus, tipe, gambar) 
        VALUES ('$nama', '$domisili', '$waifu', '$source_waifu', '$tipe', '$gambar_path')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan ke database.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
