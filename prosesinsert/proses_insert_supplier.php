<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda Belum Login ');window.location.href='../Login_v4/login.php'</script>";
}

?>
<?php

$perusahaan = $_POST['perusahaan'];
$keterangan = $_POST['keterangan'];


$query = "INSERT INTO tb_supplier values('','$perusahaan','$keterangan')";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan Data Supplier " . mysqli_query($koneksi,$query));
}

else{
    echo "<script>
        alert('pesan berhasil di simpan')
        document.location.href='../CoolAdmin-master/index_supplier.php';
        </script>
        ";
}