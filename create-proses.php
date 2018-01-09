<?php
include ("koneksi.php");
if(isset($_POST["submit"])){
$id = $_POST["id"];
$merek = $_POST["merek"];
$jenis = $_POST["jenis"];
$warna = $_POST["warna"];
$tambah = mysqli_query($koneksi,"insert into sepeda(id_sepeda,merek_sepeda,jenis_sepeda,warna_sepeda) values ('$id','$merek','$jenis','$warna')");
if ($tambah){
echo "BERHASIL !! Yippie !!, <a href='index.php'> Kembali </a>";
}
else{
	echo"Gagal Bos <a href='index.php'> Kembali</a>";
}
}
?>