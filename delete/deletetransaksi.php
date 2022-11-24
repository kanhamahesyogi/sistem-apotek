<?php

include('../koneksi.php');

$id = $_GET['idtransaksi'];

$query = "DELETE FROM tb_transaksi WHERE idtransaksi ='$id'";

$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal Menghapus data Obat " . mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Data Sudah Di Delete')
        document.location.href='../CoolAdmin-master/index_transaksi.php';
        </script>
        ";
}