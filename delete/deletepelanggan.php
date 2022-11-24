<?php

include('../koneksi.php');

$id = $_GET['idpelanggan'];

$query = "DELETE FROM tb_pelanggan WHERE idpelanggan ='$id'";

$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal Menghapus Data Pelanggan " . mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Data Sudah Di Delete')
        document.location.href='../CoolAdmin-master/index_pelanggan.php';
        </script>
        ";
}