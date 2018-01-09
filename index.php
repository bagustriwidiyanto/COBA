<HTML>
<head>
<title> Data Dealer Sepeda MOTOR</title>
<body>
<style>
tr,td{
	border-bottom:1px solid #ccc;
}
h3{
	margin-bottom:1px;
}
a.menu{
	color:white;
	text-decoration:none;
}
td.menu{
	border-bottom:0;
	background-color:#4f4;
}
td.menu:hover{
	background-color:#7f7;
}
</style>
<center><H2> DATA SEPEDA MOTOR </h2>
<table width=1200>
<tr><td class="menu"><center><h3 class="menu"><a href="index.php" class="menu"> Data Sepeda Motor</a></h3></td><td class="menu"><center><h3 class="menu"><a class="menu" href="create.html"> Input Data Sepeda Motor</a></h3></td></tr>
<?php
include ("koneksi.php");
$read = mysqli_query($koneksi,"select * from sepeda");
echo '<table width=1200 align="center" cellspacing=0>
<tr><td><h3> ID Sepeda </td><td><h3> Merek Sepeda </td><td><h3> Jenis Sepeda </td><td><h3> Warna Sepeda</td><td><h3> Edit </td><td><h3>Delete</td></tr>
';
while ($data = mysqli_fetch_assoc($read)){
echo '<tr><td>'.$data["id_sepeda"].'</td>
<td>'.$data["merek_sepeda"].'</td>
<td>'.$data["jenis_sepeda"].'</td>
<td>'.$data["warna_sepeda"].'</td>
<td><a href="edit.php?id='.$data["id_sepeda"].'"name="edit"> Edit</a></td>
<td><a href="delete.php?id='.$data["id_sepeda"].'"name="hapus"> Hapus </a></td>
<tr>';
}
?>
</body>
</html>