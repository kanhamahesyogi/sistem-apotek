<?php

$idobat = $_POST['idobat'];
$idsupplier = $_POST['idsupplier'];
$namaobat = $_POST['namaobat'];
$kategoriobat = $_POST['kategoriobat'];
$hargajual = $_POST['hargajual'];
$hargabeli = $_POST['hargabeli'];
$stokobat = $_POST['stokobat'];
$keterangan = $_POST['keterangan'];


$query = "UPDATE tb_obat set idobat='$idobat', idsupplier='$idsupplier', namaobat='$namaobat', kategoriobat='$kategoriobat', hargajual='$hargajual', hargabeli='$hargabeli', stokobat='$stokobat', keterangan='$keterangan' where idobat='$idobat'";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data Obat " .mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Berhasil diupdate')
        document.location.href='../CoolAdmin-master/index_obat.php';
        </script>
        ";
}