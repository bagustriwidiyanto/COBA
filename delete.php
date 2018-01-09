<?php
include ("koneksi.php");
$id = $_GET["id"];
$delete = mysqli_query($koneksi,"delete from sepeda where id_sepeda='$id'");
if($delete)
{
	echo "Berhasil hapus data , bisa dilihat<a href='index.php'> disini</a>";
}
else{
	echo "Gagal hapus data , <a href='index.php'> kembali </a>";
}
?>