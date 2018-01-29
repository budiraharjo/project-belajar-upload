<?php
session_start();
include 'inti.php';
//keluar//
if($_GET['keluar']=='yo'){ 
    sambung();
    $nama=$_SESSION['panitia'];
    mysql_query("update panitia set sedang_login='tidak' where nama='$nama'");
    unset($_SESSION['panitia']);
    loging($nama." Log Out");
}
//**************Hapus Record Daftar Peserta *************//
if($_GET['hapus']){
    sambung();    
    $noreg=mysql_real_escape_string($_GET['hapus']);
    $hps=mysql_query("delete from biodata_siswa where no_reg='$noreg'");
    if($hps){
        loging($_SESSION['panitia'].", Menghapus ".$noreg);
        echo "<script type='text/javascript'>alert('Data Sudah Dihapus !')</script>";
        echo "<script type='text/javascript'>window.location='utama.php?hal=list'</script>";
    }
 }
////////////////
if(!isset($_SESSION['panitia'])){
    header('location: index.php?login=dulu');
}
?>
<!-- COPYRIGHT 2012 BY SUCIPTO A.K.A ShowCheap NGAWI -->
<html>
<head>
    <title>Panitia PSB Online SMKN 1 NGAWI</title>
    <link rel='stylesheet' href='panitia.css'>
    <link rel='Shortcut Icon' href='../img/favicon.ico' type='image/x-icon' />
    <script type='text/javascript' src='../jquery.js'></script>
    <script type='text/javascript' src='../trik.js'></script>
