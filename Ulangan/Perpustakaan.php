<?php 
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM perpustakaan ORDER BY NPSN ASC");
?>

<html>
<head>
	<title>Sekolah</title>
</head>

<body>
<a href = "Petugas.php">Petugas Perpustakaan</a><br/><br/>

	<table width = '30%' border=2>
	
	<tr>
		<th>Nama Sekolah</th>
		<th>Alamat Sekolah</th>
		<th>NPSN</th>
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['Nama_sekolah']."</td>";
		echo "<td>".$user_data['Alamat_sekolah']."</td>";
		echo "<td>".$user_data['NPSN']."</td>";
		echo "</td></tr>";
	}
	?>
	</table>
</body>
</html>
		