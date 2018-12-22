<?php
include "../koneksi.php";
$idguru = $_GET['id_guru'];
?>
<?php 
    session_start(); 
    // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['id_admin']=="") {
        header("location:index");
    }
?>
<?php 
if($idguru != ""){
$sql = "DELETE FROM `guru` WHERE `guru`.`id_guru` = $idguru";
mysqli_query($koneksi,$sql);

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted');
    window.location.href='dashmin.guru';
    </script>");
}
?>