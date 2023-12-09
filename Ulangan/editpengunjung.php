<?php
include_once("config.php");
if(isset($_POST['update'])){
	$NIS = $_POST['NIS'];
	$Nama = $_POST['Nama'];
	$Gender = $_POST['Gender'];
	$Tujuan = $_POST['Tujuan'];
	$Kelas = $_POST['Kelas'];
	
	$result = mysqli_query($mysqli, "UPDATE pengunjung SET Nama = '$Nama',Gender = '$Gender', Tujuan = '$Tujuan',Kelas = '$Kelas' WHERE NIS = '$NIS'");
	
	header("Location: Pengunjung.php");
}
?>
<?php
$NIS = $_GET['NIS'];
$result = mysqli_query($mysqli, "SELECT * FROM pengunjung WHERE NIS = '$NIS'");

while($user_data = mysqli_fetch_array($result)){
	$Nama = $user_data['Nama'];
	$Gender = $user_data['Gender'];
	$Tujuan = $user_data['Tujuan'];
	$Kelas = $user_data['Kelas'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="Pengunjung.php">Home</a>
	<br/><br/>
	
	<form name = "update_user" method = "post" action = "editpengunjung.php">
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
				<td>Tujuan</td>
				<td><input type="text" name="Tujuan" value=<?php 
					echo $Tujuan;?>></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="Kelas" value=<?php
					echo $Kelas;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="NIS" value=<?php
					echo $_GET['NIS'];?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
		