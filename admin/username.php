<?php  
	include "config.php";

	$sql = "Select*from mahasiswa";
	$query = mysqli_query($config,$sql);
	$row = mysqli_fetch_assoc($query);

	echo "NIM 			:".$row['nim']."<br />";
	echo "Nama Lengkap  :".$row['nama']."<br />";
	echo "Alamat		:".$row['alamat']."<br />";
	echo "No Handphone	:".$row['no_hp']."<br />";
?>