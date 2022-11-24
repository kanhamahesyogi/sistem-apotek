<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda Belum Login ');window.location.href='../Login_v4/login.php'</script>";
}

?>
<?php

$idsupplier = $_POST['idsupplier'];
$namaobat = $_POST['namaobat'];
$kategoriobat = $_POST['kategoriobat'];
$hargajual = $_POST['hargajual'];
$hargabeli = $_POST['hargabeli'];
$stokobat = $_POST['stokobat'];
$keterangan = $_POST['keterangan'];


$query = "INSERT INTO tb_obat values('','$idsupplier','$namaobat','$kategoriobat','$hargajual','$hargabeli','$stokobat','$keterangan')";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data Obat " . mysqli_query($koneksi,$query));
}

else{
    echo "<script>
        alert('pesan berhasil di simpan')
        document.location.href='../CoolAdmin-master/index_obat.php';
        </script>
        ";
}