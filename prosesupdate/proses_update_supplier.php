<?php

$idsupplier = $_POST['idsupplier'];
$perusahaan = $_POST['perusahaan'];
$keterangan = $_POST['keterangan'];



$query = "UPDATE tb_supplier SET idsupplier='$idsupplier',perusahaan='$perusahaan',keterangan='$keterangan' WHERE idsupplier='$idsupplier'";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data Obat " .mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Berhasil diupdate')
        document.location.href='../CoolAdmin-master/index_supplier.php';
        </script>
        ";
}