<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
require_once ('../koneksi.php');
 
// menangkap data yang dikirim dari form login
$nik = $_POST['nik'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan nik dan password yang sesuai
$login = mysqli_query($koneksi,"select * from admin where id_admin='$nik' and password_admin='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah nik dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);

		// buat session login dan nik
		$_SESSION['id_admin'] = $nik;
		// alihkan ke halaman dashboard pengurus
		header("location:dashmin.php");

	}
	else{
	$message = "Username / Password salah";	
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='login';
    </script>");

}
 

?>