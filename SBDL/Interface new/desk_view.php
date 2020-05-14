<style>
body{font:12px "Arial";}
h2{font:24px "Arial";}
th{background:blue; color:white;}
td{background:white; color:black;}
</style>
<body>
<h2>Deskripsi Pemesanan</h2>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
<th>No.</th>
<th>ID Pemesanan</th>
<th>ID produk</th>
<th>Jumlah Beli</th>
<th>Jumlah Harga</th>
<th colspan="2" width="80">Aksi</th>
</tr>
<?php
include "config.php";
$sql="select * from t_desk_pemesanan order by id_pemesanan asc";
$result=mysql_query($sql);
$no=1;
while($data=mysql_fetch_array($result)){
?>
<tr>
<td align="center"><?php echo $no ?>.</td>
<td><?php echo $data['id_pemesanan'] ?></td>
<td><?php echo $data['id_produk'] ?></td>
<td><?php echo $data['jumlah_beli'] ?></td>
<td><?php echo $data['jumlah_harga'] ?></td>
<td align="center" width="40"><a href="desk_edit.php?id=<?php echo $data['id_pemesanan'] ?>" title="Edit Data Deskripsi Pemesanan">Edit</a></td>
<td align="center" width="40"><a href="desk_hapus.php?id=<?php echo $data['id_pemesanan'] ?>" title="Hapus Data Deskripsi Pemesanan">Hapus</a></td>
</tr>
<?php
$no++;	
}
?>
</table>
</body>