<?php
    include "config.php";
    $nim = $_GET['nim'];
    $sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";
    $hasil = mysqli_query($config, $sql);
?>
<br>Data terhapus.Kembali ke <a href="halamanuser.php"> halaman user</a>
