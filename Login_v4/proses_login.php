<?php 
session_start();

include ('../koneksi.php');

$user = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tb_login WHERE username='$user'";
$hasil = mysqli_query($koneksi,$query);
$baris = mysqli_fetch_assoc(($hasil));
$cek_pass = password_verify($password, $baris['password']);



if($cek_pass > 0){
    
    
    $_SESSION['username'] = $user;
    $_SESSION['leveluser'] = $baris['leveluser'];
    $_SESSION['idkaryawan'] = $baris['idkaryawan'];
    header('location:..\CoolAdmin-master\dashboard.php');

} else {
    header("location:..\Login_v4\login.php?pesan=gagal");
}
?>