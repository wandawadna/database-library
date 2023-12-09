<?php
include_once("config.php");
	$Kode_petugas = $_GET['NIS'];
	$result = mysqli_query($mysqli, "DELETE FROM peminjaman WHERE NIS='$NIS'");
header("Location:Peminjaman.php");
?>