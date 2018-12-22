<?php
Class kbm {
 function kelas($koneksi)  
 {  
      $output = '';  
      $sql = "select * from kelas";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_kelas"].'">'.$row["nama_kelas"].'</option>';  
      }  
      return $output;  
 }

 function kelasalias($koneksi)  
 {  
      $output = '';  
      $sql = "select * from kelas";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_kelas"].'">'.$row["alias_kelas"].'</option>';  
      }  
      return $output;  
 }

 function mapel($koneksi)  
 {  
      $output = '';  
      $sql = "select * from mapel";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_mapel"].'">'.$row["nama_mapel"].'</option>';  
      }  
      return $output;  
 }


 function semester($koneksi)  
 {  
      $output = '';  
      $sql = "select periode.semester from periode group by periode.semester";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["semester"].'">'.$row["semester"].'</option>';  
      }  
      return $output;  
 }

 function tahunajar($koneksi)  
 {  
      $output = '';  
      $sql = "select periode.tahunajar from periode group by periode.tahunajar";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["tahunajar"].'">'.$row["tahunajar"].'</option>';  
      }  
      return $output;  
 }


  function periode($koneksi)  
 {  
      $output = '';  
      $sql = "select id_periode, concat (periode.tahunajar, ' - ', periode.semester) as period from periode";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_periode"].'">'.$row["period"].'</option>';  
      }  
      return $output;  
 }

 function idsemester($koneksi)  
 {  
      $output = '';  
      $sql = "select * from semester";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_semester"].'">'.$row["nama_semester"].'</option>';  
      }  
      return $output;  
 }

 function idtahunajar($koneksi)  
 {  
      $output = '';  
      $sql = "select * from tahunajar";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_tahunajar"].'">'.$row["nama_tahunajar"].'</option>';  
      }  
      return $output;  
 }

  function guru($koneksi)  
 {  
      $output = '';  
      $sql = "select * from guru";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_guru"].'">'.$row["nama_guru"].'</option>';  
      }  
      return $output;  
 }


 function gurusekarang($koneksi)  
 {  
      $id = $_GET['id_kb'];
      $output = '';  
      $sql = "select guru.id_guru, guru.nama_guru from kb
      join guru on kb.id_guru=guru.id_guru
       where kb.id_kb=$id";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option selected="" value="'.$row["id_guru"].'">'.$row["nama_guru"].'</option>';  
      }  
      return $output;  
 }


 function gurulain($koneksi)  {

    $id = $_GET['id_kb'];
      $output = '';  
      $sql = "select guru.id_guru, guru.nama_guru from kb
      join guru on kb.id_guru=guru.id_guru
       where kb.id_kb=$id";  
      $result = mysqli_query($koneksi, $sql);  
      while($data = mysqli_fetch_array($result))  
      {  
            $idg = $data['id_guru'];            
}
      $output = '';  
      $sql = "select guru.id_guru, guru.nama_guru from guru where guru.id_guru<>$idg ";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_guru"].'">'.$row["nama_guru"].'</option>';  
      }  
      return $output;  
}





 }    

