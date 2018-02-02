<?php
include('konfig.php');
 
 
if(isset($_POST['update'])){ //['submit'] merupakan name dari button di form tambah
    $id = $_POST['id'];
    $tgl    = $_POST['tgl'];
    $jam    = $_POST['jam'];
    $pemeliharaan   = $_POST['pemeliharaan'];
    $peralatan  = $_POST['peralatan'];
    $hasil  = $_POST['hasil'];
    $teknisi    = $_POST['teknisi'];
 
    $filename = array();
    foreach($_FILES['foto']['name'] as $key => $file){
		$name  = $file;
		$tmp = $_FILES['foto']['tmp_name'][$key];
		$path = "images/".$name;
		move_uploaded_file($tmp, $path);
		$filename[] = $name;
    }
    $filename = json_encode($filename);
 
 
    
      // Proses simpan ke Database
    $sql = "UPDATE log SET tgl='$tgl', jam='$jam', pemeliharaan='$pemeliharaan', nama_peralatan='$peralatan', hasil='$hasil', teknisi='$teknisi', dokumentasi='$filename' WHERE id_log='$id' ";
    $query  = mysqli_query($conn,$sql); // Eksekusi/ Jalankan query dari variabel $query
   
      if($query){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: index.php");
       // Redirect ke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
         die ("Query gagal dijalankan: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
      }
    
 
}
 
 
?>