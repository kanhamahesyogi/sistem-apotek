<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda Belum Login ');window.location.href='../Login_v4/login.php'</script>";
}

?>
<?php
$kategoripelanggan = $_GET['kategoripelanggan'];
$idpelanggan = $_POST ['idpelanggan'];
$idtransaksi = $_POST['idtransaksi'];
$idkaryawan = $_POST['idkaryawan'];
$tgltransaksi = $_POST['tgltransaksi'];
$totalbayar = $_POST['totalbayar'];
$bayar = $_POST['bayar'];
$kembali = $_POST['kembali'];
$tgltransaksi date("Y-m-d") $_POST['$tgltransaksi'];

$query = "INSERT INTO tb_transaksi values('$kategoripelanggan','$idtransaksi','$idpelanggan','$idkaryawan','$tgltransaksi','$totalbayar','$bayar','$kembali')";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data Transaksi " .mysqli_query($koneksi,$query));
}

else{
    echo "<script>
        alert('pesan berhasil di simpan')
        document.location.href='../CoolAdmin-master/index_transaksi.php';
        </script>
        ";
}