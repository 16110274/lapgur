<?php include "../koneksi.php";
include "../class_lib.php";
$newkbm = new kbm;
$newguru = new guru;

 ?>
<?php 
    session_start(); 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['nip']=="") {
        header("location:index.php?pesan=gagal");
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
                                    <li class="active" ><a href="dashgur.main.php">KBM</a></li>
                                    <li><a href="">Nilai</a></li>
                                    
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Cetak Laporan
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="dashgur.nk.php">Nilai Keterampilan</a></li>
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
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Table Default</h4>

                                 <div class="justify-content-between">
                                    <form action="dashgur.main" method="GET">
                                    <select required="" name="ta" class="custome-select border-0 pr-3" style="margin-right: 10px;">
                                        <option>-- PILIH TAHUN AJARAN --</option>

                                        <option value="<?php if(!empty($_GET['ta'])) { echo  $_GET['ta']; }  ?>"selected="" hidden="" class="active"><?php  if(!empty($_GET['ta'])) { echo  $_GET['ta'];

                                    } else {
                                            echo "-- PILIH TAHUN AJARAN --";
                                        }
                                    ?></option>
                                    <?php $idguru = $_SESSION['nip'];

      $sql = "select periode.tahunajar from periode
      join kb on periode.id_periode=kb.id_periode
      where kb.id_guru='$idguru' group by tahunajar

      ";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           echo '<option value="'.$row["tahunajar"].'">'.$row["tahunajar"].'</option>';  
      }  


                                    ?>  

                                    </select>

                                    <select name="smt" required="" class="custome-select border-0 pr-3" style="margin-right: 10px;">
                                    <option>-- PILIH SEMESTER --</option>
                                    <option value="<?php if(!empty($_GET['smt'])) { echo  $_GET['smt']; }  ?>" selected="" hidden="" class="active"><?php  if(!empty($_GET['smt'])) { echo  $_GET['smt'];
                            } else {
                                            echo "-- PILIH SEMESTER --";
                                        }
                                        ?></option>
                                    <?php $idguru = $_SESSION['nip'];

      $sql = "select periode.semester from periode
      join kb on periode.id_periode=kb.id_periode
      where kb.id_guru='$idguru' group by semester

      ";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           echo '<option value="'.$row["semester"].'">'.$row["semester"].'</option>';  
      }  ?>
                                    </select>
                                    <button class="btn btn-primary" style="margin-right: 10px;">TAMPILKAN</button>
                                          
  <?php

$thnajr= null;
$smstr = null;



if(!empty($_GET['ta']) && !empty($_GET['smt'])) {

if(($_GET['ta']) > 0 && !empty($_GET['smt']) > 0) {

       $thnajr = $_GET['ta'];
       $smstr = $_GET['smt'];
       $guru = $_SESSION['nip'];

    $nomor = 1;
        $sql = mysqli_query($koneksi,"SELECT mapel.nama_mapel, kelas.alias_kelas, kb.id_kb
        from kb join mapel on kb.id_mapel=mapel.id_mapel
        join kelas on kb.id_kelas = kelas.id_kelas
        join periode on kb.id_periode = periode.id_periode
        where kb.id_guru= '$guru' and periode.tahunajar='$thnajr'
        AND periode.semester='$smstr'");

} ?>


                                </div></form>
                                <div class="data-tables">
                                    <table id="dataTable">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>NO</th>
                                                <th>MATA PEJARAN</th>
                                                <th>KELAS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        

<?php
            //." and nilai.id_guru=" .$_SESSION['nip']);

        while($data = mysqli_fetch_array($sql)){
        ?>

                     <tr>
                                                <td><?php echo $nomor++; ?></td>
                                                <td><?php echo $data['nama_mapel'];  ?></td>
                                                <td><?php echo $data['alias_kelas'];  ?></td>
                                                <td>    <a class="edit" href="dashgur.nilai.php?id_kb=<?php echo $data['id_kb']; ?>">Lihat</a> </td>
                                            </tr>



       <?php
                    
}}

                    ?>








                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                  
                </div>
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
