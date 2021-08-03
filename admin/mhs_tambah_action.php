<?php 
	include "config.php";

	$nim = $_POST['nim'];
	$nama = $_POST['namalengkap'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['hp'];

	$sql = "INSERT INTO mahasiswa (nim, nama, alamat, no_hp) VALUES ('$nim', '$nama', '$alamat', '$no_hp');";

	$hasil = mysqli_query($config, $sql);

	if ($hasil) {
		echo "Data mahasiswa berhasil ditambahkan.";
	} else {
		echo "Data mahasiswa gagal ditambahkan. Silakan ulangi.";
	}
?>