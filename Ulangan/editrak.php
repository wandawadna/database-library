<?php
include_once("config.php");
if(isset($_POST['update'])){
	$Id_rak = $_POST['Id_rak'];
	$Nama_rak = $_POST['Nama_rak'];
	$Kode_buku = $_POST['Kode_buku'];
	
	$result = mysqli_query($mysqli, "UPDATE rak SET Id_rak = '$Id_rak',Nama_rak = '$Nama_rak', Kode_buku = '$Kode_buku' WHERE Id_rak = '$Id_rak'");
	
	header("Location: Rak.php");
}
?>
<?php
$Id_rak = $_GET['Id_rak'];
$result = mysqli_query($mysqli, "SELECT * FROM rak WHERE Id_rak = '$Id_rak'");

while($user_data = mysqli_fetch_array($result)){
	$Nama_rak = $user_data['Nama_rak'];
	$Kode_buku = $user_data['Kode_buku'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="Rak.php">Home</a>
	<br/><br/>
	
	<form name = "update_user" method = "post" action = "editrak.php">
		<table border = "0">
			<tr>
				<td>Nama_rak</td>
				<td><input type = "text" name="Nama_rak" value=<?php 
				echo $Nama_rak;?>></td>
			</tr>
			<tr>
				<td>Kode_buku</td>
				<td><input type = "text" name="Kode_buku" value=<?php 
					echo $Kode_buku;?>></td>
			</tr>
				<td><input type="hidden" name="Id_rak" value=<?php
					echo $_GET['Id_rak'];?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
		