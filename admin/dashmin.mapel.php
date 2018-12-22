<?php include "../koneksi.php";
include "../class_lib.php";
$newkbm = new kbm; ?>
<?php 
    session_start(); 
    // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['id_admin']=="") {
        header("location:index");
    }
    ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Datatable - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
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
                            <li>
                                <a href="dashmin" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Menu Admin</span></a>
                                <ul class="collapse">
                                     <li><a href="dashmin.kbm">KBM</a></li>                                                                           
                                     <li>
                                        <a href="#" aria-expanded="true">Nilai</a>
                                        <ul class="collapse">
                                            <li><a href="dashmin.kbm">Keterampilan</a></li>
                 
                                        </ul>
                                    </li>
                                     <li><a href="dashmin.guru">Guru</a></li>
                                     <li class="active"><a href="dashmin.mapel">Mapel</a></li>
                                     <li><a href="dashmin.kelas">Kelas</a></li>
                                     <li><a href="dashmin.siswa">Siswa</a></li>                       
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Cetak Laporan
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="dashgur.nk.php">Nilai Keterampilan</a></li>
                            

                                </ul>
                            </li>
                           </ul></li></ul>
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
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php $sql = mysqli_query($koneksi,"select admin.nama_admin from admin
                         where admin.id_admin=" .$_SESSION['id_admin']);
        while($data = mysqli_fetch_array($sql)){?>
        <td><?php echo $data['nama_admin']; } ?>



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
                                <h4 class="header-title">Daftar Mata Pelajaran</h4>

                                 <div class="justify-content-between">
                                <div class="data-tables">
                                    <table id="dataTable">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>NO</th>
                                                <th>ID</th>
                                                <th>NAMA MAPEL</th>                                                
                                                <th>KD 1</th>
                                                <th>KD 2</th>
                                                <th>KD 3</th>
                                                <th>KD 4</th>
                                                <th>KD 5</th>
                                                <th>DAFTAR PENGAJAR</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        
                                          
  <?php
      


    $nomor = 1;
        $sql = mysqli_query($koneksi,"select * from daftar_mapel
            ");
        while($data = mysqli_fetch_array($sql)){
        ?>

                     <tr>
                                   <td><?php echo $nomor++; ?></td>
                                   <td><?php echo $data['id_mapel'];  ?></td>
                                   <td><?php echo $data['nama_mapel'];  ?></td>
                                   <td><?php echo $data['kd1'];  ?></td>
                                   <td><?php echo $data['kd2'];  ?></td>
                                   <td><?php echo $data['kd3'];  ?></td>
                                   <td><?php echo $data['kd4'];  ?></td>
                                   <td><?php echo $data['kd5'];  ?></td>
                                                                                                            
                                                <td> <?php echo $data['jumlah_guru'];?> Guru |     

                                   <a class="edit" href="dashmin.kbm.php?nama_mapel=<?php echo $data['nama_mapel']; ?>"> Lihat</a>                      </td>
                                                <td>  
													<a class="edit" href="dashmin.emapel.php?id_mapel=<?php echo $data['id_mapel']; ?>"> Edit</a> | 
													<a class="edit" href="dashmin.dmapel.php?id_mapel=<?php echo $data['id_mapel']; ?>">Delete</a>
													
												</td>
                                            </tr>



       <?php
                    
}
                    ?>






                                        </tbody>
                                    </table>
                                </div>
                   
                    <!-- data table end -->                      
                </div> </div></div>
                <div class=" pull-right"><br>
                    <a href="dashmin.tmapel"><input class="btn btn-flat btn-danger mb-3" type="reset" value="+"></a>
                </div></div></div>
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
