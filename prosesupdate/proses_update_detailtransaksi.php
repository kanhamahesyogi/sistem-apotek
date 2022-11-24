<?php

$iddetailtransaksi = $_POST['iddetailtransaksi'];
$idtransaksi = $_POST['idtransaksi'];
$idobat = $_POST['idobat'];
$jumlah = $_POST['jumlah'];
$hargasatuan = $_POST['hargasatuan'];
$totalharga = $_POST['totalharga'];

$query = "UPDATE tb_detail_transaksi SET 
idtransaksi='$idtransaksi',idobat='$idobat',jumlah='$jumlah',hargasatuan='$hargasatuan' ,totalharga='$totalharga'  WHERE iddetailtransaksi='$iddetailtransaksi'";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data karyawan " .mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Berhasil diupdate')
        document.location.href='../CoolAdmin-master/index_detail_transaksi.php';
        </script>
        ";
}