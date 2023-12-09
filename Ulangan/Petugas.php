<?php 
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM petugas ORDER BY Kode_petugas ASC");
?>

<html>
<head>
	<title>Petugas Perpustakaan</title>
</head>

<body>
<a href = "pengunjung.php">Daftar Pengunjung</a><br/><br/>

	<table width = '60%' border=1>
	
	<tr>
		<th>Kode Petugas</th>
		<th>Nama</th>
		<th>Gender</th>
		<th>Posisi</th>
		<th>Jam Tugas</th>
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['Kode_petugas']."</td>";
		echo "<td>".$user_data['Nama']."</td>";
		echo "<td>".$user_data['Gender']."</td>";
		echo "<td>".$user_data['Posisi']."</td>";
		echo "<td>".$user_data['Jam_tugas']."</td>";
		echo "<td><a 
href='addpetugas.php?Kode_petugas=$user_data[Kode_petugas]'>Add</a> | <a
href='editpetugas.php?Kode_petugas=$user_data[Kode_petugas]'>Edit</a> | <a
href='deletepetugas.php?Kode_petugas=$user_data[Kode_petugas]'>Delete</a></td></tr>";
	}
	?>
	</table>
</body>
</html>
		