<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda Belum Login ');window.location.href='../Login_v4/login.php'</script>";
}

?>
<?php
include ('../koneksi.php');

$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$usia = $_POST['usia'];
$buktifotoresep = $_FILES ['buktifotoresep']['name'];

if ($buktifotoresep !="") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $x                      = explode(".",$buktifotoresep);
    $ekstensi               = strtolower(end($x));
    $file_tmp               = $_FILES['buktifotoresep']['tmp_name'];
    $nama_gambar_baru       = $buktifotoresep;

        if(in_array($ekstensi,$ekstensi_diperbolehkan) === true){
            move_uploaded_file($file_tmp, '../simpanfoto/' .$nama_gambar_baru);
        
        $query = "INSERT INTO tb_pelanggan (namalengkap, alamat, telp, usia, buktifotoresep) VALUES ('$namalengkap','$alamat','$telp','$usia','$nama_gambar_baru')";

        $result = mysqli_query($koneksi, $query);

        if(!$result){
            die ("Data Gagal Dimasukan" .mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data Berhasil Ditambahkan.');window.location='../CoolAdmin-master/index_pelanggan.php';</script>";
        }
        
    }else {
            echo "<script>alert('Extensi gambar hanya boleh png, jpeg, jpg.');window.location='proses_insert_pelanggan.php';</script>";
        }
    } 
else{
    $query = "INSERT INTO tb_pelanggan (namalengkap, alamat, telp, usia, buktifotoresep) VALUES ('$namalengkap','$alamat','$telp','$usia','$nama_gambar_baru')";
    $result = mysqli_query($koneksi, $query);

    if(!$result){
        die ("Data Gagal Dimasukan" .mysqli_errno($koneksi)."-".mysqli_error($koneksi));
    }else {
        echo "<script>alert('Data Berhasil Ditambahkan.');window.location='../CoolAdmin-master/index_pelanggan.php';</script>";
}
}
?>