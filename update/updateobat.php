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
$id = $_GET['idobat'];
$query = "SELECT * From tb_obat WHERE idobat='$id'";
$hasil = mysqli_query($koneksi, $query);
while ($data = mysqli_fetch_assoc($hasil)) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update obat</title>
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

        <script>
            $(document).ready(function() {
                $('.readonly').find('input, textarea, select').attr('readonly', 'readonly');
            });
        </script>

    </head>

    <body>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<br>
<center><H2>UPDATE TABEL OBAT</H2></center>

        <table>
            <form action="..\prosesupdate\proses_update_obat.php" method="post">
                <br>
                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">ID Supplier :</label>
                            <select name="idsupplier" class="form-select" id="exampleFormControlInput1">
                                <?php
                                include('../koneksi.php');
                                $query = "SELECT idsupplier, perusahaan FROM tb_supplier";
                                $hasil = mysqli_query($koneksi, $query);

                                while ($row = mysqli_fetch_assoc($hasil)) {
                                ?>
                                    <option value="<?php echo $row['idsupplier']; ?>"><?php echo $row['perusahaan']; ?></option>

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
                            <label for="exampleFormControlInput1" class="form-label">ID Obat:</label>
                            <input type="text" class="form-control" readonly id="exampleFormControlInput1" value="<?php echo $data['idobat']; ?>" name="idobat">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">Nama Obat :</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['namaobat']; ?>" name="namaobat">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">Kategori :</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['kategoriobat']; ?>" name="kategoriobat">
                        </div>
                        <div class="form-floating col-12">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">Harga Jual :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harga Beli :</label>
                        </div>
                    </div>
                </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-floating col-2">
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['hargajual']; ?>" name="hargajual">
                    </div>
                    <div class="form-floating col-2">
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['hargabeli']; ?>" name="hargabeli">
                    </div>
                    <div class="form-floating col-9">
                    </div>
                </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">Stok Obat :</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['stokobat']; ?>" name="stokobat">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-floating col-4">
                        <div class="coba">
                            <label for="exampleFormControlInput1" class="form-label">Keterangan :</label>
                            <textarea name="keterangan" id="" cols="4" rows="0" class="form-control" id="exampleFormControlInput1"><?php echo $data['keterangan']; ?></textarea>
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