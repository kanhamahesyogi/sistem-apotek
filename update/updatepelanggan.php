<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda Belum Login ');window.location.href='../Login_v4/login.php'</script>";
}

elseif(@$_SESSION['leveluser'] == ('karyawan')){
    echo"<script>alert('Maaf tidak bisa mengakses karena Anda adalah Karyawan');location.href='../CoolAdmin-master/index_detail_transaksi.php'</script>";
  }


else{


?>
<?php

include('../koneksi.php');

$id = $_GET['idpelanggan'];

$query = "SELECT * From tb_pelanggan WHERE idpelanggan='$id'";

$hasil = mysqli_query($koneksi, $query);

while ($data = mysqli_fetch_assoc($hasil)) {



?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Pelanggan</title>
        <style>
            div {
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }

            .coba {
                padding: 4px;
            }

            .float-child {
                width: 50%;
                float: left;
                padding: 20px;
                height: 75px;

            }

            .button {
                padding: 10px;
            }
        </style>
    </head>

    <body>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <br>
<center><H2>UPDATE TABEL PELANGGAN</H2></center>
<br>

        <table>
            <form action="..\prosesupdate\proses_update_pelanggan.php" method="post" enctype="multipart/form-data">
                <tbody>
                    
                <br>
                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">ID Pelanggan:</label>
                            <input type="text" class="form-control" readonly id="exampleFormControlInput1" value="<?php echo $data['idpelanggan']; ?>" name="idpelanggan">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">Nama Pelanggan :</label>
                            <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['namalengkap']; ?>" name="namalengkap">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">Alamat Pelanggan :</label>
                            <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['alamat']; ?>" name="alamat">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">No Telpon Pelanggan :</label>
                            <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['telp']; ?>" name="telp">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">Usia Pelanggan :</label>
                            <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['usia']; ?>" name="usia">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                <div class="form-floating col-4">
                    <div class="coba">
                        <label for="exampleFormControlInput1" class="form-label">Bukti Foto Resep:</label>
                        
                        <input type="file" class="form-control" cols="2" id="exampleFormControlInput1" name="buktifotoresep" >
                    </div>
                </div>
            </div>

                <div class="row justify-content-center">
                    <div class="form-floating col-1">
                        <div class="button">
                            <button class="btn btn-outline-success">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </table>
    <?php } ?>
    </tbody>
    </body>

    </html><?php } ?>