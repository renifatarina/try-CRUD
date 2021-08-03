<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrasi Mahasiswa Baru</title>
</head>
<body>
	<h3>Menambah Data User</h3>
	<form method="POST" action="mhs_tambah_action.php">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="namalengkap"></td>
			</tr>
			<tr>
				<td>Alamat Tinggal</td>
				<td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td>:</td>
				<td><input type="text" name="hp"></td>
			</tr>
			<tr>
				<td colspan=2>
				<input type="submit" name="simpan" value="Simpan">
				<input type="reset" name="Batal">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>