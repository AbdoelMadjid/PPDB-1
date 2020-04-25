<?php
//start the session
session_start();

$redirect = "";

if (isset($_SESSION['is_data_grade_exist'])) {
    $redirect = "<script> window.location='daftar_syarat.php'; </script>";
} else {
    $redirect = "<script> window.location='daftar_syarat.php'; </script>";
}

if (isset($_POST['submit'])) {
    foreach ($_POST as $key => $val) {
        ${$key} = $val;
        $_SESSION['' . $key . ''] = $val;
    }

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
                        <h4 class="title">Data rata2 nilai dari kelas 7-9</h4>
                        <p class="category">Isi Form pendaftaran dengan benar</p>
                    </div>
                    <div class="card-content">
                        <form method="post" action="daftar_data_nilai.php">

                            <fieldset class="the-fieldset">
                                <!-- Father data form input -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">PAI</label>
                                            <input type="number" class="form-control" name="pai" required value="<?php isset($_SESSION['pai'])  ?  print($_SESSION['pai']) : ""; ?>" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Bahasa Indonesia</label>
                                            <input type="number" class="form-control" name="indo" value="<?php isset($_SESSION['indo'])  ?  print($_SESSION['indo']) : ""; ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Bahasa Inggris</label>
                                            <input type="number" class="form-control" name="english" required value="<?php isset($_SESSION['english'])  ?  print($_SESSION['english']) : ""; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Matematika</label>
                                            <input type="number" class="form-control" name="mate" required value="<?php isset($_SESSION['mate'])  ?  print($_SESSION['mate']) : ""; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">IPA</label>
                                            <input type="number" class="form-control" name="ipa" value="<?php isset($_SESSION['ipa'])  ?  print($_SESSION['ipa']) : ""; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">IPS</label>
                                            <input type="number" class="form-control" name="ips" value="<?php isset($_SESSION['ips'])  ?  print($_SESSION['ips']) : ""; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Prestasi yang pernah diraih</label>
                                            <input type="text" class="form-control" name="goals" value="<?php isset($_SESSION['goals'])  ?  print($_SESSION['goals']) : ""; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Info SMK Wikrama 1 Garut Dari</label>
                                            <input type="text" class="form-control" name="info" value="<?php isset($_SESSION['info'])  ?  print($_SESSION['info']) : ""; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Father data form input -->
                            </fieldset>


                            <?php
                            if (isset($_SESSION['is_data_grade_exist'])) {
                            ?>
                                <button type="submit" name="submit" class="btn btn-primary pull-right">Kembali <i class="fa fa-arrow-right"></i></button>
                            <?php
                            } else {
                            ?>
                                <a href="daftar_siswa_baru.php" class="btn btn-warning pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>
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