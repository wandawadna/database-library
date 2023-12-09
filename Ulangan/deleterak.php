<?php
include_once("config.php");
	$Kode_buku= $_GET['Kode_buku'];
	$result = mysqli_query($mysqli, "DELETE FROM rak WHERE Kode_buku='$Kode_buku'");
header("Location:Rak.php");
?>