<?php
//nama file : home.php
session_start();
if (isset($_SESSION['username'])&&($_SESSION['pass'])){
?>
<?php
	//koneksi database
	include "config.php";
	$username=$_SESSION['username'];
	$pass=$_SESSION['pass'];
	$sql="select * from login_karyawan where username='$username' and pass='$pass'";
	$result=mysql_query($sql);

	if($data=mysql_fetch_array($result)){
	?>
<html>
<head>
<title>Toko HDHTKAWW</title>
<style>
*{padding:0px; margin:0px;}
body{background:#eeeeee;}
#utama{width:900px; height:100%; background:white; margin:0px auto;}
#atas{width:900px; height:50px; background:blue; padding:0px; margin:0px;}
#tengah{width:880px; height:80%; padding:10px; margin:0px;}
#bawah{width:880px; height:30px; background:blue; padding:15px 10px 5px 10px; margin:0px; text-align:center; font:12px "Arial"; color:white;}
#kiri{width:200px; float:left;}
#kanan{width:685px; float:right; padding:0px 15px 0px 0px;}
.logo{font:24px "Calibri"; color:yellow; padding:10px; font-weight: bold;}
.link{padding:10px; margin:5px; color:yellow; font:15px "Arial"; float:right; border-radius:7px;}
.link:hover{background:yellow; color:blue; font-weight: bold;}
</style>
</head>
<body>
<div id="utama">
    <div id="atas">
       <div id="kiri"><div class="logo">Toko BAROKAH</div>
       </div>
       <div id="kanan">
       <a href="pelanggan_view.php" target="tengah"><div class="link">Home</div></a>
       <a href="pelanggan_view.php" target="tengah"><div class="link">Pelanggan</div></a>
       <a href="produk_view.php" target="tengah"><div class="link">Produk</div></a>
       <a href="pemasok_view.php" target="tengah"><div class="link">Pemasok</div></a>
       
       </div>
    </div>
    <div id="tengah">
    <iframe name="tengah" src="pelanggan_view.php" width="100%" height="100%" frameborder="0"></iframe>
    </div>
    <div id="bawah">
    Copyright &copy <b>2020</b> By. <b>Tiara WD</b>
    </div>
</div>
<?php

	}else{
		echo "<center><div id=\"ket\">Maaf Username atau password Salah!<br> Silahkan klik <a href=\"login.php\">disini</a> untuk kembali !</div>";
	}
} else {
	echo "<center><div id=\"ket\">Anda Belum <a href=\"login.php\">Login</a></div>";
}
?>
</body>
</html>
