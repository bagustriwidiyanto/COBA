<?php
include ("koneksi.php");
if(isset($_POST["submit"])){
$merek = $_POST["merek"];
$jenis = $_POST["jenis"];
$warna = $_POST["warna"];
$update = mysqli_query($koneksi,'update sepeda set merek_sepeda="'.$merek.'" , jenis_sepeda="'.$jenis.'" ,warna_sepeda="'.$warna.'"');
if($update){
echo "Data Berhasil Disimpan , Bisa dilihat <a href='index.php'> di sini</a>";
}
else{
echo 'Gagal Bos, Betulkan <a href=edit.php?id='.$id.'> disini</a>';
}
}
?>