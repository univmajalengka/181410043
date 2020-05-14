<html>
<head>
<title>onlineshop</title>
<style>
*{padding:0px; margin:0px;}
body{background:#eeeeee;}
#utama{width:900px; height:100%; background:white; margin:0px auto;}
#atas{width:900px; height:50px; background:orange; padding:0px; margin:0px;}
#tengah{width:880px; height:80%; padding:10px; margin:0px;}
#bawah{width:880px; height:30px; background:orange; padding:15px 10px 5px 10px; margin:0px; text-align:center; font:12px "Arial"; color:black;}
#kiri{width:200px; float:left;}
#kanan{width:685px; float:right; padding:0px 15px 0px 0px;}
.logo{font:24px "ALGERIAN"; color:white; padding:10px; font-weight: bold;}
.link{padding:10px; margin:5px; color:white; font:15px "Arial"; float:right; border-radius:7px;}
.link:hover{background:white; color:blue; font-weight: bold;}
</style>
</head>
<body>
<div id="utama">
    <div id="atas">
       <div id="kiri"><div class="logo">TOKOONLINE</div>
       </div>
       <div id="kanan">
       <a href="logout.php" target="tengah"><div class="link">Logout</div></a>
       <a href="desk_view.php" target="tengah"><div class="link">Deskripsi Pemesanan</div></a>
       <a href="konsumen_view.php" target="tengah"><div class="link">Konsumen</div></a>
       <a href="pemesanan_view.php" target="tengah"><div class="link">Pemesanan</div></a>
       <a href="produk_view.php" target="tengah"><div class="link">Produk</div></a>
       <a href="produk_view.php" target="tengah"><div class="link">Home</div></a>

       </div>
    </div>
    <div id="tengah">
    <iframe name="tengah" src="produk_view.php" width="100%" height="100%" frameborder="0"></iframe>
    </div>
    <div id="bawah">
    Copyright &copy <b>2020</b> By. <b>Tiara Wulan Dari</b>
    </div>
</div>
</body>
</html>
