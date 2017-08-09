<html>
<head>
<title>.:: Sistem Informasi Perpustakaan MTs Negeri Sidoharjo ::.</title>
<style type="text/css">
body {
background-color: #f2f2f2;
color: black;
margin-top: 0px;
margin-left: 50px;
margin-right: 50px;
font-family: arial;
font-size: 14px;
}
</style>
</head>

<body>
<center>
<table border=0 width="900px" bgcolor="#00cc00" colspan="0">
	<tr>
	<form action="login.php" name="login" method="post">
		<td style="background: #B8D197; padding: 8px 0 8px 0" colspan="2" align="right">
		Username : <input type="text" name="user" placeholder="perpus" required> Password : <input type="password" name="pass" placeholder="bismillah" required> <input type="submit" value="log in">
		</td>
	</form>
	</tr>
	<tr>
		<td colspan="2" width="900px" height="200px"><img src="image/header.jpg" width="100%" height="180px"></td>
	</tr>
	<tr>
		<td colspan="2">
		<marquee behavior="alternate" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
		<b>Selamat Datang di Perpustakaan MTs Negeri Sidoharjo</b></marquee>
	</td>
	
	</tr>
	<tr>
	<td width="40%" valign="top" align="center" >
	<?php
	include "include/deteksi.php";
	?>
	</td>
	<td width="60%" style="background: #A7BCCD">
	<?php
	include "pengunjung/pengunjung.php";
	include "include/fungsi2.php";
	?></td>
	<tr>
	<td colspan="2" style="background: #88A695; border-top: solid 2px #f9f9f9; font-size: 12px" align="center">&copy; copyright : Nur Akhwan. &nbsp;Visit My Blog <a href="http://nur-akhwan.blogspot.com/" target="_blank">http://nur-akhwan.blogspot.com/</a><br>All Right Reserved</td>
	</tr>
</table>
</center>