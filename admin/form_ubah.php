<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include ('head.php'); 
	include ('konfig.php');
//mengecek apakah di URL terdapat nilai GET id_log 
	if(isset($_GET['id']))
	{	
		$id_log = ($_GET['id']); //ambil nilai id dari url dan disimpan dalam variabel $id_log

		// menampilkan data mahasiswa dari database yang mempunyai id=$id
	    $query = "SELECT * FROM log WHERE id_log='$id_log'";
	    $result = mysqli_query($conn, $query);
	    // mengecek apakah query gagal
	    if(!$result){
	      die ("Query Error: ".mysqli_errno($conn).
	         " - ".mysqli_error($conn));
	    }

	     // mengambil data dari database dan membuat variabel" utk menampung data
	    // variabel ini nantinya akan ditampilkan pada form
	    $data = mysqli_fetch_assoc($result);
	    $id = $data["id_log"];
	    $tgl = $data["tgl"]; 
	    $jam = $data["jam"];
	    $pemeliharaan = $data["pemeliharaan"];
	    $peralatan = $data["nama_peralatan"];
	    $hasil = $data["hasil"];
	    $teknisi = $data["teknisi"];
	    $foto = $data["dokumentasi"];

	    

	  } else {
	    // apabila tidak ada data GET id pada akan di redirect ke index.php
	    header("location:index.php");
	  }
?>


			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Forms<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="form.php">Forms</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tabel.php">Tables</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">

    <div class="content_bottom">
		     <div class="col-md-8 span_3">
				   <div class="tab-content">
								<div class="tab-pane active" id="horizontal-form">
									<form class="form-horizontal" action="pro_ubah.php" method="POST" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-2 control-label"></label>
											<div class="col-sm-6">
												<input type="hidden" class="form-control1" id="focusedinput" name="id" value="<?php echo $id; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Date</label>
											<div class="col-sm-6">
												<input type="date" class="form-control1" id="focusedinput" name="tgl" value="<?php echo $tgl; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Jam</label>
											<div class="col-sm-6">
												<input type="time" class="form-control1" id="focusedinput" name="jam" value="<?php echo $jam; ?>">
											</div>
										</div>										
										<div class="form-group">
											<label class="col-sm-2 control-label">Pemerikasaan</label><br/>
											<div class="col-sm-4">
												<div class="checkbox-inline1"><label><input type="radio" name="pemeliharaan" value="pemeliharaan <?php if ($pemeliharaan == 'pemeliharaan') { echo 'checked'; }?>"> Pemeliharaan</label></div>
												<div class="checkbox-inline1"><label><input type="radio" name="pemeliharaan" value="perbaikan <?php if ($pemeliharaan == 'perbaikan') { echo 'checked'; }?>"> Perbaikan</label></div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Nama Peralatan</label>
											<div class="col-sm-8">
													<input type="text" name="peralatan" class="form-control1" id="inputSuccess1" value="<?php echo $peralatan; ?>">
											</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Hasil</label>
											<div class="col-sm-4">
												<div class="checkbox-inline1"><label><input type="radio" name="hasil" value="Ok <?php if ($hasil == 'Ok') { echo 'checked'; }?>"> Ok</label></div>
												<div class="checkbox-inline1"><label><input type="radio" name="hasil" value="No <?php if ($pemeliharaan == 'No') { echo 'checked'; }?>"> No</label></div>
											</div><br/><br/>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Teknisi</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="inputTeknisi" name="teknisi" value="<?php echo $teknisi; ?>" placeholder="Teknisi On Duty">
											</div><br/><br/>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Dokumentasi</label>
											 <div class="col-md-8">
												<input type="file" name="foto" multiple="" value="<?php echo $foto; ?>"> <!-- rename it -->
											 </div>
										</div><br/><br/>
										<div class="form-group">
											<label class="col-sm-2 control-label"></label>
											<div class="col-sm-8">
												<input type="submit" class="btn-primary" name="update" value="Edit">
												<input type="reset" class="btn-primary" value="Reset">
											</div><br/><br/>
										</div>
									</form>									
								</div>
					</div>		
		  	</div>
<?php include ('footer.php'); ?>