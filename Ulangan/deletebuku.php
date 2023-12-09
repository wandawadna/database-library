<?php
include_once("config.php");
	$Nama_buku = $_GET['Nama_buku'];
	$result = mysqli_query($mysqli, "DELETE FROM buku WHERE Nama_buku='$Nama_buku'");
header("Location:Buku.php");
?>