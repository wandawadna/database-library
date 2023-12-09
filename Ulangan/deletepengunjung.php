<?php
include_once("config.php");
	$NIS = $_GET['NIS'];
	$result = mysqli_query($mysqli, "DELETE FROM pengunjung WHERE NIS='$NIS'");
header("Location:Pengunjung.php");
?>