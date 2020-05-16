<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
	<script type="text/javascript" src="chartjs/Chart.min.js"></script>
	<script type="text/javascript" src="chartjs/utils.js"></script>


	<title>hasil Komparasi</title>
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
		
		<div class="container-table100">
<h1 align="center">TABEL KOMPARASI SORTING ALGORITHM</h1>
<h2 align="center">Rasyid Hafiz 181402099 | Willi Nardo 181402126</h2>


			<div class="wrap-table100">
				</canvas><canvas id="canvas"></canvas>
				<br>			
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<tr class="row100 head">
									
						<table>
								
							<thead>
								
								<tr class="row100 head">
									<th class="cell100 column1">Banyak Data</th>
									<th class="cell100 column3">Bubble Sort</th>
									<th class="cell100 column3">Selection Sort</th>
									
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
		$sort = $_GET["sort"];
		$naikturun = $_GET["naikturun"];

		$konfigurasi = array("sort"=>$sort
			, "naikturun"=>$naikturun);
		$compare=$oop->komparasi($konfigurasi);
 		$x=100;for ($i=0; $i<=3; $i++) { 
			
		// include 'template/header.php';
		?>
							
	<tr>
		<td class="cell100 column1"><?php echo $x;?></td>
		<td class="cell100 column3"><?php echo $compare[$i][0] ?></td>
		<td class="cell100 column3"><?php echo $compare[$i][1] ?></td>

	</tr>
	<?php 
$x=$x+50;
}; ?>
								
							</tbody>
						</table>


					</div>
				</div>
				<h2 align="center">Sorted Data</h2>


<div class="container-table100">

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
		// include 'fungsi.php';
		// $duar = new fungsi();
		// include 'template/header.php';
		?>
								<?php
						$no = 1;
						$coba=$oop->selection_sort(250,$konfigurasi);
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
  <script type="text/javascript">
    var config = {
      type: 'line',
      data: {
        labels: [
        	<?php $x=100;for ($i=0; $i<=3; $i++) { 
		echo $x.",";	
		$x=$x+50;
		}
		// include 'template/header.php';
		?>
        ],
        datasets: [

        {
          label: 'Bubble Sort',
          backgroundColor: window.chartColors.red,
          borderColor: window.chartColors.red,
          data: [<?php 
          	for ($i=0; $i<=3; $i++) { 
          	echo $compare[$i][0].",";
          	}?>
          	],
          fill: false,
        }, {
          label: 'Selection sort',
          fill: false,
          backgroundColor: window.chartColors.blue,
          borderColor: window.chartColors.blue,
          data: [
           <?php 
           for ($i=0; $i<=3; $i++) { 
           echo $compare[$i][1].",";
            }?>

          ],
        },
        ]
      },
      
      options: {
        responsive: true,
        title: {
          display: true,
          text: 'Grafik Banyak data per waktu'
        },
        tooltips: {
          mode: 'index',
          intersect: false,
        },
        hover: {
          mode: 'nearest',
          intersect: true
        },
        
      }
    };

    window.onload = function() {
      var ctx = document.getElementById('canvas').getContext('2d');
      window.myLine = new Chart(ctx, config);
    };

    
  </script>


</body>
</html>