Class siswa
{


 function showBiodata($koneksi)  
 {  
      $id = $_GET['id_siswa'];
      $output = '';  
      $sql = "select siswa.id_siswa, siswa.nama_siswa ,kelas.nama_kelas
      from siswa join kelas on siswa.id_kelas=kelas.id_kelas
      where siswa.id_siswa=$id";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output = 'NIS : ' .$row["id_siswa"]
           .'<br>Nama : ' .$row["nama_siswa"]
           .'<br>Kelas : ' .$row["nama_kelas"]
           .'<br><hr>'; 
      }  
      return $output;  
 }



 function jksekarang($koneksi)  
 {  
      $id = $_GET['id_siswa'];
      $output = '';  
      $sql = "select * from siswa where siswa.id_siswa=$id ";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option selected="" value="'.$row["jk_siswa"].'">'.$row["jk_siswa"].'</option>';  
      }  
      return $output;  
 }




 function jklain($koneksi)  {

    $id = $_GET['id_siswa'];
      $output = '';  
      $sql = "select * from siswa where siswa.id_siswa=$id";  
      $result = mysqli_query($koneksi, $sql);  
      while($data = mysqli_fetch_array($result))  
      {  
            $jk = $data['jk_siswa'];            
}
      $output = '';  
      $sql = "select * from siswa where jk_siswa<>'$jk' group by jk_siswa  ";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["jk_siswa"].'">'.$row["jk_siswa"].'</option>';  
      }  
      return $output;  
}





 function statuslain($koneksi)  
 {  
     $id = $_GET['id_siswa'];
        $safql = mysqli_query($koneksi,"select siswa.id_status, status.nama_status from siswa
      join status on siswa.id_status=status.id_status where siswa.id_siswa=$id");
        while($da = mysqli_fetch_array($safql)){ 
            $idm = $da['id_status'];            
}
      $output = '';  
      $result = mysqli_query($koneksi, "select * from status where status.id_status<>$idm");
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_status"].'">'.$row["nama_status"].'</option>';  
      }  
      return $output;
 }

 function kelaslain($koneksi)  {

      $id = $_GET['id_siswa'];
        $saql = mysqli_query($koneksi,"select * from siswa where id_siswa=$id");
        while($data = mysqli_fetch_array($saql)){ 
            $idkelas = $data['id_siswa'];
            $idm = $data['id_kelas'];            
}
      $output = '';  
      $sql = "select kelas.id_kelas, kelas.alias_kelas from kelas where id_kelas<>$idm ";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_kelas"].'">'.$row["alias_kelas"].'</option>';  
      }  
      return $output;  
}

 function kelassekarang($koneksi)  
 {  
      $id = $_GET['id_siswa'];
      $output = '';  
      $sql = "select kelas.id_kelas, kelas.alias_kelas from kelas join siswa
      on kelas.id_kelas=siswa.id_kelas where siswa.id_siswa=$id";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option selected="" value="'.$row["id_kelas"].'">'.$row["alias_kelas"].'</option>';  
      }  
      return $output;  
 }

 function statusnow($koneksi)  
 {  
      $id = $_GET['id_siswa'];
      $output = '';  
      $sql = "select siswa.id_status, status.nama_status from siswa
      join status on siswa.id_status=status.id_status
      where siswa.id_siswa=$id";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_status"].'">'.$row["nama_status"].'</option>';  
      }  
      return $output;  
 }



}

Class guru
{





 function mapellain($koneksi)  
 {  
     $id = $_GET['id_kb'];
        $safql = mysqli_query($koneksi,"select DISTINCT mapel.id_mapel, mapel.nama_mapel
            from kbm join mapel
            on kbm.id_mapel=mapel.id_mapel
            join kelas
            on kbm.id_kelas=kelas.id_kelas
            join guru
            on kbm.id_guru=guru.id_guru where kbm.id_kb=$id");
        while($da = mysqli_fetch_array($safql)){ 
            $idm = $da['id_mapel'];            
}
      $output = '';  
      $result = mysqli_query($koneksi, "select * from mapel where mapel.id_mapel<>$idm");
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_mapel"].'">'.$row["nama_mapel"].'</option>';  
      }  
      return $output;
 }

 function kelaslain($koneksi)  {

      $id = $_GET['id_kb'];
      $saql = mysqli_query($koneksi,"select kelas.id_kelas, kelas.alias_kelas from kelas join kbm
      on kelas.id_kelas=kbm.id_kelas
      join guru on kbm.id_guru=guru.id_guru
      where kbm.id_kb=$id");
        while($data = mysqli_fetch_array($saql)){ 
            $idm = $data['id_kelas'];            
}
      $output = '';  
      $sql = "select kelas.id_kelas, kelas.alias_kelas from kelas where id_kelas<>$idm ";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_kelas"].'">'.$row["alias_kelas"].'</option>';  
      }  
      return $output;  
}

 function kelassekarang($koneksi)  
 {  
      $id = $_GET['id_kb'];
      $output = '';  
      $sql = "select kelas.id_kelas, kelas.alias_kelas from kelas join kbm
      on kelas.id_kelas=kbm.id_kelas
      join guru on kbm.id_guru=guru.id_guru
       where kbm.id_kb=$id";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option selected="" value="'.$row["id_kelas"].'">'.$row["alias_kelas"].'</option>';  
      }  
      return $output;  
 }

 function mapelsekarang($koneksi)  
 {  
      $id = $_GET['id_kb'];
      $output = '';  
      $sql = "select DISTINCT mapel.id_mapel, mapel.nama_mapel
            from kbm join mapel
            on kbm.id_mapel=mapel.id_mapel
            join kelas
            on kbm.id_kelas=kelas.id_kelas
            join guru
            on kbm.id_guru=guru.id_guru where kbm.id_kb=$id";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_mapel"].'">'.$row["nama_mapel"].'</option>';  
      }  
      return $output;  
 }

 function fill_kbm($koneksi)
{
      $idguruaktif = $_SESSION['nik'];
      $output = '';  
      $sql = "select kbm.id_kb, concat(kelas.alias_kelas, ' - ' ,mapel.nama_mapel) as namakbm from mapel join kbm on mapel.id_mapel = kbm.id_mapel join kelas on kbm.id_kelas = kelas.id_kelas where kbm.id_guru=$idguruaktif";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_kb"].'">'.$row["namakbm"].'</option>';  
      }  
      return $output;  
}

}


