<?php
    include "config.php";

    $nim = $_POST['nim'];
    $nama = $_POST['namalengkap'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $sql = "UPDATE mahasiswa
            SET nama = '$nama',
                alamat = '$alamat',
                no_hp = '$no_hp'
            WHERE nim = '$nim'";

    $hasil = mysqli_query($config, $sql);
    if($hasil)
    {
        echo "SUCCESS: Profil user berhasil diubah.";
    }
    else
    {
        echo "ERROR: Profil user gagal diubah. Ulangi lagi";
    }
?>

<br>Kembali ke <a href="halamanuser.php"> halaman user</a>