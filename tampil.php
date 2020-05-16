<!DOCTYPE html>
<html lang="en">
<head>
			
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<h1 align="center">Sorting NIS SISWA SMANSABA 2018</h1>
<h2 align="center">Rasyid Hafiz 181402099 | Willi Nardo 181402126</h2>

 
<form action="komparasi.php" method="get" align="center">
<br>
	Kustomisasi Sorting<br>
		<select name="sort" style="border-radius: 5px;">	
  <option value="1">Nis</option>
  <option value="2">Nama</option>
  <option value="3">Nilai1</option>
  <option value="4">Nilai2</option>
  <option value="5">Nilai3</option>
  <option value="6">Nilai4</option>
				</select>
<select name="naikturun" style="border-radius: 5px;">
	<option value="1">Acsending</option>
	<option value="0">Descending</option>

</select>
			<br>
	<button type="submit" href="" class="btn btn-info">Compare Bubble dan Selection</button></caption> </p>
		<div class="container-table100">
</form>
			<div class="wrap-table100">
				
							
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
								
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">NIS</th>
									<th class="cell100 column3">Nama</th>
									<th class="cell100 column2">Matematik</th>
									<th class="cell100 column2">Indo</th>
									<th class="cell100 column2">Inggris</th>
									<th class="cell100 column2">Minatan</th>

								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<?php 
		include 'fungsi.php';
		$oop = new fungsi();
		// include 'template/header.php';
		?>
								<?php
						$no = 1;
						$coba=$oop->tampil_data();
						// var_dump($coba);die;
						foreach($coba as $x){
					     list($nis,$nama,$nilai1,$nilai2,$nilai3,$nilai4) =array_pad( explode (";",$x), 6, null);
								?>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo $nis; ?></td>
									<td class="cell100 column3"><?php echo $nama; ?></td>
									<td class="cell100 column2"><?php echo $nilai1; ?></td>
									<td class="cell100 column2"><?php echo $nilai2; ?></td>
									<td class="cell100 column2"><?php echo $nilai3; ?></td>
									<td class="cell100 column2"><?php echo $nilai4; ?></td>

								</tr>
						<?php }?>
								
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>