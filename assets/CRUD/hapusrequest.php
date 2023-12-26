<?php

require "koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM requestwaifu WHERE id='$id'";

$kueri = mysqli_query($koneksi,$sql);

header('location: lihatrequest.php');

?>