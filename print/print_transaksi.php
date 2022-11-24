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
  
  <table class="table-bordered" border="2" align="center" style="margin: 0px auto" width="90%;" cellpadding="5;" cellspacing="0;" >

  <CENTER><h1>TABLE TRANSAKSI</h1></CENTER>
  <br>
  <thead>
            <tr>
                <th style="text-align:center">
                    ID Transaksi
                </th>
                <th style="text-align:center">
                    ID Pelanggan
                </th>
                <th style="text-align:center">
                    ID Karyawan
                </th>
                <th style="text-align:center">
                    Tanggal Transaksi
                </th>
                <th style="text-align:center">
                    Kategori Pelanggan
                </th>
                <th style="text-align:center">
                    Total Bayar
                </th>
                <th style="text-align:center">
                    Bayar
                </th>
                <th style="text-align:center">
                    Kembalian
                </th>
                </th>

            </tr>
            
        </thead>
        <tbody>
            <?php
            include('../koneksi.php');
            $query = "SELECT * FROM tb_transaksi";
            $hasil = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_assoc($hasil)) {
            ?>
                <center>
                    <tr>
                        <td style="text-align:center"><?php echo $row['idtransaksi'] ?></td>
                        <td style="text-align:center"><?php echo $row['idpelanggan'] ?></td>
                        <td style="text-align:center"><?php echo $row['idkaryawan'] ?></td>
                        <td style="text-align:center"><?php echo $row['tgltransaksi'] ?></td>
                        <td style="text-align:center"><?php echo $row['kategoripelanggan'] ?></td>
                        <td style="text-align:center"><?php echo $row['totalbayar'] ?></td>
                        <td style="text-align:center"><?php echo $row['bayar'] ?></td>
                        <td style="text-align:center"><?php echo $row['kembali'] ?></td>

                    </tr>
                </center>
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