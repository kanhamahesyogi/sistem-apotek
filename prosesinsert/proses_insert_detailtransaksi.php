<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda Belum Login ');window.location.href='../Login_v4/login.php'</script>";
}

?>
<?php

$idtransaksi = $_POST['idtransaksi'];
$idobat = $_POST['idobat'];
$jumlah = $_POST['jumlah'];
$hargasatuan = $_POST['hargasatuan'];
$totalharga = $_POST['totalharga'];


$query = "INSERT INTO tb_detail_transaksi values('','$idtransaksi','$idobat','$jumlah','$hargasatuan','$totalharga')";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data Obat " .mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('pesan berhasil di simpan')
        document.location.href='../CoolAdmin-master/index_detail_transaksi.php';
        </script>
        ";
}