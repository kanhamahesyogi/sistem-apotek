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

$id = $_GET['iddetailtransaksi'];

$query = "SELECT * From tb_detail_transaksi WHERE iddetailtransaksi='$id'";

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
    .rcorners2 {
      border-radius: 25px;
      border: 2px solid #73AD21;
      padding: 500px;
      width: 200px;
      height: 150px;
    }

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
      padding: 1px;
    }
  </style>
</head>

<body>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
<br>
<center><H2>UPDATE TABEL DETAIL TRANSAKSI</H2></center>
<br>

  <table border="2" cellspacing="0" cellpadding="10;">
    <form action="../prosesupdate\proses_update_detailtransaksi.php" method="post">
      <tr>
        <div class="row justify-content-center">
          <div class="form-floating col-4">
            <br>
            <div class="coba">
              <label for="exampleFormControlInput1" class="form-label">ID Transaksi :</label>
              <select name="idtransaksi" class="form-select" id="exampleFormControlInput1">
                <?php
                include('../koneksi.php');
                $query = "SELECT idtransaksi, idtransaksi FROM tb_detail_transaksi";
                $hasil = mysqli_query($koneksi, $query);

                while ($row = mysqli_fetch_assoc($hasil)) {
                ?>
                  <option value="<?php echo $row['idtransaksi']; ?>"><?php echo $row['idtransaksi']; ?></option>

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
              <label for="exampleFormControlInput1" class="form-label">ID Detail Transaksi :</label>
              <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" readonly value="<?php echo $data['iddetailtransaksi']; ?>" name="iddetailtransaksi">
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="form-floating col-4">
            <div class="coba">
            <label for="exampleFormControlInput1" class="form-label">ID Obat :</label>
              <select name="idobat" class="form-select" id="exampleFormControlInput1">
                <?php
                include('../koneksi.php');
                $query = "SELECT idobat, idobat FROM tb_obat";
                $hasil = mysqli_query($koneksi, $query);

                while ($row = mysqli_fetch_assoc($hasil)) {
                ?>
                  <option value="<?php echo $row['idobat']; ?>"><?php echo $row['idobat']; ?></option>

                <?php
                }
                ?>

              </select>                </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="form-floating col-4">
            <div class="coba">
              <label for="exampleFormControlInput1" class="form-label">Jumlah :</label>
              <input type="text" class="form-control" cols="2" id="exampleFormControlInput1" value="<?php echo $data['jumlah']; ?>" name="jumlah">
            </div>
            <div class="form-floating col-12">
            </div>

          </div>
        </div>

        <div class="row justify-content-center">
          <div class="form-floating col-4">
            <div class="coba">
              <label for="exampleFormControlInput1" class="form-label">Harga Satuan :</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['hargasatuan']; ?>" name="hargasatuan">
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="form-floating col-4">
            <div class="coba">
              <label for="exampleFormControlInput1" class="form-label">Total Harga :</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['totalharga']; ?>" name="totalharga">
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

      </tr>
    </form>
  
  </div>
  <?php } ?>
  </table>
</body>

</html>
<?php 
}
?>