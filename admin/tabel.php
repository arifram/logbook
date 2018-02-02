<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include ('head.php');
	include ('konfig.php');

	$sql = "SELECT * FROM log";
    $result = mysqli_query($conn,$sql); 

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
    
    	<div class="table-responsive">          
	        <table class="table">
	          <thead>
	            <tr>
	              <th></th>
	              <th>No</th>
	              <th>Date</th>
	              <th>Jam</th>
	              <th>Pemeriksaan</th>
	              <th>Peralatan</th>
	              <th>Hasil</th>
	              <th>Teknisi On Duty</th>
	              <th>Dokumentasi</th>
	              
	            </tr>
	          </thead>
	          <tbody>

	          <?php

	             while($user_data = mysqli_fetch_array($result)) {
	                  echo "<tr>";
	                  echo "<th></th>"; 
	                  echo "<td>".$user_data['id_log']."</td>";
	                  echo "<td>".$user_data['tgl']."</td>";
	                  echo "<td>".$user_data['jam']."</td>";
	                  echo "<td>".$user_data['pemeliharaan']."</td>";
	                  echo "<td>".$user_data['nama_peralatan']."</td>";
	                  echo "<td>".$user_data['hasil']."</td>";
	                  echo "<td>".$user_data['teknisi']."</td>";
	                  echo "<td>".$user_data['dokumentasi']."</td>";
	                   echo "<td> <a href='form_ubah.php?id=".$user_data['id_log']."'>Edit </td>"; 
	                    echo "<td> <a href='hapus.php?id=".$user_data['id_log']."'>Hapus </td>"; 
	                    
	                  echo "</tr>";
	              }
	          ?>

	            
	          </tbody>
	        </table>
        </div>

	</div>

<?php include 'footer.php' ?>