class kls{

function kelaslain($koneksi)  {

      $kls = $_POST['kelas'];
        $saql = mysqli_query($koneksi,"select kelas.id_kelas, kelas.alias_kelas from kelas where kelas.id_kelas<>$kls");
        while($data = mysqli_fetch_array($saql)){ 
            $idkelas = $data['id_siswa'];
            $idm = $data['id_kelas'];            
}
      $output = '';  
      $sql = "select kelas.id_kelas, kelas.alias_kelas from kelas where id_kelas<>$idm ";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_kelas"].'">'.$row["alias_kelas"].'</option>';  
      }  
      return $output;  
}

 function kelasaktif($koneksi)  
 {  
      $kls = $_POST['kelas'];
      $output = '';  
      $sql = "select kelas.id_kelas, kelas.alias_kelas from kelas where kelas.id_kelas=$kls";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option selected="" value="'.$row["id_kelas"].'">'.$row["alias_kelas"].'</option>';  
      }  
      return $output;  
 }


 function walisekarang($koneksi)  
 {  
      $id = $_GET['id_kelas'];
      $output = '';  
      $sql = "select guru.id_guru, guru.nama_guru from guru
      join wali on guru.id_guru=wali.id_guru where wali.id_kelas='$id'
      ";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option selected="" value="'.$row["id_guru"].'">'.$row["nama_guru"].'</option>';  
      }  
      return $output;  
 }


 function walilain($koneksi)  {

    $id = $_GET['id_kelas'];
      $output = '';  
      $sql = "select guru.id_guru, guru.nama_guru from guru";  
      $result = mysqli_query($koneksi, $sql);  
      while($data = mysqli_fetch_array($result))  
      {  
            $idg = $data['id_guru'];            
}
      $output = '';  
      $sql = "select guru.id_guru, guru.nama_guru from guru where guru.id_guru<>$idg ";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_guru"].'">'.$row["nama_guru"].'</option>';  
      }  
      return $output;  
}



}


class count

{

 function siswa($koneksi)  
 {  
      $sql = "select count(id_siswa) as jumlah from siswa";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
        echo $row['jumlah'];
      }  
 }

 function guru($koneksi)  
 {  
      $sql = "select count(id_guru) as jumlah from guru";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
        echo $row['jumlah'];
      }  
 }

 function admin($koneksi)  
 {  
      $sql = "select count(admin) as jumlah from admin";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
        echo $row['jumlah'];
      }  
 }
 
  function kb($koneksi)  
 {  
      $sql = "select count(id_kb) as jumlah from kb";  
      $result = mysqli_query($koneksi, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
        echo $row['jumlah'];
      }  
 }



}


?>

