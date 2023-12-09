<html>
<head>
	<title>Add Pengunjung</title>
</head>
	<a href="Pengunjung.php">Go to Home</a>
	<br/><br/>
	
	<form action="addpengunjung.php" method="post" name="forml">
		<table width="25%" border="0">
			<tr>
				<td>NIS</td>
				<td><input type="decimal" name="NIS"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="Gender"></td>
			</tr>
			<tr>
				<td>Tujuan</td>
				<td><input type="text" name="Tujuan"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="Kelas"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php 
	
	if(isset($_POST['Submit'])){
		$NIS = $_POST['NIS'];
		$Nama = $_POST['Nama'];
		$Gender = $_POST['Gender'];
		$Tujuan = $_POST['Tujuan'];
		$Kelas = $_POST['Kelas'];
	
		include_once("config.php");
		
		$result = mysqli_query($mysqli, "INSERT INTO Pengunjung(NIS, Nama, Gender, Tujuan, Kelas) VALUES ('$NIS','$Nama','$Gender','$Tujuan','$Kelas')");
			echo "User added successfully. <a href='Pengunjung.php'>View Petugas</a>";
	}
	?>
</body>
</html>