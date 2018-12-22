<?php
include "../koneksi.php";
$idmapel = $_GET['id_mapel'];
?>
<?php 
    session_start(); 
    // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['id_admin']=="") {
        header("location:index");
    }
?>
<?php 
if($idmapel != ""){
$sql = "DELETE FROM `mapel` WHERE `mapel`.`id_mapel` = $idmapel";
mysqli_query($koneksi,$sql);

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted');
    window.location.href='dashmin.mapel';
    </script>");
}
?>