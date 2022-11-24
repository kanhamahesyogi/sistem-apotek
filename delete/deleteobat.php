<?php

include('../koneksi.php');

$id = $_GET['idobat'];

$query = "DELETE FROM tb_obat WHERE idobat ='$id'";

$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal Menghapus data Obat " . mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Data DIdelete')
        document.location.href='../CoolAdmin-master/index_obat.php';
        </script>
        ";
}