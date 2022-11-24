<?php

$idpelanggan = $_POST ['idpelanggan'];
$idtransaksi = $_POST['idtransaksi'];
$idkaryawan = $_POST['idkaryawan'];
$tgltransaksi = $_POST['tgltransaksi'];
$kategoripelanggan = $_POST['kategoripelanggan'];
$totalbayar = $_POST['totalbayar'];
$bayar = $_POST['bayar'];
$kembali = $_POST['kembali'];

$query = "UPDATE tb_transaksi SET idtransaksi='$idtransaksi',
idpelanggan='$idpelanggan',idkaryawan='$idkaryawan',tgltransaksi='$tgltransaksi' ,kategoripelanggan='$kategoripelanggan',totalbayar='$totalbayar',bayar='$bayar',kembali='$kembali'WHERE idtransaksi='$idtransaksi'";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data karyawan " .mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Berhasil diupdate')
        document.location.href='../CoolAdmin-master/index_transaksi.php';
        </script>
        ";
}