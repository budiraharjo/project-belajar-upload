<?php
session_start();
if(isset($_SESSION['nama']) && isset($_SESSION['identitas'])){
    header('location: langkah2.php');
};
include 'include.php';
sambung();
$anoun=mysql_fetch_array(mysql_query("select anoun from sistem"));
?>
<!-- COPYRIGHT 2012 BY SUCIPTO A.K.A ShowCheap NGAWI -->
<html lang='en'>
<head>
    <title>Pendaftaran Siswa Baru [Online] - SMKN 1 Ngawi </title>
    <link rel='stylesheet' href='gaya.css'>
    <link rel="Shortcut Icon" href="img/favicon.ico" type="image/x-icon" />
    <script type='text/javascript' src='jquery.js'></script>
    <script type='text/javascript' src='trik.js'></script>
</head>
<body>
<table border='0' cellpadding='5' cellspacing='2' id='utama' align='center' width='700'>
    <tr>
        <td id='header' class='header' height='200'><!--header--></td>
    </tr>
    <tr>
        <td>
        <div style='background-color: silver; padding: 4;' id='div_menu'><table width='100%' style='font-size: 12px;'><tr><td width='55'>Pengumuman:</td><td> <marquee onmouseover='this.stop();' onmouseout='this.start();'><?php echo $anoun['anoun']; ?></td></tr></table></marquee></div>
         <!-- keterangan di atas -->
        </td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td><div style='background: orange; border: groove; font-size: 14px; font-family: time news roman;' align='center' id='topmenu'><a href='http://www.smkn1-ngw.sch.id'>Home</a> | Info | Panduan | Hubungi Kami | <a onclick="window.location='langkah2.php'" href='#'>Sudah Terdaftar</a></div>
            <div class='form'  id='inputan'>
            <!-- mulai form isian -->
             <form action='langkah1.php' method='post' class='form' >
              <table border='0' cellpadding='5' cellspacing='0' class='form'>
              <tr><td colspan='3' align='center'><img src='img/icon/plontos.png' width='22' height='22' title='Data Siswa'>   DATA SISWA</td></tr>
                <tr>
                    <td><a name='formulir'>Nama</a></td>
                    <td>:</td>
                    <td><input type='text' name='nama' size='50'> <b style='color: red; font-size: 20px;'>*</b></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type='radio' name='jkel' value='LAKI-LAKI'>Laki Laki  <input type='radio' name='jkel' value='PEREMPUAN'>Perempuan <b style='color: red; font-size: 20px;'>*</b></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type='text' name='tem_lahir' size='25'></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir: </td>
                    <td>:</td>
                    <td>
                        <select name='tgl'>
                            <option value='#'>Tanggal</option>
                            <?php for ($tgl=1; $tgl <= 31; $tgl++){
                             echo  "<option value='".$tgl."'>".$tgl."</option> " ;
                            };
                            ?>
                        </select> /
                        <select name='bln'>
                            <option value='#'>Bulan</option>
                            <?php for ($tgl=1; $tgl <= 12; $tgl++){
                             echo  "<option value='".$tgl."'>".$tgl."</option> " ;
                            };
                            ?>
                        </select> /
                        <select name='tahun'>
                            <option value='#'>Tahun</option>
                            <?php for ($tgl=1990; $tgl <= 2000; $tgl++){
                             echo  "<option value='".$tgl."'>".$tgl."</option> " ;
                            };
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gol Darah</td>
                    <td>:</td>
                    <td><input type='radio' name='gol_drh' value='A'>A <input type='radio' name='gol_drh' value='B'>B <input type='radio' name='gol_drh' value='AB'>AB <input type='radio' name='gol_drh' value='O'>O <input type='radio' name='gol_drh' value='(Kosong)'><i>(Tidak Tahu)</i></td>
                </tr>
                <tr>
                    <td valign='top'>Berat / Tinggi Badan</td>
                    <td valign='top'>:</td>
                    <td><input type='text' name='berat' size='3'> Kg / <input type='text' name='tinggi' size='3'> Cm</td>
                </tr>
                <tr>
                    <td valign='top'>Alamat Lengkap</td>
                    <td valign='top'>:</td>
                    <td><textarea name='alamat' cols='50' rows='5'></textarea> <b style='color: red; font-size: 20px;'>*</b></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td><input type='text' name='k_pos' size='5'></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><select name='agama'>
                        <option value='(Kosong)'>Agama</option>
                        <option value='ISLAM'>Islam</option>
                        <option value='KRISTEN'>Kristen</option>
                        <option value='HINDU'>Hindu</option>
                        <option value='BUDHA'>Budha</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>:</td>
                    <td><input type='text' name='asal_sek' size='50'> <b style='color: red; font-size: 20px;'>*</b></td>
                </tr>
                <tr>
                    <td>Alamat Sekolah</td>
                    <td>:</td>
                    <td><input type='text' name='alamat_sek' size='50'> <b style='color: red; font-size: 20px;'>*</b></td>
                </tr>
                <tr>
                    <td>Tahun Lulus</td>
                    <td>:</td>
                    <td><select name='thn_lls'>
                            <option value='(Kosong)'>Tahun Lulus</option>
                            <?php for ($tgl=2000; $tgl <= 2011; $tgl++){
                             echo  "<option value='".$tgl."'>".$tgl."</option> " ;
                            };
                            ?>
                        </select> <b style='color: red; font-size: 20px;'>*</b></td>
                </tr>
                <tr>
                    <td>No Ijazah</td>
                    <td>:</td>
                    <td><input type='text' name='no_ijazah' size='25'></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td>:</td>
                    <td><input type='text' name='hp' size='12'></td>
                </tr>
                <tr>
                    <td>E-Mail</td>
                    <td>:</td>
                    <td><input type='email' name='email' size='25'></td>
                </tr>
                <tr>
                    <td>Pilih Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name='jurusan1'>
                            <option value='(Kosong)'>Pilihan Pertama</option>
                            <option value='AP'>Administrasi Perkantoran</option>
                            <option value='AK'>Akuntansi</option>
                            <option value='PM'>Pemasaran</option>
                            <option value='TKJ'>Tehnik Komputer Jaringan</option>
                            <option value='TEI'>Teknik Elektronika Industri</option>
                        </select>
                        <select name='jurusan2'>
                            <option value='(Kosong)'>Pilihan Kedua</option>
                            <option value='AP'>Administrasi Perkantoran</option>
                            <option value='AK'>Akuntansi</option>
                            <option value='PM'>Pemasaran</option>
                            <option value='TKJ'>Teknik Komputer Jaringan</option>
                            <option value='TEI'>Teknik Elektronika Industri</option>
                        </select>
                     <b style='color: red; font-size: 20px;'>*</b></td>
                </tr>
                <tr>
                <td>Nilai UN</td>
                <td> : </td>
                    <td>
                        <table border='0' cellpadding='3' cellspacing='0' class='tampil'>
                            <tr>
                                <td class='nilai_un' align='center'>MTK</td><td class='nilai_un' align='center'>BIN</td><td class='nilai_un' align='center'>BIG</td><td align='center' class='nilai_un'>IPA</td>
                            </tr>
                            <tr>
                                <td><input type='text' name='mtk' size='2'></td><td><input type='text' name='bin' size='2'><td><input type='text' name='big' size='2'></td><td><input type='text' name='ipa' size='2'> <b style='color: red; font-size: 20px;'>*</b></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr><td colspan='3' align='center'><hr><img src='img/icon/ortu.png' width='22' height='22' title='Data Siswa'> DATA ORANG TUA / WALI MURID</td></tr>
                <tr>
                    <td>Ayah</td>
                    <td>:</td>
                    <td><input type='text' name='ayah' size='50'> <b style='color: red; font-size: 20px;'>*</b></td>
                </tr>
                <tr>
                    <td>Ibu</td>
                    <td>:</td>
                    <td><input type='text' name='ibu' size='50'></td>
                </tr>
                <tr>
                    <td>Wali</td>
                    <td>:</td>
                    <td><input type='text' name='wali' size='50'></td>
                </tr>
                <tr>
                    <td valign='top'>Alamat Lengkap</td>
                    <td valign='top'>:</td>
                    <td><textarea name='alamat_wali' cols='50' rows='5'></textarea></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td>:</td>
                    <td><input type='text' name='hp_wali' size='12'></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><input type='text' name='kerja_wali' size='25'></td>
                </tr>
                <tr>
                    <td colspan='3'><input type='radio' name='setuju' onclick="daftar.disabled=false;"><font size='2'><i><b>Saya setuju untuk mendaftar di SMKN 1 Ngawi dan telah memasukkan data dengan sebenar benarnya.</b></i></font></td>
                </tr>
                <tr><td colspan='3' align='center'><input class='inpuoet' name='daftar' type='submit' value='Daftar' style='background-color: #ffa20f;' disabled='disabled'> <input style='background-color: #ffa20f;' onclick="daftar.disabled=true;" type='reset' value='Ulangi'></td></tr>
              <tr>
                <td colspan='4'>
                     <b style='color: red; font-size: 20px;'>*</b> : Wajib di Isi 
                </td>
              </tr>
              </table>
             </form>
             
            <!--akhir form isian -->    
            </div>
        </td>
    </tr>
    <tr><td><div style='font-size: 10px;'>Copyright &copy; SMKN 1 Ngawi <?php echo date('Y'); ?> By: <a href='http://www.sucipto.net' title='Sucipto'>ShowCheap</a></div></td></tr>
</table>

</body>
</html>
<!-- COPYRIGHT 2012 BY SUCIPTO A.K.A ShowCheap NGAWI -->