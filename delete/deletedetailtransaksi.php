<?php

include('../koneksi.php');

$id = $_GET['iddetailtransaksi'];

$query = "DELETE FROM tb_detail_transaksi WHERE iddetailtransaksi ='$id'";

$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal Menghapus data transaksi " . mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Data Sudah Di Delete')
        document.location.href='../CoolAdmin-master/index_detail_transaksi.php';
        </script>
        ";
}