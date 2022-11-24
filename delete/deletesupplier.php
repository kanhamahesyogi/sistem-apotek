<?php

include('../koneksi.php');

$id = $_GET['idsupplier'];

$query = "DELETE FROM tb_supplier WHERE idsupplier ='$id'";

$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal Menghapus data Obat " . mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Data Di Delete')
        document.location.href='../CoolAdmin-master/index_supplier.php';
        </script>
        ";
}