</head>
<body>
<!-- tabel utama -->
<table id='utama' border='0' cellpadding='3' cellspacing='1' width='900' align='center'>
    <tr>
        <td colspan='5' height='200' valign='top' id='header'>
            <!-- Bagian header -->
        </td>
    </tr>
    <tr>
        <td colspan='5' id='m_atas'>
        <!-- menu atas -->
        <table border='0' width='100%'>
            <tr>
                <td width='25'><a href='utama.php' title='Kembali Ke halaman Utama'><img src='../img/icon/omah.png' width='22' height='22'></a></td>
                <td width='25'><a href='exel.php' title='Unduh Hasil Pendaftaran Sementara'><img src='../img/icon/unduh.svg' width='22' height='22'></a></td>
                <td width='25'><a onclick='window.location="?hal=stat"' href='#' title='Lihat Statistik Pendaftaran'><img src='../img/icon/stat.png' width='22' height='22'></a></td>
                <td width='25'><a onclick='window.location="?hal=pengumuman"' href='#' title='Pengumuman ke Siswa'><img src='../img/icon/mic.png' width='22' height='22'></a></td>
                <td width='25'><a onclick='window.location="?hal=list"' href='#' title='Lihat Pendaftar'><img src='../img/icon/wong.png' width='22' height='22'></a></td>
                <td width='25'><a onclick='window.location="?hal=log"' href='#' title='Lihat Jejak website'><img src='../img/icon/jejak.png' width='22' height='22'></a></td>
                <td width='25'></td>
                <td width='25'></td>
                <td width='25'></td>
                <td width='25'><a href='<?php echo $_SERVER['REQUEST_URI']; ?>' title='Refresh Halaman'><img src='../img/icon/refresh.png'></a></td>
                <td width='50' id='user'>
                <!-- iki bagian pinggir tengen dewe -->
                 <img src='../img/icon/plontos.png' width='16' height='16' title='Anda login sebagai <?php echo $_SESSION["panitia"]; ?>'><b style='color: blue; text-shadow: 0 0 5px;'>&nbsp; <?php echo $_SESSION['panitia']; ?></b>&nbsp;&nbsp;
                 <a href='#' onclick='window.location="?keluar=yo"' title='Keluar'><img src='../img/icon/lawang.png' width='16' height='16'></a>   
                </td>
            </tr>
        </table>           
        <!-- menu atas -->
        </td>
         
    </tr>
    <tr>
        <td width='200' valign='top' id='w_kiri'>
        <!--menu kiri-->
        <table id='m_kiri' width='100%' height='100%'>
            <tr>
                <td><img src='../img/icon/chat.png' width='16' height='16'> <?php hari($sekarang); echo " ".$_SESSION['panitia']." !"; ?></td>
            </tr>
            <tr>
                <td><img src='../img/icon/cal.png' width='16' height='16'> <?php echo date('d M Y'); ?></td>
            </tr>
            <tr>
                <td><img src='../img/icon/jam.png' width='16' height='16'><b id='jam'> <?php waktu(); ?></b></td>
            </tr>
            <tr>
            <?php
            sambung();
            $pnt=$_SESSION['panitia'];
            $asek=mysql_query("select * from pesan where kepada='$pnt' and dibaca='0'");
            $belum=mysql_num_rows($asek);
            ?>
                <td><hr><?php if($belum > '0'){ echo "<b>";} ?><a href='#' onclick="window.open('pesan.php?mode=lihat','popupwindow','scrollbars=yes, width=400,height=500');"><img src='../img/icon/amplop.png' width='16' height='16'> Pesan masuk <?php if($belum > '0'){ echo "( ".$belum." )</b>";} ?></a></td>
            </tr>
            <tr>
                <td><a href='#' onclick="window.open('kunci.php','popupwindow','scrollbars=no, width=345,height=300');"><img src='../img/icon/kunci.png' width='16' height='16'> Ganti Password</a></td>
            </tr>
        </table>
        <!--menu kiri-->
        </td>
        <td colspan='4' valign='top' id='kontainer'>
        <!-- ISi Tengah -->
            <?php
            /////////////// Jika halaman Log /////////
                if($_GET['hal']=='log'){
                    sambung();
                    $q=mysql_fetch_array(mysql_query("select file_log from sistem where id='1'"));
                    echo "<table border='0' width='100%' align='center' style='font-size: 12px;'><tr><td colspan='3'><img src='../img/icon/jejak.png' width='22' height='22'>Log Statistik Website - Jejak Aktifitas website</td><tr>";
                    echo "<tr><td width='50'>&nbsp;</td><td>";
                    buka_log("log/".$q['file_log']);
                    echo "</td>";
                    echo "</table>";
                    putus();
                };
            ////*********** Jika halaman Log ***********//
            //*********** Jika halaman statistik ***********///
                if($_GET['hal']=='stat'){
                    include 'statistik.php';
                };
            ///*********** Jika halaman statistik ***********///
             ///*********** Jika halaman pengumuman ***********///
                if($_GET['hal']=='pengumuman'){
                    sambung();
                    if($_POST['konten']){
                        $umum=mysql_real_escape_string($_POST['konten']);
                        $exe=mysql_query("update sistem set anoun='$umum' where id='1'");
                        if ($exe){
                            loging($_SESSION['panitia']." Mengubah Pengumuman.");
                            echo "<script type='text/javascript'>alert('Berhasil di Umumkan');</script>";
                        }
                    }
                    //--------untuk melihat pengumuman--------//
                    $sam=mysql_query("select anoun from sistem");
                    $last=mysql_fetch_array($sam);
                    ?>
                    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>' method='post'>
                    <table border='1' cellspacing='0' cellpadding='3' width='100%'>
                        <tr>
                            <td><img src='../img/icon/mic.png' width='22' height='22'> Pengumuman</td>
                        </tr>
                        <tr>
                            <td width='100%'>
                                <textarea name="konten" rows="4" cols="30" style="margin-top: 2px; margin-bottom: 2px; height: 68px; margin-left: 2px; margin-right: 2px; width: 671px; "><?php echo $last['anoun']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><input type='submit' value='Umumkan'></td>
                        </tr>
                    </table>
                    </form>
                    <?php
                };
            //*********** Jika halaman pengumuman ***********//
             //*********** Jika halaman pendaftar ***********//
                if($_GET['hal']=='list'){
                    sambung();
                        //keperluan halaman next dll
                        $bts= 30;
                        $hal = $_GET['no'];
                        if (!isset($hal)){
                            $mulai=0;
                            }else{
                            $mulai= $hal * $bts;
                        };
                    $sql=@mysql_query("select * from biodata_siswa order by id DESC");
                    $jdt=mysql_num_rows($sql);
                    $jhal=ceil($jdt/$bts);
                    $daftar=mysql_query("select nama, no_reg, asal_sek from biodata_siswa order by no_reg ASC limit $mulai, $bts");
                    
                    ?>
                    <table id='daftar' cellpadding='3' cellspacing='0' border='1' style='font-size: 12px;' width='100%'>
                        <tr>
                            <td colspan='4'><img src='../img/icon/wong.png' width='22' height='22'> <b>Daftar Peserta PSB Online</b></td></tr>
                        <tr>
                            <td colspan='4'><b>Jumlah Total: <?php echo $jdt; ?></b></td>
                        </tr>
                        <tr>
                            <th width='100'>No Registrasi</th><th width='150'>Nama Pendaftar</th><th width='250'>Asal Sekolah</th><th>Menu</th>
                        </tr>
                        <?php
                        while ($dt=mysql_fetch_array($daftar)){
                            $id=$dt['no_reg'];
                            //echo $dt['no_reg'];
                            echo "
                            <tr>                           
                            <td width='100'>
                                ".$dt['no_reg']."</td>
                                <td width='150'>".$dt['nama']."</td>
                                <td width='250'>".$dt['asal_sek']."</td>
                                <td>
                                    <a href='#' title='Terima Pendaftaran'><img src='../img/icon/centang.png' width='22' height='22'></a>
                                    <a href='#' title='Tidak Diterima'><img src='../img/icon/stop.png' width='22' height='22'></a>
                                     &nbsp;&nbsp; <a title='Hapus Peserta' href='utama.php?hapus=".$dt['no_reg']."' onclick='return confirm(\"Yakin Dihapus?\"); '><img src='../img/icon/hapus.png' width='22' height='22'></a>
                                    <a title='Lihat Detail Peserta' onclick=\"window.open('detail.php?lihat=".$dt['no_reg']."','popupwindow','scrollbars=yes, width=600,height=600');\" href='#'><img src='../img/icon/goleki.png' width='22' height='22'></a>
                                                          
                            </td>
                            </tr>                            
                            ";
                        };
                        ?>
                        <tr>
                            <td colspan='4'><center> <a href='?hal=list&no=<?php echo max($hal-1, 0); ?>'>PREV</a> | <a href='?hal=list&<?php echo "no=".min($hal+1, $jhal-1); ?>'> NEXT</a> </center></td>
                        </tr>
                    </table>
                    
               <?php };
            //*********** Jika halaman pendaftar ***********//
            ?>   
            
        <!-- ISi Tengah -->
        </td>
    </tr>
     <tr>
        <td colspan='5' style='font-size: 10px;' id='kaki'>Copyright &copy; <?php echo date('Y'); ?> SMKN 1 Ngawi by: ShowCheap</td>
    </tr>
</table>
</body>
</html> 