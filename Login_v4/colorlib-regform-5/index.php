<!DOCTYPE html>
<html lang="en">
    
<?php 
include('../../koneksi.php')
?>
<head>
    <!-- Required meta tags-->
    <script>
        
function pass_validation()
{
var type_SecPass=document.Pakainfo.password.value;  
var Retype_SecPass=document.Pakainfo.confirmpassword.value;  
if(type_SecPass==Retype_SecPass){  
return true;  
}  
else{  
alert("password one and two must be same!");  
return false;  
}  
} 
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Form</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Registration Form</h2>
                </div>
                <div class="card-body">
                    <form name ="Pakainfo" action="../proses_register.php" method="POST" onsubmit="return pass_validation()">
                    <div class="form-row">
                    <div class="name">ID karyawan</div>
                    <div class="value">
                        <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                        <select name="idkaryawan">
							<?php
							$querykaryawan = "SELECT * FROM tb_karyawan WHERE idkaryawan NOT IN (SELECT idkaryawan FROM tb_login)";
							$hasilkaryawan = mysqli_query($koneksi, $querykaryawan);
							$cek = mysqli_num_rows($hasilkaryawan);
							if ($cek > 0){
							while ($row = mysqli_fetch_assoc($hasilkaryawan)){
								
							?>
								<option value="<?php echo $row['idkaryawan'];?>"><?php echo $row['namakaryawan'];?></option>
								<?php
								}
							} else {

								?>
								<option value="">Semua karyawan sudah registrasi</option>
								<?php
																	
								}
							
								?>
						</select>
                        <div class="select-dropdown"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="Username">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Confirm Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="confirmpassword">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Level User</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="leveluser">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>karyawan</option>
                                            <option>admin</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        
                       
                        </div>
                        <center>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
						    </a>
                            <a href="..\login.php" class="txt2">
							<h5>Back to Login</h5>
                        </div></center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->