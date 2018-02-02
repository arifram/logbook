<?php
include_once("konfig.php");

$id = $_GET['id'];

$query =  "DELETE FROM log WHERE id_log=$id";
$sql=mysqli_query($conn,$query);
if($sql){
	echo "Berhasil Hapus Data";
} else {
	echo "gagal hapus";
}
header("Location:tabel.php");
?>