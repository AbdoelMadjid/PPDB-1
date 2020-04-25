<?php  
	//start the session
	session_start();

	$redirect = "";

	if (isset($_SESSION['is_data_address_exist'])) {
		$redirect = "<script> window.location='daftar_syarat.php'; </script>";
	}else{
		$redirect = "<script> window.location='daftar_data_orangtua.php'; </script>";
	}

	//check if button next is clicked
	if(isset($_POST['submit'])){

		//set all name attr and value to created variable
		foreach ($_POST as $key => $val) {
			${$key} = $val;
			$_SESSION[''.$key.''] = $val;
		}

		//check if session is not empty, then redirect to daftar_data_orangtua.php
		if (!empty($_SESSION)) {
			echo $redirect;
			print_r($_SESSION);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Penerimaan Siswa Baru</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">

				<div class="card" style="margin-top: 50px">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Data Alamat Siswa</h4>
                        <p class="category">Isi Form pendaftaran dengan benar</p>
                    </div>
                    <div class="card-content">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Alamat Rumah</label>
                                        <input type="text" class="form-control" name="home_address" required autofocus
                                        value="<?php isset($_SESSION['home_address'])  ?  print($_SESSION['home_address']) : ""; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">RT</label>
                                        <input type="number" class="form-control" name="rt" required
                                        value="<?php isset($_SESSION['rt'])  ?  print($_SESSION['rt']) : ""; ?>">
                                    </div>
                                </div>
 
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">RW</label>
                                        <input type="number" class="form-control" name="rw" required
                                        value="<?php isset($_SESSION['rw'])  ?  print($_SESSION['rw']) : ""; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Kelurahan</label>
                                        <input type="text" class="form-control" name="vilage_office" 
										value="<?php isset($_SESSION['vilage_office'])  ?  print($_SESSION['vilage_office']) : ""; ?>" 
                                        required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Kecamatan</label>
                                        <input type="text" class="form-control" name="district" 
										value="<?php isset($_SESSION['district'])  ?  print($_SESSION['district']) : ""; ?>" 
                                        required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              	<div class="col-md-12">
                              		<div class="form-group label-floating">
                                        <label class="control-label">Kota/Kabupaten</label>
                                        <input type="text" class="form-control" name="city" 
										value="<?php isset($_SESSION['city'])  ?  print($_SESSION['city']) : ""; ?>"
                                        required>
                                    </div>
                              	</div>	
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Provinsi</label>
                                        <input type="text" class="form-control" name="province" 
										value="<?php isset($_SESSION['province'])  ?  print($_SESSION['province']) : ""; ?>"
                                        required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Kode Pos</label>
                                        <input type="number" class="form-control" name="postal_code" 
										value="<?php isset($_SESSION['postal_code'])  ?  print($_SESSION['postal_code']) : ""; ?>"
                                        required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">No Telpon Rumah</label>
                                        <input type="number" class="form-control" name="house_phone" 
										value="<?php isset($_SESSION['house_phone'])  ?  print($_SESSION['house_phone']) : ""; ?>"
                                        required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tinggal Dengan</label>
                                        <input type="text" class="form-control" name="live_with" 
										value="<?php isset($_SESSION['live_with'])  ?  print($_SESSION['live_with']) : ""; ?>"
                                        required>
                                    </div>
                                </div>
                            </div>
                            
                            <?php  
                            if (isset($_SESSION['is_data_address_exist'])) {
                            ?>
                            <button type="submit" name="submit" class="btn btn-primary pull-right">Kembali <i class="fa fa-arrow-right"></i></button>
                            <?php
                            }else{
                            ?>
								<button type="submit" name="submit" class="btn btn-primary pull-right">Lanjut <i class="fa fa-arrow-right"></i></button>
                            <?php
                            }
                            ?>

                            
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
	    </div>
	</div>
</body>
</html>