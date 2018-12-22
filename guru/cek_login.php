<?php 
session_start();
 
require_once ('../koneksi.php');


$nip = $_POST['nik'];
$password = $_POST['password'];
 
 
$login = mysqli_query($koneksi,"select * from guru where id_guru='$nip' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0)
{
 
	$data = mysqli_fetch_assoc($login);
 
 
		$_SESSION['nip'] = $nip;
		$_SESSION['nama'] = $username;
		$_SESSION['hakakses_guru'] = $username;
		
		header("location:dashgur.main");
 

}
else { 
		// alihkan ke halaman login kembali
	$message = "Username / Password salah";	
echo ("<script LANGUAGE='JavaScript'>
    window.alert('$message');
    window.location.href='index';
    </script>");
    }


 
?>