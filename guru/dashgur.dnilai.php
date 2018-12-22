 <?php include "../koneksi.php";
include "../class_lib.php";
$newkbm = new kbm; 
            $ids = $_GET['id_siswa'];
            $idkbm = $_GET['id_kb'];

?>
<?php 
    session_start(); 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['nip']=="") {
        header("location:index. php?pesan=gagal");
    }
    ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Datatable - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>


</head>

<body>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="../assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Menu Guru</span></a>
                                <ul class="collapse">
                                    <li ><a href="dashgur.main">KBM</a></li>
                                    <li class="active"><a href="">Nilai</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Cetak Laporan
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="dashgur.nk">Nilai Keterampilan</a></li>
                           

                                </ul>
                            </li>
                           
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                         <div class="col-sm-4">
                            <div class="breadcrumbs-area clearfix">
                                <h4 class="page-title pull-left">Dashboard</h4>
                            </div>
                        </div>

                    <!-- profile info & task notification -->
                    <div class="col-sm-8 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="../assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php $sql = mysqli_query($koneksi,"select guru.nama_guru from guru
                         where guru.id_guru=" .$_SESSION['nip']);
        while($data = mysqli_fetch_array($sql)){?>
        <td><?php echo $data['nama_guru']; } ?>



                                <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="logout">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
            <!-- page title area end -->
                      <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Edit Nilai Siswa</h4>




<?php
    $nomor = 1;
     $idkbm = $_GET['id_kb'];
      $ids = $_GET['id_siswa'];
      $output = '';  
      $sql = "select mapel.nama_mapel,

            nullif(hitung_nk.nk_portfolio1,0) as port1 ,
            nullif(hitung_nk.nk_portfolio2,0) as port2 ,
            nullif(hitung_nk.nk_portfolio3,0) as port3 ,
            nullif(hitung_nk.nk_portfolio4,0) as port4 ,
            nullif(hitung_nk.nk_portfolio5,0) as port5 ,

            nullif(hitung_nk.nk_praktikum1,0) as prak1 ,
            nullif(hitung_nk.nk_praktikum2,0) as prak2 ,
            nullif(hitung_nk.nk_praktikum3,0) as prak3 ,
            nullif(hitung_nk.nk_praktikum4,0) as prak4 ,
            nullif(hitung_nk.nk_praktikum5,0) as prak5 ,
            
            nullif(hitung_nk.nk_proyek1,0) as proy1 ,
            nullif(hitung_nk.nk_proyek2,0) as proy2 ,
            nullif(hitung_nk.nk_proyek3,0) as proy3 ,
            nullif(hitung_nk.nk_proyek4,0) as proy4 ,
            nullif(hitung_nk.nk_proyek5,0) as proy5,
            hitung_nk.nk1,
            hitung_nk.nk2,
            hitung_nk.nk3,
            hitung_nk.nk4,
            hitung_nk.nk5,
            hitung_nk.nk, siswa.nama_siswa, siswa.id_siswa,
            mapel.kd1,
            mapel.kd2,
            mapel.kd3,
            mapel.kd4,
            mapel.kd5, kbm.id_kbm
        





         from hitung_nk join kbm ON hitung_nk.id_kbm = kbm.id_kbm join kb on kbm.id_kb=kb.id_kb

            join mapel on kb.id_mapel=kb.id_mapel
            join siswa on kbm.id_siswa=siswa.id_siswa
            WHERE kbm.id_kb='$idkbm' and kbm.id_siswa=$ids
            group by siswa.id_siswa
            "; 

      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result)){
      $nama = $row['nama_mapel']; 
      $n1=$row['kd1'];
      $n2=$row['kd2'];
      $n3=$row['kd3'];
      $n4=$row['kd4'];
      $n5=$row['kd5'];
    $idkb=$row['id_kbm'];
?>
                                        <form method="post" action="">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">NIS</label>
                                            <input name="idsiswa" class="form-control" type="text" readonly="" value="<?php echo $row['id_siswa'];  ?>" id="example-text-input">
                                            <input name="idkb" hidden="" class="form-control" type="text" readonly="" value="<?php echo $row['id_kbm'];  ?>" id="example-text-input">
                                            <label for="example-search-input" class="col-form-label">NAMA</label>
                                            <input class="form-control" type="text" readonly="" value="<?php echo $row['nama_siswa'];  ?>" id="example-text-input">
                                        </div>
                                        <div class="form-group"><br>
                                      KD 1 : <?php echo $n1;?><br><br>
                                            <label for="example-email-input" class="col-form-label">Nilai Praktikum</label>
                                            <input name="prak1" class="form-control" max="100" min="0" type="number" value="<?php echo $row['prak1'] ?>" id="example-email-input">                   
                                            <label for="example-email-input" class="col-form-label">Nilai Portfolio</label>
                                            <input name="port1" class="form-control" max="100" min="0" type="number" value="<?php echo $row['port1'] ?>" id="example-email-input">                   
                                            <label for="example-email-input" class="col-form-label">Nilai Proyek</label>
                                            <input name="proy1" class="form-control" max="100" min="0" type="number" value="<?php echo $row['proy1'] ?>" id="example-email-input">                   

                                        </div>
                                        <div class="form-group"><br>
                                      KD 2 : <?php echo $n2;?><br><br>
                                            <label for="example-email-input" class="col-form-label">Nilai Praktikum</label>
                                            <input name="prak2" class="form-control" max="100" min="0" type="number" value="<?php echo $row['prak2'] ?>" id="example-email-input">                   
                                            <label for="example-email-input" class="col-form-label">Nilai Portfolio</label>
                                            <input name="port2" class="form-control" max="100" min="0" type="number" value="<?php echo $row['port2'] ?>" id="example-email-input">                   
                                            <label for="example-email-input" class="col-form-label">Nilai Proyek</label>
                                            <input name="proy2" class="form-control" max="100" min="0" type="number" value="<?php echo $row['proy2'] ?>" id="example-email-input">                   

                                        </div>
                                        <div class="form-group"><br>
                                       KD 3 : <?php echo $n3;?><br><br>
                                            <label for="example-email-input" class="col-form-label">Nilai Praktikum</label>
                                            <input name="prak3" class="form-control" max="100" min="0" type="number" value="<?php echo $row['prak3'] ?>" id="example-email-input">                   
                                            <label for="example-email-input" class="col-form-label">Nilai Portfolio</label>
                                            <input name="port3" class="form-control" max="100" min="0" type="number" value="<?php echo $row['port3'] ?>" id="example-email-input">                   
                                            <label  for="example-email-input" class="col-form-label">Nilai Proyek</label>
                                            <input name="proy3" class="form-control" max="100" min="0" type="number" value="<?php echo $row['proy3'] ?>" id="example-email-input">                   
                                        </div>                                                                       
                                       
                                        <div class="form-group"><br>
                                      KD 4 : <?php echo $n4;?><br><br>
                                            <label for="example-email-input" class="col-form-label">Nilai Praktikum</label>
                                            <input name="prak4" class="form-control" max="100" min="0" type="number" value="<?php echo $row['prak4'] ?>" id="example-email-input">                   
                                            <label for="example-email-input" class="col-form-label">Nilai Portfolio</label>
                                            <input name="port4" class="form-control" max="100" min="0" type="number" value="<?php echo $row['port4'] ?>" id="example-email-input">                   
                                            <label for="example-email-input" class="col-form-label">Nilai Proyek</label>
                                            <input name="proy4" class="form-control" max="100" min="0" type="number" value="<?php echo $row['proy4'] ?>" id="example-email-input">                   
                                        </div>                                        

                                        <div class="form-group"><br>
                                      KD 5 : <?php echo $n5;?><br><br>
                                            <label for="example-email-input" class="col-form-label">Nilai Praktikum</label>
                                            <input name="prak5" class="form-control" max="100" min="0" type="number" value="<?php echo $row['prak5'] ?>" id="example-email-input">                   
                                            <label for="example-email-input" class="col-form-label">Nilai Portfolio</label>
                                            <input name="port5" class="form-control" max="100" min="0" type="number" value="<?php echo $row['port5'] ?>" id="example-email-input">                   
                                            <label for="example-email-input" class="col-form-label">Nilai Proyek</label>
                                            <input name="proy5" class="form-control" max="100" min="0" type="number" value="<?php echo $row['proy5'] ?>" id="example-email-input">                   
                                        </div><br>

                                      <button name="submit" type="submit" class="btn btn-primary mb-3">UPDATE</button>

                                      </form>

       <?php

if(isset($_POST['submit']))

{

$prak1 = $_POST['prak1'];
$port1 = $_POST['port1'];
$proy1 = $_POST['proy1'];

$prak2 = $_POST['prak2'];
$port2 = $_POST['port2'];
$proy2 = $_POST['proy2'];

$prak3 = $_POST['prak3'];
$port3 = $_POST['port3'];
$proy3 = $_POST['proy3'];


$prak4 = $_POST['prak4'];
$port4 = $_POST['port4'];
$proy4 = $_POST['proy4'];


$prak5 = $_POST['prak5'];
$port5 = $_POST['port5'];
$proy5 = $_POST['proy5'];
echo $proy5;

//mysqli_query($koneksi,"insert into kbm (id_mapel,id_guru,id_kelas,id_semester,id_tahunajar) values('$mapel','$guru','$kelas','$semester','$tahunajar')");
mysqli_query($koneksi,"UPDATE `nilai_keterampilan` SET `nk_praktikum1`='$prak1', `nk_praktikum2`='$prak2', `nk_praktikum3`='$prak3', `nk_praktikum4`='$prak4', `nk_praktikum5`='$prak5' ,
    `nk_portfolio1`='$port1', `nk_portfolio2`='$port2', `nk_portfolio3`='$port3', `nk_portfolio4`='$port4', `nk_portfolio5`='$port5' , 
    `nk_proyek1`='$proy1', `nk_proyek2`='$proy2', `nk_proyek3`='$proy3', `nk_proyek4`='$proy4', `nk_proyek5`='$proy5'

    WHERE `id_kbm`='$idkb' ");
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='';
    </script>");

}

?>             



                                  
                                    </div>
                                </div>
                            </div></td>
                            <!-- Textual inputs end -->
                            <br>

                  <?php } ?>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
   
    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>
