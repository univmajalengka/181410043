<?php
//nama file : index.php
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
	<meta http-equiv="refresh" content="1;url=home.php?menu=tampil&aksi=tampil">
	<?php

	}else{
		?>
		<link rel="stylesheet" href="css/styles.css">
		<center><div id="login-atas">Maaf !!!</div><div id="login-tengah"> Username atau password anda Salah!<br> Silahkan klik <a href="login.php">disini</a> untuk kembali !<p>&nbsp;</div>
		<?php
	}
} else {
	?>
	<link rel="stylesheet" href="css/styles.css">
	<center><div id="login-atas"><B>Maaf !!!</B></div><div id="login-tengah">Program Kami tidak mengenali anda, saat ini Anda Belum Login, silahkan <a href="login.php">Login</a> dulu<p>&nbsp;</div>
	<?php

}
?>