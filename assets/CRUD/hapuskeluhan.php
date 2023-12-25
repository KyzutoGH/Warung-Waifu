<?php

require "koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM keluhan WHERE idkeluhan='$id'";

$kueri = mysqli_query($koneksi,$sql);

header('location: keluhkesah.php');

?>