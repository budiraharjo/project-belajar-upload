<?php
session_start();
include 'inti.php';
//validasi form login
sambung();
$pencet=$_POST['tmbl'];
$nama=mysql_real_escape_string($_POST['nama']);
$kunci=md5($_POST['kunci']);
//jika menekan tmbol login & nama tidak kosong
if ($pencet != '' && $nama != '' && $kunci != ''){
    //jalankan query
    
    $s=mysql_query("select * from panitia where nama='".$nama."' and kunci='".$kunci."'");
    //cek banyak data
    $c=mysql_num_rows($s);
    //jika data cocok
    if($c == '1'){
      $t= mysql_fetch_array($s);
      $_SESSION['panitia']=$t['nama'];
      //echo $t['nama'];
      loging("User ".$nama." (Berhasil login)");
      $login=$t['login'] + 1;
      mysql_query("update panitia set login='$login', sedang_login='ya' where nama='$nama'");
    }else{
        echo "<script type='text/javascript'>alert('Nama dan Kunci tidak cocok !');</script>";
        loging("User ".$nama." (Login Gagal)");
    }
};
//
if(isset($_SESSION['panitia'])){
   header('location: utama.php'); 
}

echo "
<!-- COPYRIGHT 2012 BY SUCIPTO A.K.A ShowCheap NGAWI -->
<html lang='en'>
<head>
    <title>Panitia PSB Online SMKN 1 NGAWI</title>
    <link rel='stylesheet' href='../gaya.css'>
    <link rel='Shortcut Icon' href='../img/favicon.ico' type='image/x-icon' />
    <script type='text/javascript' src='../jquery.js'></script>
    <script type='text/javascript' src='../trik.js'></script>
</head>
<body>
<center>

<div align='center' id='login' width='500'>
<img src='../img/icon/gembok.png'><br><b>Silahkan Login Terlebih Dahulu !</b>

    <div class='login'>
    <form action='' method='POST'>
        <img src='../img/icon/nulis.png'> Nama : </br>
        <input type='text' name='nama'></br>
        <img src='../img/icon/kunci.png'>Kunci: </br>
        <input type='password' name='kunci'></br>
        <input class='submit' type='submit' value='Masuk' name='tmbl'>
    </form>
    <a href='/psb'><img src='../img/icon/omah.png'></a>
    </div>
</div>
</center>
</body>
</html>
";
?>