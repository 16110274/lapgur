<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
require_once ('koneksi.php');
 
// menangkap data yang dikirim dari form login
$nik = $_POST['nik'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan nik dan password yang sesuai
$login = mysqli_query($koneksi,"select * from siswa where id_siswa='$nik' and id_siswa='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah nik dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);

		// buat session login dan nik
		$_SESSION['id_siswa'] = $nik;
		$_SESSION['nama_siswa'] = $name;
		$_SESSION['id_kelas'] = $idkel;
		// alihkan ke halaman dashboard pengurus
		header("location:dashboard.php");

	}
	else{
	$message = "Username / Password salah";	
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='login';
    </script>");

}
 

?>