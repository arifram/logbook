<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include ('head.php'); ?>


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
	  <div class="span_11">
		<div class="col-md-6 col_4">
		  
		  <!----Calender -------->
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
		</div>

    <div class="content_bottom">
		     <div class="col-md-8 span_3">
				   <div class="tab-content">
								<div class="tab-pane active" id="horizontal-form">
									<form class="form-horizontal" action="pro_form.php" method="POST" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-2 control-label">Date</label>
											<div class="col-sm-6">
												<input type="date" class="form-control1" id="focusedinput" name="tgl">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Jam</label>
											<div class="col-sm-6">
												<input type="time" class="form-control1" id="focusedinput" name="jam">
											</div>
										</div>										
										<div class="form-group">
											<label class="col-sm-2 control-label">Pemeriksaan</label><br/>
											<div class="col-sm-4">
												<div class="checkbox-inline1"><label><input type="radio" name="pemeliharaan" value="pemeliharaan"> Pemeliharaan</label></div>
												<div class="checkbox-inline1"><label><input type="radio" name="pemeliharaan" value="perbaikan"> Perbaikan</label></div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Peralatan</label>
											<div class="col-sm-8">
													<input type="text" name="peralatan" class="form-control1" id="inputSuccess1">
											</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Hasil</label>
											<div class="col-sm-4">
												<div class="checkbox-inline1"><label><input type="radio" name="hasil" value="Ok"> Ok</label></div>
												<div class="checkbox-inline1"><label><input type="radio" name="hasil" value="No"> No</label></div>
											</div><br/><br/>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Teknisi</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="inputTeknisi" name="teknisi" placeholder="Teknisi On Duty">
											</div><br/><br/>
										</div>
										<div class="form-group">
											<?php
												
											?>
											<label class="col-sm-2 control-label">Dokumentasi</label>
											 <div class="col-md-8">
												<input type="file" name="foto[]" multiple=""> <!-- rename it -->
											 </div>
										</div><br/><br/>
										<div class="form-group">
											<label class="col-sm-2 control-label"></label>
											<div class="col-sm-8">
												<input type="submit" class="btn-primary" name="submit" value="Submit">
												<input type="reset" class="btn-primary" value="Reset">
											</div><br/><br/>
										</div>
									</form>									
								</div>
					</div>		
		  	</div>
<?php include 'footer.php' ?>