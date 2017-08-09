<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/fungsi2.php"; //memanggil file fungsi.php

//variabel _POST
$id		   = isset($_POST['id']) ? addslashes($_POST['id']) : "";
$judul     = isset($_POST['judul']) ? addslashes($_POST['judul']) : "";
$pengarang = isset($_POST['pengarang']) ? addslashes($_POST['pengarang']) : "";
$terbit    = isset($_POST['terbit']) ? addslashes($_POST['terbit']) : "";
$penerbit  = isset($_POST['penerbit']) ? addslashes($_POST['penerbit']) : "";
$isbn	   = isset($_POST['isbn']) ? addslashes($_POST['isbn']) : "";
$kategori  = isset($_POST['kategori']) ? addslashes($_POST['kategori']) : "";
$klas	   = isset($_POST['klas']) ? addslashes($_POST['klas']) : "";
$jum_buku  = isset($_POST['jum_buku']) ? addslashes($_POST['jum_buku']) : "";
$lok	   = isset($_POST['lok']) ? addslashes($_POST['lok']) : "";
$asal	   = isset($_POST['asal']) ? addslashes($_POST['asal']) : "";
$tgl	   = isset($_POST['judul']) ? addslashes($_POST['judul']) : "";

if ($id == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=buku'>";
} else {
	$query = mysql_query("UPDATE data_buku SET judul='$judul', pengarang='$pengarang', th_terbit='$terbit', penerbit='$penerbit', isbn='$isbn', kode_klas='$klas', jumlah_buku='$jum_buku', lokasi='$lok', asal='$asal', jum_temp = '$jum_buku' WHERE id='$id'", $konek);

	if ($query) {
		echo "<script>alert('Data berhasil diupdate @ $hari_ini.Terima Kasih')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=buku'>";
	} else {
		Echo "Data anda gagal diupdate. Ulangi sekali lagi".mysql_error();
		echo "<meta http-equiv='refresh' content='0; url=?page=edit_buku&id=$id'>";
	}
}
?>
