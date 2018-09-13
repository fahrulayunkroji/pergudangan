<!DOCTYPE html>
<html>
<head>
	<title>Toko</title>
</head>
<body>
	<h2>PERGUDANGAN</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambahpenerbit.php">Tambah Data Penerbit</a> / <a href="buku.php">Data Buku</a> / <a href="tambahbuku.php">Tambah Data Buku</a></p>
	
	<h3>Tambah Data Buku</h3>
	
	<form action="tambah-prosespenerbit.php" method="post">
		<table cellpadding="4" cellspacing="0">
			<tr>
				<td>ID PENERBIT</td>
				<td>:</td>
				<td><input type="text" name="id_penerbit" required></td>
			</tr>
			<tr>
				<td>Nama PENERBIT</td>
				<td>:</td>
				<td><input type="text" name="nm_penerbit" size="30" required></td>
			</tr>
			<tr>
				<td>Negara</td>
				<td>:</td>
				<td>
					<select name="negara" required>
						<option value="">Pilih Negara</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="United States">United States</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kota</td>
				<td>:</td>
				<td>
					<select name="kota" required>
						<option value="">Pilih Kota</option>
						<option value="London">London</option>
						<option value="New York">New York</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>