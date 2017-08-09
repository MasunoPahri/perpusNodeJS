<?php
include "../include/koneksi_db.php";
include "../buku/link.php";

$id		= isset($_GET['id']) ? $_GET['id'] : "";

if ($id == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=lihat_buku.php'>";
} else {
	$query		= mysql_query("SELECT * FROM data_buku WHERE id=$id", $konek);
	$hasil		= mysql_fetch_array($query);
	$id  		= $hasil['id'];
	$jdl 		= $hasil['judul'];
	$pengarang	= $hasil['pengarang'];
	$t_terbit	= $hasil['th_terbit'];
	$penerbit	= $hasil['penerbit'];
	$isbn		= $hasil['isbn'];
	$kode		= $hasil['kode_klas'];
	$jum 		= $hasil['jumlah_buku'];
	$lok		= $hasil['lokasi'];
	$asal		= $hasil['asal'];

?>

<form method="post" action="?page=act_edit_buku">
<table width=100% border=1 class="table-data">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<tr><td class="head-data" colspan="2">Edit Data Buku : <?php echo $jdl; ?></td></tr>
<tr><td class="pinggir-data">Judul Buku</td>
<td class="pinggir-data"><input type="text" size="55" name="judul" value="<?php echo $jdl; ?>"></td></tr>
<tr><td class="pinggir-data">Pengarang</td>
<td class="pinggir-data"><input type="text"  size="35" name="pengarang" value="<?php echo $pengarang; ?>"></td></tr>
<tr><td class="pinggir-data">Tahun Terbit</td>
<td class="pinggir-data"><input type="text" size="15"name="terbit" value="<?php echo $t_terbit; ?>"></td></tr>
<tr><td class="pinggir-data">Penerbit</td>
<td class="pinggir-data"><input type="text" size="55" name="penerbit" value="<?php echo $penerbit; ?>"></td></tr>
<tr><td class="pinggir-data">ISBN</td>
<td class="pinggir-data"><input type="text" size="20" name="isbn" value="<?php echo $isbn; ?>"></td></tr>
<tr><td class="pinggir-data">Kode Klasifikasi</td>
<td class="pinggir-data">
<select name="klas">
			<option value="">Kode Klasifikasi</option>
			<optgroup label="Aqidah Akhlaq">
				<option value="AA-Pegangan Guru">Pegangan Guru</option>
				<option value="AA-Teks Siswa">Teks Siswa</option>
				<option value="AA-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Bhs. Arab">
				<option value="BAR-Pegangan Guru">Pegangan Guru</option>
				<option value="BAR-Teks Siswa">Teks Siswa</option>
				<option value="BAR-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Bhs. Indonesia">
				<option value="BIN-Pegangan Guru">Pegangan Guru</option>
				<option value="BIN-Teks Siswa">Teks Siswa</option>
				<option value="BIN-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Bhs. Inggris">
				<option value="BIG-Pegangan Guru">Pegangan Guru</option>
				<option value="BIG-Teks Siswa">Teks Siswa</option>
				<option value="BIG-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Biologi">
				<option value="BIO-Pegangan Guru">Pegangan Guru</option>
				<option value="BIO-Teks Siswa">Teks Siswa</option>
				<option value="BIO-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Ekonomi">
				<option value="EKO-Pegangan Guru">Pegangan Guru</option>
				<option value="EKO-Teks Siswa">Teks Siswa</option>
				<option value="EKO-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Fisika">
				<option value="FSK-Pegangan Guru">Pegangan Guru</option>
				<option value="FSK-Teks Siswa">Teks Siswa</option>
				<option value="FSK-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Fiqih">
				<option value="Fiq-Pegangan Guru">Pegangan Guru</option>
				<option value="Fiq-Teks Siswa">Teks Siswa</option>
				<option value="Fiq-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Geografi">
				<option value="GEO-Pegangan Guru">Pegangan Guru</option>
				<option value="GEO-Teks Siswa">Teks Siswa</option>
				<option value="GEO-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Matematika">
				<option value="MTK-Pegangan Guru">Pegangan Guru</option>
				<option value="MTK-Teks Siswa">Teks Siswa</option>
				<option value="MTK-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Penjaskes">
				<option value="PJK-Pegangan Guru">Pegangan Guru</option>
				<option value="PJK-Teks Siswa">Teks Siswa</option>
				<option value="PJK-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="PKn">
				<option value="PKn-Pegangan Guru">Pegangan Guru</option>
				<option value="PKn-Teks Siswa">Teks Siswa</option>
				<option value="PKn-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Qur'an Hadist">
				<option value="QH-Pegangan Guru">Pegangan Guru</option>
				<option value="QH-Teks Siswa">Teks Siswa</option>
				<option value="QH-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Sejarah">
				<option value="SJR-Pegangan Guru">Pegangan Guru</option>
				<option value="SJR-Teks Siswa">Teks Siswa</option>
				<option value="SJR-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Seni Budaya">
				<option value="SBD-Pegangan Guru">Pegangan Guru</option>
				<option value="SBD-Teks Siswa">Teks Siswa</option>
				<option value="SBD-Penunjang">Penunjang</option>
			</optgroup>	
			<optgroup label="SKI">
				<option value="SKI-Pegangan Guru">Pegangan Guru</option>
				<option value="SKI-Teks Siswa">Teks Siswa</option>
				<option value="SKI-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Tek. Inf. Komunikasi">
				<option value="TIK-Pegangan Guru">Pegangan Guru</option>
				<option value="TIK-Teks Siswa">Teks Siswa</option>
				<option value="TIK-Penunjang">Penunjang</option>
			</optgroup>
			<optgroup label="Buku Kategori Lainnya">
				<option value="Novel">Novel</option>
				<option value="Komik">Komik</option>
				<option value="Pengetahuan Umum">Pengetahuan Umum</option>
				<option value="Komputer">Komputer</option>
				<option value="Pertanian">Pertanian</option>
				<option value="Perkebunan">Perkebunan</option>
				<option value="Peternakan">Perkebunan</option>
			</optgroup>
</select>
</td></tr>
<tr><td class="pinggir-data">Jumlah Buku</td>
<td class="pinggir-data"><input type="text" size="25" name="jum_buku" value="<?php echo $jum; ?>"></td></tr>
<tr><td class="pinggir-data">Lokasi</td>
<td class="pinggir-data"><input type="text" size="25"name="lok" value="<?php echo $lok; ?>"></td></tr>
<tr><td class="pinggir-data">Asal Perolehan</td>
<td class="pinggir-data"><input type="text" size="35" name="asal" value="<?php echo $asal; ?>"></td></tr>
<tr><td class="head-data" colspan="2" align="center">
<input type="submit" value="Update">
</td></tr>
</table>
</form>
<?
}
?>
