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
    <title>Daftar Obat</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <h3><a class="nav-link disabled" href="">ADMINISTRATOR</a></h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <center>
                <h2>TABEL SUPPLIER</h2>
            </center>

            <nav class="navbar navbar-expand-lg bg-light">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Data Tabel
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="..\view\viewobat.php">Tabel Obat</a></li>
                                <li><a class="dropdown-item" href="..\view\viewkaryawan.php">Tabel Karyawan</a></li>
                                <li><a class="dropdown-item" href="../view/viewsupplier.php">Tabel Supplier</a></li>
                                <li><a class="dropdown-item" href="../view/viewdetail_transaksi.php">Tabel Detail Transaksi</a></li>
                                <li><a class="dropdown-item" href="../view/viewpelanggan.php">Tabel Pelanggan</a></li>
                                <li><a class="dropdown-item" href="../view/viewtransaksi.php">Tabel Transaksi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="..\index\indexadmin.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        
                    </ul>
                </div>
        </div>
    </nav>

    <table class="table table-bordered" border="2" align="center" style="margin: 0px auto" ;>

        <thead>
            <tr>
                <th style="text-align:center">
                    <h5>ID Supplier</h5>
                </th>
                <th style="text-align:center">
                    <h5>Perusahaan</h5>
                </th>
                <th style="text-align:center">
                    <h5>Keterangan</h5>
                </th>
                </th>
                <th colspan="2" style="text-align:center">
                    <a href="../insert/insertsupplier.php?idsupplier"><button type="button" class="btn btn-outline-success">INSERT DATA</button></a>

            </tr>
            </h5>
        </thead>
        <tbody>
            <?php
            include('../koneksi.php');
            $query = "SELECT * FROM tb_supplier";
            $hasil = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_assoc($hasil)) {
            ?>
                <center>
                    <tr>
                        <td style="text-align:center"><?php echo $row['idsupplier'] ?></td>
                        <td style="text-align:center"><?php echo $row['perusahaan'] ?></td>
                        <td style="text-align:center"><?php echo $row['keterangan'] ?></td>
                        <td style="text-align:center"><a href="../delete/deletesupplier.php?idsupplier=<?php echo $row['idsupplier']; ?>"><button type="button" class="btn btn-outline-danger">DELETE</button></a></td>
                        <td style="text-align:center"><a href="../update/updatesupplier.php?idsupplier=<?php echo $row['idsupplier']; ?>"><button type="button" class="btn btn-outline-info">UPDATE</button></a></td>

                    </tr>
                </center>
            <?php
            }
            ?>

        </tbody>
    </table>
</body>

</html>