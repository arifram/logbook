<?php include ("admin/konfig.php") ;


  $sql = "SELECT * FROM log";
   $result = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">ELBAN</a>
          </div>
          <ul class="nav navbar-nav">
          
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="admin/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </nav>



      <div class="container">
        <h2>Table</h2>           
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
                  echo "<td> <img src='admin/images/".$user_data['dokumentasi']."' width='250px' height='250px' class='img-responsive'></td>";  
                  echo "</tr>";
              }
          ?>

            
          </tbody>
        </table>
          <div class="form-group">
            <div class="col-sm-2">
              <a href="print1.php" class="btn btn-info" role="button">Cetak</a>               
            </div>
        </div>
        </div>
      </div>

</body>
</html>