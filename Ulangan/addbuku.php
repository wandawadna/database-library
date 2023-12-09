<html>
<head>
	<title>Tambahkan Buku</title>
</head>
	<a href="Buku.php">Go to Home</a>
	<br/><br/>
	
	<form action="addbuku.php" method="post" name="forml">
		<table width="25%" border="0">
			<tr>
				<td>Kode_buku</td>
				<td><input type="decimal" name="Kode_buku"></td>
			</tr>
			<tr>
				<td>Nama_buku</td>
				<td><input type="text" name="Nama Buku"></td>
			</tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php 
	
	if(isset($_POST['Submit'])){
		$Kode_buku = $_POST['Kode_buku'];
		$Nama_buku = $_POST['Nama_buku'];

		include_once("config.php");
		
		$result = mysqli_query($mysqli, "INSERT INTO buku(Kode_buku, Nama_buku) VALUES ('$Kode_buku','$Nama_buku')");
			echo "User added successfully. <a href='Buku.php'>View Buku</a>";
	}
	?>
</body>
</html>