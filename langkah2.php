<?php
session_start();
include 'include.php';
//logout
if($_GET['sesi']=='selesai'){
   loging($_SESSION['nama']." Keluar");
   unset($_SESSION['nama']);
   unset($_SESSION['identitas']);
   header('location: index.php');
};
//chek jika belum ada sesi
if(empty($_SESSION['nama']) && empty($_SESSION['identitas'])){
    header('location: masuk.php');
};



//mendefinisikan sesi menjadi value
$nama=$_SESSION['nama'];
$iden=$_SESSION['identitas'];
if($_GET['confirm']=='ok'){
    echo "<script type='text/javascript'>alert('Terimakasih ".$_SESSION['nama'].", Anda Telah terdaftar dalam sistem Kami !!')</script>";
    loging($_SESSION['nama']." Langkah 2");    
    sambung();    
    mysql_query("update siswa set langkah='2' where no_reg='$iden'");
};



//upload foto//
if ($_POST['unggah'] && !empty($_FILES['the_file'])){
    $file_name = $_FILES['the_file']['name']; //Membaca nama file 
    $size = $_FILES['the_file']['size']; //Membaca ukuran file 
    $file_type = $_FILES['the_file']['type']; //Membaca jenis file 
    $dir="img/upload";// Nama Folder 
    $source = $_FILES['the_file']['tmp_name']; //Source tempat upload file sementara 
    $direktori = "$dir/$file_name";
    $file_path="upload/".$iden.substr($file_name, -4);
    //echo $file_type;
    //echo $size;
    $awas=getimagesize($source);
    if($awas){
      if($file_type == 'image/png' or $file_type == 'image/jpeg' or $file_type == 'image/gif' or $file_type == 'image/pjpeg' ){
          if (move_uploaded_file($source,$file_path)){
          loging($_SESSION['nama']." Unggah Foto");
          echo "<script type='text/javascript'>alert('Foto Berhasil di uplad')</script>";
          sambung();
          mysql_query("update siswa set foto='$file_path', langkah='3' where no_reg='$iden'");
          }else { 
          echo "<script type='text/javascript'>alert('Foto Gagal Di Upload')</script>"; 
          }
      }else{ echo "<script type='text/javascript'>alert('Bukan File Gambar !!')</script>";}
    }else{
      echo "<script type='text/javascript'>alert('Bukan File Gambar !!')</script>";
    }
};
//upload foto//
sambung();
$umum=mysql_fetch_array(mysql_query("select anoun from sistem"));
?>
<html>
<head>
    <title>PSB ONLINE SKANSA NGAWI - <?php echo $nama; ?></title>
    <link rel='stylesheet' href='gaya.css'>
    <link rel="Shortcut Icon" href="img/favicon.ico" type="image/x-icon" />
</head>
<body>
    
