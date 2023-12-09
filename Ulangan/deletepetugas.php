<?php
include_once("config.php");
$Kode_petugas = $_GET['Kode_petugas'];
$result = mysqli_query($mysqli, "DELETE FROM petugas WHERE Kode_petugas='$Kode_petugas'");
header("Location:Petugas.php");
?>