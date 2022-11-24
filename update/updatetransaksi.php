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

$id = $_GET['idtransaksi'];

$query = "SELECT * From tb_transaksi WHERE idtransaksi='$id'";

$hasil = mysqli_query($koneksi, $query);

while ($data = mysqli_fetch_assoc($hasil)) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Transaksi</title>
    <style>
      .button {
        padding: 10px;
      }

      .float-child {
        width: 50%;
        float: left;
        padding: 20px;
        height: 75px;
      }

      div {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      }

      .coba {
        padding: 4px;
      }
    </style>
  </head>

  <body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <br>
    <center>
      <H2>UPDATE TABEL TRANSAKSI</H2>
    </center>
    <br>
    <table>
      <form action="../prosesupdate/proses_update_transaksi.php" method="post">
        <br>
        <div class="row justify-content-center">
          <div class="form-floating col-4">
            <br>
            <div class="coba">
              <label for="exampleFormControlInput1" class="form-label">ID Pelanggan :</label>
              <select name="idpelanggan" class="form-select" id="exampleFormControlInput1">
                <?php
                include('../koneksi.php');
                $query = "SELECT idpelanggan, namalengkap FROM tb_pelanggan";
                $hasil = mysqli_query($koneksi, $query);

                while ($row = mysqli_fetch_assoc($hasil)) {
                ?>
                  <option value="<?php echo $row['idpelanggan']; ?>"><?php echo $row['idpelanggan']; ?> | <?php echo $row['namalengkap']; ?></option>

                <?php
                }
                ?>

              </select>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="form-floating col-4">
            <div class="coba">
              <label for="exampleFormControlInput1" class="form-label">ID Transaksi :</label>
              <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['idtransaksi'] ?>" name="idtransaksi">
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="form-floating col-4">
            <div class="coba">
              <label for="exampleFormControlInput1" class="form-label">ID Karyawan :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Transaksi :</label>
            </div>
          </div>
        </div>
        </div>

        <div class="row justify-content-center">
        <div class="form-floating col-2">
          <select name="idkaryawan" class="form-select" id="exampleFormControlInput1">
                <?php
                include('../koneksi.php');
                $query = "SELECT idkaryawan, namakaryawan FROM tb_karyawan";
                $hasil = mysqli_query($koneksi, $query);

                while ($row = mysqli_fetch_assoc($hasil)) {
                ?>
                  <option value="<?php echo $row['idkaryawan']; ?>"><?php echo $row['idkaryawan']; ?> | <?php echo $row['namakaryawan']; ?></option>

                <?php
                }
                ?>

              </select>
          </div>
          <div class="form-floating col-2">
            <input type="date" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['tgltransaksi']; ?>" name="tgltransaksi">
          </div>
          <div class="form-floating col-10">
          </div>
        </div>
        </div>


        <div class="row justify-content-center">
          <div class="form-floating col-4">
            <div class="coba">
              <label for="exampleFormControlInput1" class="form-label">Kategori Pelanggan :</label>
              <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['kategoripelanggan']; ?>" name="kategoripelanggan">
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="form-floating col-4">
            <div class="coba">
              <label for="exampleFormControlInput1" class="form-label">Total Bayar:</label>
              <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['totalbayar']; ?>" name="totalbayar">
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="form-floating col-4">
            <div class="coba">
              <label for="exampleFormControlInput1" class="form-label">Bayar :</label>
              <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['bayar']; ?>" name="bayar">
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="form-floating col-4">
            <div class="coba">
              <label for="exampleFormControlInput1" class="form-label">Kembalian :</label>
              <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['kembali']; ?>" name="kembali">
            </div>
          </div>
        </div>
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

  </body>
<?php } ?>

  </html><?php } ?>