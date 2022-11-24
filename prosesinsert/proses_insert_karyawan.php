<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda Belum Login ');window.location.href='../Login_v4/login.php'</script>";
}

?>
<?php

$namakaryawan = $_POST['namakaryawan'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];


$query = "INSERT INTO tb_karyawan values('','$namakaryawan','$alamat','$telpon')";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data Obat " .mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('pesan berhasil di simpan')
        document.location.href='../CoolAdmin-master/index_karyawan.php';
        </script>
        ";
}