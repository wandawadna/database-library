<?php
include_once("config.php");
if(isset($_POST['update'])){
	$Kode_petugas = $_POST['Kode_petugas'];
	$Nama = $_POST['Nama'];
	$Gender = $_POST['Gender'];
	$Posisi = $_POST['Posisi'];
	$Jam_tugas = $_POST['Jam_tugas'];
	
	$result = mysqli_query($mysqli, "UPDATE petugas SET Nama = '$Nama',Gender = '$Gender', Posisi = '$Posisi',Jam_tugas = '$Jam_tugas' WHERE  Kode_petugas = '$Kode_petugas'");
	
	header("Location: Petugas.php");
}
?>
<?php
$Kode_petugas = $_GET['Kode_petugas'];
$result = mysqli_query($mysqli, "SELECT * FROM petugas WHERE Kode_petugas = '$Kode_petugas'");

while($user_data = mysqli_fetch_array($result)){
	$Nama = $user_data['Nama'];
	$Gender = $user_data['Gender'];
	$Posisi = $user_data['Posisi'];
	$Jam_tugas = $user_data['Jam_tugas'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="Petugas.php">Home</a>
	<br/><br/>
	
	<form name = "update_user" method = "post" action = "editpetugas.php">
		<table border = "0">
			<tr>
				<td>Nama</td>
				<td><input type = "text" name="Nama" value=<?php 
				echo $Nama;?>></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type = "text" name="Gender" value=<?php 
					echo $Gender;?>></td>
			</tr>
			<tr>
				<td>Posisi</td>
				<td><input type="text" name="Posisi" value=<?php 
					echo $Posisi;?>></td>
			</tr>
			<tr>
				<td>Jam_tugas</td>
				<td><input type="text" name="Jam_tugas" value=<?php
					echo $Jam_tugas;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="Kode_petugas" value=<?php
					echo $_GET['Kode_petugas'];?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
		