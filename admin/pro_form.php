<?php
include('konfig.php');


if(isset($_POST['submit'])){ //['submit'] merupakan name dari button di form tambah
	$tgl	= $_POST['tgl'];
	$jam	= $_POST['jam'];
	$pemeliharaan	= $_POST['pemeliharaan'];
	$peralatan	= $_POST['peralatan'];
	$hasil	= $_POST['hasil'];
	$teknisi	= $_POST['teknisi'];
	$count = count($_FILES['foto']);
	$filename = array();
	for($i=0;$i<$count;$i++) {
		// Rename nama fotonya
		$fotobaru = $_FILES['foto']['name'][$i];
       	$path = "images/".$fotobaru;
		// Set path folder tempat menyimpan fotonya
		move_uploaded_file($_FILES['foto']['tmp_name'][$i], $path);
		$filename = $fotobaru;
	}
	$foto = json_encode($filename);
	$sql	= "INSERT INTO log SET id_log='', tgl='$tgl', jam='$jam', pemeliharaan='$pemeliharaan', nama_peralatan='$peralatan', hasil='$hasil', teknisi='$teknisi', dokumentasi='$foto' ";

	$query	= mysqli_query($conn,$sql); // Eksekusi/ Jalankan query dari variabel $query
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form.php'>Kembali Ke Form</a>";
	}
}
	//$tmp = $_FILES['foto']['tmp_name'];

	
	// Proses upload
	// if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	  // Proses simpan ke Database

?>
