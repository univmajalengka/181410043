<?php
//nama file : ceklogin.php
session_start();
$username=$_POST['username'];
$pass=$_POST['pass'];
if(empty($username)||empty($pass)){
?>
<meta http-equiv="refresh" content="1;url=login.php">
<?php
} else {
$passw=md5($pass);
$_SESSION['username']="$username";
$_SESSION['pass']="$passw";
?>
<meta http-equiv="refresh" content="1;url=index.php">
<?php } ?>