<table width='750' cellpadding='3' cellspacing='2' border='1' align='center' id='profil'>
    <tr>
        <td colspan='3' height='200' id='header'>
        <!-- header -->
        <!-- header -->
        </td>
    </tr>
    <tr>
        <td colspan='3' id='umum'>
            <table>
                <tr> 
                    <td width='55'>Pengumuman: </td><td width='750' style='font-size: 12px;'><marquee onmouseover='this.stop();' onmouseout='this.start();'><?php echo $umum['anoun']; ?></marquee></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td rowspan='1' width='155' valign='top' id='kiri'>
            <table border='0' cellspacing='0' cellpadding='3' id='p_kiri'>
                <tr>
                    <td style='border: groove ;'>
                        <?php
                         sambung();
                         $sq=mysql_query("select foto from siswa where no_reg='$iden'");
                         $f=mysql_fetch_array($sq);
                         echo "<img src='".$f['foto']."' width='150' height='188'>";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><hr><?php echo $nama; ?></td>
                </tr>
                <tr>
                    <td>No Reg:</td>
                </tr>
                <tr>
                    <td><b><?php echo $iden; ?></b></td>
                </tr>
                <tr>
                  <td><hr>
                     <div>
                        <button style='width: 150px;' onclick="window.open('panitia/pesan.php?mode=kirim','popupwindow','scrollbars=yes, width=400,height=400');">
                           <div align='left'><img src='img/icon/amplop.png' width='16' height='16'>Tanya</div></a>
                        </button>
                     </div>
                  </td>
                </tr>
                <tr>
                  <td>
                     <button style='width: 150px;' onclick="window.open('print-form.php?print=ya&no_reg=<?php echo $iden; ?>','popupwindow','scrollbars=yes, width=750,height=600');">
                        <div align='left'><img src='img/icon/print.png' width='16' height='16'>Cetak Formulir</div>
                     </button>
                  </td>
                </tr>
                <tr>
                  <td>
                     <button style='width: 150px;' onclick="window.open('print-form.php?no_reg=<?php echo $iden; ?>','popupwindow','scrollbars=yes, width=750,height=600');">
                        <div align='left'><img src='img/icon/form.png' width='16' height='16'>Lihat Formulir</div>
                     </button>
                  </td>
                </tr>
                <tr>
                  <td>
                     <div>
                        <button style='width: 150px;' onclick="window.location='?sesi=selesai'">
                           <div align='left'><img src='img/icon/keluar.png' width='16' height='16'>Keluar</div></a>
                        </button>
                     </div>
                  </td>
                </tr>
                <tr><td><!--asdf--></td></tr>
            </table>
        </td>
        <td rowspan='0' valign='top'>
        <!-- KETOKE AWITE KO KENE>  -->
         <table width='100%' border='0'>
            <tr>
                <td>
                
                    <div id='status' align='center'>
                    <?php
                        sambung();
                        $sikil=mysql_query("select status from siswa where no_reg='$iden'");
                        $chek=mysql_fetch_array($sikil);
                        //tdak di trima
                        //echo $chek['status'];
                        if ($chek['status']=='0'){
                            echo "<img src='img/icon/0.png'><br><font color='red'><b>Maaf, Anda Belum Di Terima !!<b></font>";
                        //status pending                        
                        }elseif($chek['status']=='1'){
                            echo "<img src='img/icon/1.png'><br><font color='orange'><b>Data Anda Dalam Proses Konfirmasi Oleh Petugas Kami, Mohon tunggu dan Chek Kembali Kebenaran Data Anda !!<b></font>";
                        //diterima                        
                        }elseif($chek['status']=='2'){
                            echo "<img src='img/icon/2.png'><br><font color='#66cc00'><b>Selamat !! <br>Anda Diterima di SMKN 1 NGAWI, Silahkan Lanjutkan Proses Pendaftaran di SMKN 1 NGAWI.<b></font>";
                        }else{
                            echo "<img src='img/icon/melet.png'><br><font color='blue'><b>Data Tidak ditemukan.<b></font>";
                        }
                    ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td><hr>
                  <!-- body -->
                  <?php
                  //**********Lihat Siswa*****************//
                     //if($_GET['mode']=='siswa'){//
                         sambung();
                         $saya=$_SESSION['identitas'];
                         $sel=mysql_query("select * from pesan where kepada='$saya'");
                         echo "<table width='700' cellpadding='5' cellspacing='3' border='0' align='center'>";
                             while($x=mysql_fetch_array($sel)){ ?>
                                 <tr>
                                     <td valign='top' width='120' class='inbux' style='background-color: lightblue;'>
                                         <img src='img/icon/amplop.png' width='22' height='22' title='Dari Peserta'><a class='link' style='color: green;' href='#'><?php echo $x['dari']; ?> : </a>
                                     </td>
                                 </tr>            
                                 <tr>
                                     <td class='inbux'>
                                         <?php echo $x['isi_pesan']; ?><br><br>
                                         <a class='link' href="panitia/pesan.php?mode=jawab&dari=<?php echo $saya; ?>&kepada=<?php echo $x['dari']; ?>&pesan=<?php echo $x['id']; ?>"><img src='img/icon/chat.png' width='22' height='22' title='Balas Pesan ini'></a>
                                         <a class='link' href="panitia/pesan.php?mode=hapus&id=<?php echo $x['id']; ?>"><img src='img/icon/hapus.png' width='22' height='22' title='Hapus Pesan ini'></a>
                                     
                                     </td>
                                     <td width='150' valign='top'>
                                         </td>
                                 </tr>
                             <?php }
                         echo "</table>";       
                         //};//
                  
                  ?>
                  <!-- body -->
                </td>
            </tr>
            <tr>
                <td colspan='4'><hr>Ganti Foto</td>
            </tr>
            <tr>
                <td>
                    <div id='form_upload'>
                        <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post' enctype='multipart/form-data' onsubmit='print.disabled=false;'>
                            <input type='file' name='the_file' onclick='unggah.disabled=false;'><br>
                            <input type='submit' name='unggah' value='Unggah Foto' disabled='disabled'>
                        </form>
                    </div>
                </td>
            </tr>
         </table>
       
        </td>
    </tr>
    <tr>
        <td colspan='2' class='umum'>Copyright &copy; SMKN 1 Ngawi By: ShowCheap</td>
    </tr>
</table>    
    
</body>
</html>