<html>
<head>
	<title>Tambahkan Daftar Pengembalian Buku</title>
</head>
	<a href="Peminjaman.php">Go to Home</a>
	<br/><br/>
	
	<form action="addpengembalian.php" method="post" name="forml">
		<table width="25%" border="0">
			<tr>
				<td>NIS</td>
				<td><input type="text" name="NIS"></td>
			</tr>
			<tr>
				<td>Kode_buku</td>
				<td><input type="text" name="Kode_buku"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>Kode_petugas</td>
				<td><input type="decimal" name="Kode_petugas"></td>
			</tr>
			<tr>
				<td>Tanggal_pinjam</td>
				<td><input type="text" name="Tanggal_pinjam"></td>
			</tr>
			<tr>
				<td>Tanggal_kembali</td>
				<td><input type="text" name="Tanggal_kembali"></td>
			</tr>
			<tr>
				<td>Keterlambatan</td>
				<td><input type="text" name="Keterlambatan"></td>
			</tr>
			<tr>
				<td>Denda</td>
				<td><input type="text" name="Denda"></td>
			</tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php 
	
	if(isset($_POST['Submit'])){
		$Nama = $_POST['Nama'];
		$NIS = $_POST['NIS'];
		$Kode_buku = $_POST['Kode_buku'];
		$Kode_petugas = $_POST['Kode_petugas'];
		$Tanggal_pinjam = $_POST['Tanggal_pinjam'];
		$Tanggal_kembali = $_POST['Tanggal_kembali'];

		include_once("config.php");
		
		$result = mysqli_query($mysqli, "INSERT INTO rak(Nama, NIS, Kode_buku, Kode_petugas, Tanggal_pinjam, Tanggal_kembali) VALUES ('$Nama','$NIS','$Kode_buku','$Kode_petugas','$Tanggal_pinjam','$Tanggal_kembali')");
			echo "User added successfully. <a href='Peminjaman.php'>View Peminjaman</a>";
	}
	?>
</body>
</html>