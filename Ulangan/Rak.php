<?php 
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM rak ORDER BY Id_rak ASC");
?>

<html>
<head>
	<title>Rak Buku Perpustakaan</title>
</head>

<body>
<a href = "Buku.php">Daftar Buku</a><br/><br/>

	<table width = '60%' border=1>
	
	<tr>
		<th>Id_rak</th>
		<th>Nama_rak</th>
		<th>Kode_buku</th>
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['Id_rak']."</td>";
		echo "<td>".$user_data['Nama_rak']."</td>";
		echo "<td>".$user_data['Kode_buku']."</td>";
		echo "<td><a 
href='addrak.php?NIS=$user_data[Id_rak]'>Add</a> | <a
href='editrak.php?NIS=$user_data[Id_rak]'>Edit</a> | <a
href='deleterak.php?NIS=$user_data[Id_rak]'>Delete</a></td></tr>";
}
	?>
	</table>
</body>
</html>
		