<?php 
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM buku ORDER BY Kode_buku ASC");
?>

<html>
<head> 
	<title>Daftar Buku Perpustakaan</title>
</head>

<body>
<a href = "Rak.php">Daftar Rak Buku</a><br/><br/>

	<table width = '60%' border=1>
	
	<tr>
		<th>Kode_buku</th>
		<th>Nama_buku</th>
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['Kode_buku']."</td>";
		echo "<td>".$user_data['Nama_buku']."</td>";
		echo "<td><a 
href='addbuku.php?Kode_buku=$user_data[Kode_buku]'>Add</a> | <a
href='editbuku.php?Kode_buku=$user_data[Kode_buku]'>Edit</a> | <a
href='deletebuku.php?Kode_buku=$user_data[Kode_buku]'>Delete</a></td></tr>";
	}
	?>
	</table>
</body>
</html>
		