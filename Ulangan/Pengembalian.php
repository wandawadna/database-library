<?php 
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM pengembalian ORDER BY NIS ASC");
?>

<html>
<head>
	<title>Daftar Pengembalian Buku</title>
</head>

<body>
<a href = "Peminjaman.php">Pengembalian Buku</a><br/><br/>

	<table width = '65%' border=1>
	
	<tr>
		<th>NIS</th>
		<th>Kode_buku</th>
		<th>Nama</th>
		<th>Kode_petugas</th>
		<th>Tanggal_pinjam</th>
		<th>Tanggal_kembali</th>
		<th>Keterlambatan</th>
		<th>Denda</th>
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['NIS']."</td>";
		echo "<td>".$user_data['Kode_buku']."</td>";
		echo "<td>".$user_data['Nama']."</td>";
		echo "<td>".$user_data['Kode_petugas']."</td>";
		echo "<td>".$user_data['Tanggal_pinjam']."</td>";
		echo "<td>".$user_data['Tanggal_kembali']."</td>";
		echo "<td>".$user_data['Keterlambatan']."</td>";
		echo "<td>".$user_data['Denda']."</td>";
		echo "<td><a 
href='addpengembalian.php?NIS=$user_data[NIS]'>Add</a> | <a
href='editpengembalian.php?NIS=$user_data[NIS]'>Edit</a> | <a
href='deletepengembalian.php?NIS=$user_data[NIS]'>Delete</a></td></tr>";
	}
	?>
	</table>
</body>
</html>
		