<?php 
	$config = mysqli_connect("localhost", "root", "", "mahasiswapti");
	if (!$config) {
		die('Failedmconnecting to MySQLi : '.mysqli_connect_error());
	}
?>