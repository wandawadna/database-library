<?php 
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM pengunjung ORDER BY NIS ASC");
?>

<html>
<head>
	<title>Pengunjung Perpustakaan</title>
</head>

<body>
<a href = "Peminjaman.php">Peminjaman Buku</a><br/><br/>
<a href = "Pengembalian.php">Pengembalian Buku</a><br/><br/>

	<table width = '60%' border=1>
	
	<tr>
		<th>NIS</th>
		<th>Nama</th>
		<th>Gender</th>
		<th>Tujuan</th>
		<th>Kelas</th>
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['NIS']."</td>";
		echo "<td>".$user_data['Nama']."</td>";
		echo "<td>".$user_data['Gender']."</td>";
		echo "<td>".$user_data['Tujuan']."</td>";
		echo "<td>".$user_data['Kelas']."</td>";
		echo "<td><a 
href='addpengunjung.php?NIS=$user_data[NIS]'>Add</a> | <a
href='editpengunjung.php?NIS=$user_data[NIS]'>Edit</a> | <a
href='deletepengunjung.php?NIS=$user_data[NIS]'>Delete</a></td></tr>";
	}
	?>
	</table>
</body>
</html>
		