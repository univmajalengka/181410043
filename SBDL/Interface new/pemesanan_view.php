<style>
body{font:12px "Arial";}
h2{font:24px "Arial";}
th{ background:blue; color:white;}
td{ background:white; color:black;}
</style>
<body>
<h2>Data Pemesanan</h2>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
<th>No.</th>
<th>ID Pemesanan</th>
<th>ID Konsumen</th>
<th>Total Biaya</th>
<th>Status</th>
<th>Tanggal</th>
<th colspan="2" width="80">Aksi</th>
</tr>
<?php
include "config.php";
$sql="select * from t_pemesanan order by id_pemesanan asc";
$result=mysql_query($sql);
$no=1;
while($data=mysql_fetch_array($result)){
?>
<tr>
<td align="center"><?php echo $no ?>.</td>
<td><?php echo $data['id_pemesanan'] ?></td>
<td><?php echo $data['id_konsumen'] ?></td>
<td><?php echo $data['total_biaya'] ?></td>
<td><?php echo $data['status'] ?></td>
<td><?php echo $data['tanggal'] ?></td>
<td align="center" width="40"><a href="pemesanan_edit.php?id=<?php echo $data['id_pemesanan'] ?>" title="Edit Data Pemesanan">Edit</a></td>
<td align="center" width="40"><a href="pemesanan_hapus.php?id=<?php echo $data['id_pemesanan'] ?>" title="Hapus Data Pemesanan">Hapus</a></td>
</tr>
<?php
$no++;	
}
?>
</table>
</body>