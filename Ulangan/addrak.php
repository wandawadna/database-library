<html>
<head>
	<title>Tambahkan Rak Buku</title>
</head>
	<a href="Rak.php">Go to Home</a>
	<br/><br/>
	
	<form action="addrak.php" method="post" name="forml">
		<table width="25%" border="0">
			<tr>
				<td>Id_rak</td>
				<td><input type="decimal" name="Id_rak"></td>
			</tr>
			<tr>
				<td>Nama_rak</td>
				<td><input type="text" name="Nama Rak"></td>
			</tr>
			<tr>
				<td>Kode_buku</td>
				<td><input type="decimal" name="Kode_buku"></td>
			</tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php 
	
	if(isset($_POST['Submit'])){
		$Id_rak = $_POST['Id_rak'];
		$Nama_rak = $_POST['Nama_rak'];
		$Kode_buku = $_POST['Kode_buku'];

		include_once("config.php");
		
		$result = mysqli_query($mysqli, "INSERT INTO rak(Id_rak, Nama_rak, Kode_buku) VALUES ('$Id_rak','$Nama_rak','$Kode_buku')");
			echo "User added successfully. <a href='Rak.php'>View Buku</a>";
	}
	?>
</body>
</html>