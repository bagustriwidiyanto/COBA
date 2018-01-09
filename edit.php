<html>
<head></head>
<body>
<?php 
include("koneksi.php");
$id = $_GET["id"];
$tampil = mysqli_query($koneksi,"select * from sepeda where id_sepeda='$id'");
if (mysqli_num_rows($tampil)==0)
{
echo "Data Kosong , isien a bos";
}
else{
$data = mysqli_fetch_assoc($tampil);
}
?>
<form action="edit-proses.php" method="post">
<table>
<tr><td> ID Sepeda </td><td> <input type="text" name="id" value="<?php echo $data["id_sepeda"]?>" disabled required></td></tr>
<tr><td> Merek Sepeda </td><td> <input type="text" name="merek" value="<?php echo $data["merek_sepeda"]?>" required></td></tr>
<tr><td> Jenis Sepeda </td><td> <input type="text" name="jenis" value="<?php echo $data["jenis_sepeda"]?>" required></td></tr>
<tr><td> Warna Sepeda </td><td> <input type="text" name="warna" value="<?php echo $data["warna_sepeda"]?>" required></td></tr>
<tr><td> <input type="submit" name="submit">
</html>