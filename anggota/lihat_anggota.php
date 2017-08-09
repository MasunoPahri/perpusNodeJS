<?php

//include "../buku/link.php";
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php

$per_halaman	=10;
$hal			= isset($_GET['hal']) ? $_GET['hal'] : "";


if ($hal==""||$hal==1) {
	$awal=0;
} else {
	$awal=($hal*$per_halaman)-$per_halaman;
}
$batas=$per_halaman;
//$batas=($hal*2)+$per_halaman;

$query=mysql_query("SELECT * FROM data_anggota ORDER BY id LIMIT $awal,$batas", $konek);
$query2=mysql_query("SELECT * FROM data_anggota");
$jumlah_buku=mysql_num_rows($query2);
$jum_halaman=ceil($jumlah_buku/$per_halaman);
//echo $jum_halaman;
echo "<center><font size='3px'>Halaman : </font>";
for ($i=1; $i<=$jum_halaman; $i++) {
	if ($i==$hal) {
	echo "<font size='4px' color='green'>[<a href='?page=anggota&hal=$i'><b>$i</b></a>]  </font>";
	} else {
	echo "<font size='2px' color='red'><a href='?page=anggota&hal=$i'><b>$i</b></a> </font>";
	}
}
echo "</center>";
?>
<hr>
<table class="table-data" border=1 width=100% border=0 >
<tr><td class="td-data" colspan="7"><b>Jumlah Keseluruhan Anggota : <?php echo $jumlah_buku; ?> orang</b></td></tr>
<tr><td class="head-data">Nama</td><td class="head-data">JK</td><td class="head-data">Klas</td><td class="head-data">T T L</td><td class="head-data">Alamat</td><td class="head-data">Edit</td><td class="head-data">Hapus</td></tr>
<?php
while ($hasil=mysql_fetch_array($query)) {
echo "<tr><td class='pinggir-data'>$hasil[2]</td>
      <td class='td-data'>$hasil[3]</td>
	  <td class='td-data'>$hasil[4]</td>
	  <td class='td-data'>$hasil[5]</td>
	  <td class='td-data'>$hasil[6]</td>
	  <td class='td-data'><a href='' onclick='return confirm(\"Data Anggota Ndak Bisa Diedit\")'>Edit</a></td>
	  <td class='td-data'><a href='' onclick='return confirm(\"Data Anggota Ndak Bisa Dihapus\")'>Hapus</a></td></tr>";
}
?>
</table>