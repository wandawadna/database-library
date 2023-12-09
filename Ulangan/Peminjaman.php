<?php 
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM peminjaman ORDER BY NIS ASC");
?>

<html>
<head>
	<title>Daftar Peminjaman Buku</title>
</head>

<body>
<a href = "Pengembalian.php">Pengembalian Buku</a><br/><br/>

	<table width = '60%' border=1>
	
	<tr>
		<th>Nama</th>
		<th>NIS</th>
		<th>Kode_buku</th>
		<th>Kode_petugas</th>
		<th>Tanggal_pinjam</th>
		<th>Tanggal_kembali</th>
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['Nama']."</td>";
		echo "<td>".$user_data['NIS']."</td>";
		echo "<td>".$user_data['Kode_buku']."</td>";
		echo "<td>".$user_data['Tanggal_pinjam']."</td>";
		echo "<td>".$user_data['Tanggal_kembali']."</td>";
		echo "<td><a 
href='addpeminjaman.php?NIS=$user_data[NIS]'>Add</a> | <a
href='editpeminjaman.php?NIS=$user_data[NIS]'>Edit</a> | <a
href='deletepeminjaman.php?NIS=$user_data[NIS]'>Delete</a></td></tr>";
	}
	?>
	</table>
</body>
</html>
		