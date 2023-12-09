<?php
include_once("config.php");
if(isset($_POST['update'])){
	$Kode_buku = $_POST['Kode_buku'];
	$Nama_buku = $_POST['Nama_buku'];
	
	$result = mysqli_query($mysqli, "UPDATE buku SET Nama_buku = '$Nama_buku' WHERE Kode_buku = '$Kode_buku'");
	
	header("Location: Buku.php");
}
?>
<?php
$Kode_buku = $_GET['Kode_buku'];
$result = mysqli_query($mysqli, "SELECT * FROM buku WHERE Kode_buku = '$Kode_buku'");

while($user_data = mysqli_fetch_array($result)){
	$Nama_buku = $user_data['Nama_buku'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="Buku.php">Home</a>
	<br/><br/>
	
	<form name = "update_user" method = "post" action = "editbuku.php">
		<table border = "0">
			<tr>
				<td>Nama_buku</td>
				<td><input type = "text" name="Nama_buku" value=<?php echo $Nama_buku;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="Kode_buku" value=<?php
					echo $_GET['Kode_buku'];?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
		