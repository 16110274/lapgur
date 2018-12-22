<?php 
// koneksi database
require ('../koneksi.php');

// menangkap data yang di kirim dari form
$mapel = $_POST['mapel'];
$guru = $_POST['guru'];
$kelas = $_POST['kelas'];
$semester = $_POST['semester'];
$tahunajar = $_POST['tahunajar'];



echo "ID mapel : ";
echo $mapel;
echo "<br>";
echo "ID guru : ";
echo $guru;
echo "<br>";
echo "N kelas : ";
echo $kelas;
echo "<br>";
echo "N semester : ";
echo $semester;
echo "<br>";
echo "N tahunajar : ";
echo $tahunajar;
echo "<br>";


// menginput data ke database
//mysqli_query($koneksi,"insert into kbm (id_mapel,id_guru,id_kelas,id_semester,id_tahunajar) values('$mapel','$guru','$kelas','$semester','$tahunajar')");

 
// mengalihkan halaman kembali ke index.php
//header("location:kbm.php");
 
?>