<?php
	include 'admin/konfig.php';
	$data = mysqli_query($conn, "select * from log");
	$content ='
	<style type="text/css">
	.table {border-collapse:collapse; }
	.table th {padding:8px 5px;}
	img {width:70px;}
	</style>
	';
	
	$content .='
	<page>
		<div style="padding:30PX; font-size:30px;" align="center">
			LOGBOOK
		</div>
		<table border="1px" align="center" class="table">
			<tr>
				<th>NO</th>
				<th>TANGGAL</th>
				<th>JAM</th>
				<th>PERAWATAN/PERBAIKAN</th>
				<th>PERALATAN</th>
				<th>HASIL</th>
				<th>TEKNISI</th>
				<th>DOKUMENTASI</th>
			</tr>';
			$no=1;
			$datalog = mysqli_query($conn, "select * from log");
			while ($row = mysqli_fetch_array($datalog)){
			$content .='
			<tr>
				<td align="center">'.$no++.'</td>
				<td>'.$row['tgl'].'</td>
				<td>'.$row['jam'].'</td>
				<td>'.$row['pemeliharaan'].'</td>
				<td>'.$row['nama_peralatan'].'</td>
				<td>'.$row['hasil'].'</td>
				<td>'.$row['teknisi'].'</td>
				<td><img src="admin/images/'.$row['dokumentasi'].'"></td>
			</tr>
			';
			}
	$content .='
		</table>
	</page>
	';
	require_once('kepdf/html2pdf.class.php');
	$html2pdf= new HTML2PDF('P','A4','fr');
	$html2pdf->WriteHTML($content);
	$html2pdf->Output('example.pdf')
?>