<?php
include_once("config.php");
if(isset($_POST['update'])){
	$Nama = $_POST['Nama'];
	$NIS = $_POST['NIS'];
	$Kode_buku = $_POST['Kode_buku'];
	$Kode_petugas = $_POST['Kode_petugas'];
	$Tanggal_pinjam= $_POST['Tanggal_pinjam'];
	$Tanggal_kembali = $_POST['Tanggal_kembali'];
	
	$result = mysqli_query($mysqli, "UPDATE peminjaman SET Nama = '$Nama',NIS = '$NIS', Kode_buku = '$Kode_buku',Kode_petugas= '$Kode_petugas', Tanggal_kembali = '$Tanggal_kembali', Tanggal_pinjam = '$Tanggal_pinjam' WHERE  NIS = '$NIS'");
	
	header("Location: Peminjaman.php");
}
?>
<?php
$NIS = $_GET['NIS'];
$result = mysqli_query($mysqli, "SELECT * FROM peminjaman WHERE NIS = '$NIS'");

while($user_data = mysqli_fetch_array($result)){
	$Nama = $user_data['Nama'];
	$NIS = $user_data['NIS'];
	$Kode_buku = $user_data['Kode_buku'];
	$Kode_petugas = $user_data['Kode_petugas'];
	$Tanggal_pinjam = $user_data['Tanggal_pinjam'];
	$Tanggal_kembali = $user_data['Tanggal_kembali'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="Pengembalian.php">Home</a>
	<br/><br/>
	
	<form name = "update_user" method = "post" action = "editpengembalian.php">
		<table border = "0">
			<tr>
				<td>Nama</td>
				<td><input type = "text" name="Nama" value=<?php 
				echo $Nama;?>></td>
			</tr>
			<tr>
				<td>Kode_buku</td>
				<td><input type = "text" name="Kode_buku" value=<?php 
					echo $Kode_buku;?>></td>
			</tr>
			<tr>
				<td>Kode_petugas</td>
				<td><input type="text" name="Kode_petugas" value=<?php 
					echo $Kode_petugas;?>></td>
			</tr>
			<tr>
				<td>Tanggal_pinjam</td>
				<td><input type="text" name="Tanggal_pinjam" value=<?php
					echo $Tanggal_pinjam;?>></td>
			</tr>
			<tr>
				<td>Tanggal_kembali</td>
				<td><input type="text" name="Tanggal_kembali" value=<?php
					echo $Tanggal_kembali;?>></td>
			</tr>
				<td><input type="hidden" name="NIS" value=<?php
					echo $_GET['NIS'];?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
		