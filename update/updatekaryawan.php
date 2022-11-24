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

$id = $_GET['idkaryawan'];

$query = "SELECT * From tb_karyawan WHERE idkaryawan='$id'";

$hasil = mysqli_query($koneksi, $query);

while ($data = mysqli_fetch_assoc($hasil)) {



?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert obat</title>
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
        <center>
            <H2>UPDATE TABEL KARYAWAN</H2>
        </center>
        <br>

        <table>
            <form action="..\prosesupdate\proses_update_karyawan.php" method="post">
                <br>
                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                        
                            <input type="text" class="form-control" hidden id="exampleFormControlInput1" name="idkaryawan" value="<?php echo $data['idkaryawan']; ?>" >
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">Nama Karyawan :</label>
                            <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['namakaryawan']; ?>" name="namakaryawan">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">Alamat Karyawan :</label>
                            <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['alamat']; ?>" name="alamat">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">No Telpon Karyawan :</label>
                            <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['telpon']; ?>" name="telpon">
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
    </body>

    </html><?php } ?>