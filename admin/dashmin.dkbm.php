<?php
include "../koneksi.php";
$idkb = $_GET['id_kb'];
?>
<?php 
    session_start(); 
    // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['id_admin']=="") {
        header("location:index");
    }
?>
<?php 
if($idkb != ""){
$sql = "DELETE FROM `kb` WHERE `kb`.`id_kb` = $idkb";
mysqli_query($koneksi,$sql);

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted');
    window.location.href='dashmin.kbm';
    </script>");
}
?>