<?php
require_once ('koneksi.php');
include ("class_lib.php");

    $action = $_REQUEST['action'];
        if($action=="showAll"){
           $sql= "SELECT mapel.nama_mapel, kelas.alias_kelas from kbm join mapel on kbm.id_mapel=mapel.id_mapel
        join kelas on kbm.id_kelas = kelas.id_kelas";
$result= mysqli_query($koneksi,$sql);
    
 //pagination config start
        $rpp = 10; // jumlah record per halaman
        $reload = "dashgur.kbm.php?pagination=true";
        $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
        $tcount = mysqli_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;    
    }else{
        $sql= "SELECT mapel.nama_mapel, kelas.alias_kelas from kbm join mapel on kbm.id_mapel=mapel.id_mapel
        join kelas on kbm.id_kelas = kelas.id_kelas where kbm.id_guru='1' and kbm.id_tahunajar='".$action."'";
$result= mysqli_query($koneksi,$sql);
}
    
 //pagination config start
        $rpp = 10; // jumlah record per halaman
        $reload = "dashgur.kbm.php?pagination=true";
        $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
        $tcount = mysqli_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
        ?>
                            <table class="table"> 
                                <tbody>

                                    <tr class="heading-td">
                                        <td>NO</td>
                                        <td>Mata Pelajaran</td>
                                        <td>Kelas</td>
                                        <td>Jumlah Siswa</td>
                                        <td>Opsi</td>
                                        </tr>
 <?php                        if (mysqli_num_rows($result) > 0){

                    while(($count<$rpp) && ($i<$tcount)) {
                        mysqli_data_seek($result,$i);
                        $data = mysqli_fetch_array($result);
                    ?>
                    <tr>
        <tr>
            <td><?php  echo ++$no_urut; ?></td>

            <td><?php echo $data['nama_mapel']; ?></td>
            <td><?php echo $data['alias_kelas']; ?></td>
            <td><?php echo $data['alias_kelas']; ?></td>

    <td>
    <a class="edit" href="nilai_siswa.php?id_siswa=<?php echo $row['id_siswa']; ?>">Lihat</a> |
    <a href="siswa_delete.php?id_siswa=<?php echo $row['id_siswa']; ?>">Hapus</a>    </td>

       <?php
                        $i++; 
                        $count++;
                    
                }
                }
                    ?>
                                </tbody>
                            </table>
                        </div>


