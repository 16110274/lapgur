<?php 
require_once ('../koneksi.php');
$idkbm = $_GET['id_kb'];
   session_start(); 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['nip']=="") {
        header("location:index. php?pesan=gagal");
    }
 $guru =   $_SESSION['nip'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Daftar Nilai Keterampilan</title>
</head>
<body>

<style>
table, th, td {
    border: 1px solid black;
}
</style>

<?php
 $sql = mysqli_query($koneksi,"select * from mapel_guru where id_kb=$idkbm
    ");

  while($data = mysqli_fetch_array($sql)){
    $mpl=$data['nama_mapel'];
    $kls=$data['nama_kelas'];
    $idkls=$data['id_kelas'];
    $ta = ($data['tahunajar']);

 ?>





<p style="text-align:center"><b>DAFTAR NILAI KETERAMPILAN TAHUN PELAJARAN <?php echo  $ta; ?></b><br>Kelas <?php echo  $kls; ?>																									
</p>


		Mapel : <?php echo $mpl; ?> <br>
<?php
 $sql = mysqli_query($koneksi,"select * from detil_kelas where id_kelas='$idkls'");

  while($data = mysqli_fetch_array($sql)){
    $namaguru = ($data['nama_wali']);
 ?>
        Wali : <?php echo $namaguru; ?> <br><br>
<?php   }

  }?>
   <table>
 <tr>
        <th width="100px" colspan="2">No</th>
        <th width="250px" rowspan="2">Nama</th>
        <th width="120px" colspan="3">KD 1</th>
        <th width="120px" colspan="3">KD 2</th>

        <th width="120px" colspan="3">KD 3</th>
        <th width="120px" colspan="3">KD 4</th>
        <th width="120px" colspan="3">KD 5</th>
        <th width="120px" colspan="5">Rata-Rata</th>
        <th rowspan="2">Nilai Rapor</th>
        <th rowspan="2">Nilai Max</th>
        <th rowspan="2">Nilai Min</th>
        <th rowspan="2">Desk Max</th>
        <th rowspan="2">Desk Min</th>
        <th rowspan="2" width="200px">Deskripsi</th>


    </tr>
    <tr>
    
    <th width="50px">Urut</th>
    <th width="50px">Induk</th>

    <th width="40px">POR</th>
    <th width="40px">PRO</th>
    <th width="40px">PRAK</th>



    <th width="40px">POR</th>
    <th width="40px">PRO</th>
    <th width="40px">PRAK</th>


     <th width="40px">POR</th>
    <th width="40px">PRO</th>
    <th width="40px">PRAK</th>

    <th width="40px">POR</th>
    <th width="40px">PRO</th>
    <th width="40px">PRAK</th>

   <th width="40px">POR</th>
    <th width="40px">PRO</th>
    <th width="40px">PRAK</th>

    <th width="40px">KD1</th>
    <th width="40px">KD2</th>
    <th width="40px">KD3</th>
    <th width="40px">KD4</th>
    <th width="40px">KD5</th>


    </tr>


 <?php 
 

        $nomor = 1;

        $sql = mysqli_query($koneksi,"select

            nullif(hitung_nk.nk_portfolio1,0) as port1 ,
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
            mapel.kd5
        





         from hitung_nk join kbm ON hitung_nk.id_kbm = kbm.id_kbm join kb on kbm.id_kb=kb.id_kb

            join mapel on kb.id_mapel=kb.id_mapel
            join siswa on kbm.id_siswa=siswa.id_siswa
            WHERE kb.id_kb='$idkbm' group by kbm.id_siswa
            ");



            //." and nilai.id_guru=" .$_SESSION['nik']);

        while($data = mysqli_fetch_array($sql)){

            $nk1 = $data['nk1'];
            $nk2 = $data['nk2'];
            $nk3 = $data['nk3'];
            $nk4 = $data['nk4'];
            $nk5 = $data['nk5'];
            $nk = $data['nk'];

            $max = max($nk1,$nk2,$nk3,$nk4,$nk5);
            $min = min($nk1,$nk2,$nk3,$nk4,$nk5);
           
        ?>
        <tr>
            <th><?php echo $nomor++; ?></td>
            <td align="center"><?php echo $data['id_siswa']; ?></td>
            <td><?php echo $data['nama_siswa']; ?></td>

              <td align="center"><?php echo $data['port1']; ?></td>
            <td align="center"><?php echo $data['proy1']; ?></td>
            <td align="center"><?php echo $data['prak1']; ?></td>


            <td align="center"><?php echo $data['port2']; ?></td>
            <td align="center"><?php echo $data['proy2']; ?></td>
            <td align="center"><?php echo $data['prak2']; ?></td>


            <td align="center"><?php echo $data['port3']; ?></td>
            <td align="center"><?php echo $data['proy3']; ?></td>
            <td align="center"><?php echo $data['prak3']; ?></td>

            <td align="center"><?php echo $data['port4']; ?></td>
            <td align="center"><?php echo $data['proy4']; ?></td>
            <td align="center"><?php echo $data['prak4']; ?></td> 
                       

            <td align="center"><?php echo $data['port5']; ?></td>
            <td align="center"><?php echo $data['proy5']; ?></td>
            <td align="center"><?php echo $data['prak5']; ?></td>
           
           
   
       <td align="center"><?php echo $nk1; ?></td>  
       <td align="center"><?php echo $nk2; ?></td>  
       <td align="center"><?php echo $nk3; ?></td>  
       <td align="center"><?php echo $nk4; ?></td>  
       <td align="center"><?php echo $nk5; ?></td>  

       <td align="center"><?php echo $nk; ?></td>  
       <td align="center"><?php echo $max; ?></td>  
       <td align="center"><?php echo $min; ?></td>  

<td align="center"><?php

 if($max==$nk5)
 {
    echo $data['kd5'];
 }

  if($max==$nk4)
 {
    echo $data['kd4'];
 }


  if($max==$nk3)
 {
    echo $data['kd3'];
 }

  if($max==$nk2)
 {
    echo $data['kd2'];
 }

  if($max==$nk1)
 {
    echo $data['kd1'];
 }


?>  </td> 


<td align="center"><?php

 if($min==$nk5)
 {
    echo $data['kd5'];
 }

  if($min==$nk4)
 {
    echo $data['kd4'];
 }


  if($min==$nk3)
 {
    echo $data['kd3'];
 }

  if($min==$nk2)
 {
    echo $data['kd2'];
 }

  if($min==$nk1)
 {
    echo $data['kd1'];
 }


?>  </td>  



<td align="center"><?php
 echo "Siswa sangat terampil dalam KD ";


 if($max==$nk5)
 {
    echo $data['kd5'];
 }

  if($max==$nk4)
 {
    echo $data['kd4'];
 }


  if($max==$nk3)
 {
    echo $data['kd3'];
 }

  if($max==$nk2)
 {
    echo $data['kd2'];
 }

  if($max==$nk1)
 {
    echo $data['kd1'];
 }


 echo " dan perlu meningkatkan keterampilan untuk KD ";

if($min==$nk5)
 {
    echo $data['kd5'];
 }

  if($min==$nk4)
 {
    echo $data['kd4'];
 }


  if($min==$nk3)
 {
    echo $data['kd3'];
 }

  if($min==$nk2)
 {
    echo $data['kd2'];
 }

  if($min==$nk1)
 {
    echo $data['kd1'];
 }











?>  </td> 




















</tr>        <?php }  ?>






 
</table>



			
</body>
</html>