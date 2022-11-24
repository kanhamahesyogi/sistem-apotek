<?php

include "koneksi.php";

session_start();
if(!isset($_SESSION['username'])){
    echo"<script>alert('anda belum login');location.href='login.php'</script>";
}

$username = $_POST['Username'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);
$leveluser = $_POST['leveluser'];
$idkaryawan = $_POST['idkaryawan'];

$query = "INSERT INTO tb_login VALUE ('$username', '$password', '$leveluser', '$idkaryawan')";
$result = mysqli_query($koneksi, $query);

if(isset ($_POST ['Username']) AND isset($_POST['password'])){
    echo "<script>
    alert('Anda Berhasil Registrasi, Silahkan login dengan akun yang sudah terdaftar ');
    location.href='../index_karyawan.php';
    </script>";
} else {
    echo "<script>
    alert('Register failed!');
    location.href='index.php';
    </script>";
}