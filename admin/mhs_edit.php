<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Ubah Data</title>
</head>
<body>
	<?php 
		include "config.php";
		$nim = $_GET['nim'];
		$sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
		$hasil = mysqli_query($config, $sql);
		$data = mysqli_fetch_assoc($hasil);
	?>

	<h3>Ubah Data Mahasiswa</h3>
	<form method="POST" action="mhs_edit_action.php">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>
				<input type="text" value="<?php echo $data['nim']?>"disabled>
			 	<input type="text" name="nim" value="<?php echo$data['nim']?>" hidden>
 				</td>
 			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td> : </td>
				<td>
				<input type="text" name="namalengkap" value="<?php echo $data['nama']?>">
				</td>
			</tr>
				<td>Nomor HP</td>
				<td> : </td>
				<td>
				<input type="text" name="no_hp" value="<?php echo $data['no_hp']?>">
				</td>
			</tr>
			<tr>
				<input type="text" name="alamat" value="<?php echo$data['alamat']?>" hidden>
			</tr>
			<tr>
				<td colspan=2>
				<input type="submit" name="ubah" value="Simpan">
				<input type="reset" value="Batal">
				</td>
			</tr>
		</table>
	</form>



</body>
</html>