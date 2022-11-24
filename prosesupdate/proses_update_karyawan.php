<?php

$idkaryawan = $_POST['idkaryawan'];
$namakaryawan = $_POST['namakaryawan'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];


$query = "UPDATE tb_karyawan SET idkaryawan='$idkaryawan',
namakaryawan='$namakaryawan',alamat='$alamat',telpon='$telpon' WHERE idkaryawan='$idkaryawan'";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data karyawan " .mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Berhasil diupdate')
        document.location.href='../CoolAdmin-master/index_karyawan.php';
        </script>
        ";
}