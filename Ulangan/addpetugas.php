<html>
<head>
	<title>Add Petugas</title>
</head>
	<a href="Petugas.php">Go to Home</a>
	<br/><br/>
	
	<form action="addpetugas.php" method="post" name="forml">
		<table width="25%" border="0">
			<tr>
				<td>Kode_petugas</td>
				<td><input type="text" name="Kode_petugas"></td>
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
				<td>Posisi</td>
				<td><input type="text" name="Posisi"></td>
			</tr>
			<tr>
				<td>Jam_tugas</td>
				<td><input type="text" name="Jam_tugas"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php 
	
	if(isset($_POST['Submit'])){
		$Kode_petugas = $_POST['Kode_petugas'];
		$Nama = $_POST['Nama'];
		$Gender = $_POST['Gender'];
		$Posisi = $_POST['Posisi'];
		$Jam_tugas = $_POST['Jam_tugas'];
	
		include_once("config.php");
		
		$result = mysqli_query($mysqli, "INSERT INTO Petugas(Kode_petugas, Nama, Gender, Posisi, Jam_tugas) VALUES ('$Kode_petugas','$Nama','$Gender','$Posisi','$Jam_tugas')");
			echo "User added successfully. <a href='Petugas.php'>View Petugas</a>";
	}
	?>
</body>
</html>