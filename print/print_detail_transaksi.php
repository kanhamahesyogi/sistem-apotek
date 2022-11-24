<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda Belum Login ');window.location.href='../Login_v4/login.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>-</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .center {
      margin: auto;
      width: 15%;
      padding: 20px;
    }

    table {
      margin-left: auto;
      margin-right: auto;
    }

    div {
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
  </style>
</head>

<body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
  <table style="border:1px solid black;margin-left:auto;margin-right:auto;">
  
  <table class="table-bordered" border="2" align="center" style="margin: 0px auto" width="80%;" cellpadding="5;" cellspacing="0;" >

  <CENTER><h1>TABLE DETAIL TRANSAKSI</h1></CENTER>
  <br>
    <thead>
      <tr>
        <th style="text-align:center">
          ID Detail Transaksi
        </th>
        <th style="text-align:center">
          ID Transaksi
        </th>
        <th style="text-align:center">
          ID Obat
        </th>
        <th style="text-align:center">
          Jumlah
        </th>
        <th style="text-align:center">
          Harga Satuan
        </th>
        <th style="text-align:center">
          Total Harga
        </th>

      </tr>
    </thead>
    <tbody>
      <?php
      include('../koneksi.php');
      $query = "SELECT * FROM tb_detail_transaksi";
      $hasil = mysqli_query($koneksi, $query);

      while ($row = mysqli_fetch_assoc($hasil)) {
      ?>
        <tr>
          <td style="text-align:center"> <?php echo $row['iddetailtransaksi'] ?></td>
          <td style="text-align:center"> <?php echo $row['idtransaksi'] ?></td>
          <td style="text-align:center"> <?php echo $row['idobat'] ?></td>
          <td style="text-align:center"> <?php echo $row['jumlah'] ?></td>
          <td style="text-align:center"> <?php echo $row['hargasatuan'] ?></td>
          <td style="text-align:center"> <?php echo $row['totalharga'] ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
<script>
    window.print();
</script>
</body>

</html>