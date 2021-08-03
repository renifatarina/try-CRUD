<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Mahasiswa</title>
</head>
<body align="center">
	<h3>Data Mahasiswa</h3>
 	<p>[<a href="mhs_tambah.php"> Tambah user </a>]</p>
 	<table width="720" border="1" cellpadding="5" cellspacing="0" align="center">
		<tr>
			<th width="30"> No. </th>
			<th width="30"> NIM </th>
			<th width="50"> Nama Lengkap </th>
			<th width="100"> Alamat </th>
			<th width="30"> Nomor HP</th>
			<th width="75"> Kelola</th>
		</tr>
		<?php
			include "config.php";
			$sql = "SELECT nim, nama, alamat, no_hp FROM mahasiswa ORDER BY nim";
			$hasil = mysqli_query($config, $sql);
			$no = 1;
			while ($data = mysqli_fetch_array($hasil))
			{
		?>
		<tr>
			<td align="center"><?php echo $no ; ?></td>
			<td align="center"><?php echo $data['nim'] ; ?></td>
			<td><?php echo $data['nama'] ; ?></td>
			<td><?php echo $data['alamat'] ; ?></td>
			<td align="center"><?php echo $data['no_hp'] ; ?></td>
			<td align="center">
				<a href="mhs_edit.php?nim=<?php echo $data['nim'];?>">Edit</a> 
				<a href="mhs_hapus.php?nim=<?php echo $data['nim'];?>">Hapus</a>
			</td>
		</tr>
	<?php
		$no++;
		}
	echo "</table>";
	?>
</body>
</html>