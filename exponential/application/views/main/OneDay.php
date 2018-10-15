<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>REPORT</title>
	<link rel="stylesheet" type="text/css" href="../assets/private/private/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../assets/private/private/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../assets/private/private/datatables/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="../assets/private/css/sb-admin.css">
	<link rel="stylesheet" href="../assets/css/main/datetimepicker.css">
	<script src="../assets/private/private/jquery/jquery.min.js"></script>
	<script src="../assets/js/main/datetimepicker.js"></script>
	<script src="../assets/js/dates.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
	<style>

  .navbar {
      margin-bottom: 0;
      background-color: #f41ec9;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f41ec9 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f41ec9;
  }

	.sidenav {
	    height: 100%;
	    width: 0;
			top: 100px;
      right: 1px;
	    position: fixed;
	    z-index: 1;
	    top: 0;
	    left: 0;
	    background-color: white;
	    overflow-x: hidden;
	    transition: 0.5s;
	    padding-top: 60px;
			/* -webkit-transition: all 2s ease-in-out;
    transition: all 2s ease-in-out; */
	}

	.sidenav a {
	    padding: 8px 8px 8px 32px;
	    text-decoration: none;
	    font-size: 25px;
	    color: #818181;
	    display: block;
	    transition: 0.3s;
	}

	.sidenav a:hover {
	    color: #f1f1f1;
	}

	.sidenav .closebtn {
	    position: absolute;
	    top: 0;
	    right: 25px;
	    font-size: 36px;
	    margin-left: 150px;
			margin-top: 50px;
	}

	#main {
	    transition: margin-left .5s;
	    padding: 16px;
			position: fixed;
			    top: 100px;
			    right: 1px;
			    width: 150px;
			    height: 100px;
			margin-right: 15px;

	}

	@media screen and (max-height: 650px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
  </style>
</head>
<?php
//GLOBAL ARRAYS
$one= array();
$backgroundColorOne= array();
$borderColorOne= array();
$sensorName= "";
$lableOne= array();
$dataOneTemperature= array();
$dataOneHumidity= array();
$htmTableth = array();

$two= array();
$backgroundColorTwo= array();
$borderColorTwo= array();
$sensorNameTwo = "";
$lableTwo= array();
$dataTwoTemperature= array();
$dataTwoHumidity= array();


//END OF GLOBAL ARRAYS
// $senssorId = $_GET["name"];
// $addOne = $senssorId + 1;
// $subtractT = $senssorId -1;

//FUNCTIONS
function getStatusTemperature($transform){
 if ($transform <= 5) {
	   return '<button type="button" class="btn btn-danger">Danger</button>';
 } elseif ($transform >= 6 && $transform <= 10) {
		return '<button type="button" class="btn btn-warning">Warning</button>';
 }elseif ($transform >= 11 && $transform <= 20) {
		 return '<button type="button" class="btn btn-success">Good</button>';
 }elseif ($transform >= 21 && $transform <= 25) {
		 return '<button type="button" class="btn btn-warning">Warning</button>';
 }elseif ($transform >= 26) {
		 return '<button type="button" class="btn btn-danger">Danger</button>';
 }else{
		 return '<button type="button" class="btn btn-warning">Erros</button>';
 }
}
function getStatusHumidity($transform){
 if ($transform <= 30) {
	 return '<button type="button" class="btn btn-danger">Danger</button>';

 } elseif ($transform >= 31 && $transform <= 45) {
	  return '<button type="button" class="btn btn-warning">Warning</button>';
 }elseif ($transform >= 46 && $transform <= 60) {
		 return '<button type="button" class="btn btn-success">Good</button>';
 }elseif ($transform >= 61 && $transform <= 80) {
		 return '<button type="button" class="btn btn-warning">Warning</button>';
 }elseif ($transform >= 81) {
		 return '<button type="button" class="btn btn-danger">Danger</button>';
 }else{
		 return '<button type="button" class="btn btn-warning">Erros</button>';
 }
}


function backgroundColorTemperature($transform){
	if ($transform <= 15) {
			return "'rgba(54, 162, 235, 0.2)',";
	} elseif ($transform >= 16 && $transform <= 30) {
			return "'rgba(75, 192, 192, 0.2)',";
	}elseif ($transform >= 31) {
			return "'rgba(244, 76, 111, 0.2)',";
	}else{
			return "'rgba(255, 159, 64, 0.2)',";
	}
}


function borderColorTemperature($transform){
 if ($transform <= 15) {
		 return "'rgba(54, 162, 235, 1)',";
 } elseif ($transform >= 16 && $transform <= 30) {
		 return "'rgba(75, 192, 192, 1)',";
 }elseif ($transform >= 31) {
		 return "'rgba(231, 24, 68, 1)',";
 }else{
		 return "'rgba(255, 159, 64, 1)',";
 }
}


function backgroundColorHumidity($transform){
	if ($transform <= 15) {
			return "'rgba(54, 162, 235, 0.2)',";
	} elseif ($transform >= 16 && $transform <= 30) {
			return "'rgba(75, 192, 192, 0.2)',";
	}elseif ($transform >= 31) {
			return "'rgba(244, 76, 111, 0.2)',";
	}else{
			return "'rgba(255, 159, 64, 0.2)',";
	}
}


function borderColorrHumidity($transform){
 if ($transform <= 15) {
		 return "'rgba(54, 162, 235, 1)',";
 } elseif ($transform >= 16 && $transform <= 30) {
		 return "'rgba(75, 192, 192, 1)',";
 }elseif ($transform >= 31) {
		 return "'rgba(231, 24, 68, 1)',";
 }else{
		 return "'rgba(255, 159, 64, 1)',";
 }
}

function removeLastCaracter($asd){
	$fastOne = substr(implode(" ",$asd), 0, -1);
	return $fastOne;
}
//END FUNCTIONS

?>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="http://localhost/exponential">Sensors</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#about">SELECT A SENSOR</a></li>

	      </ul>
	    </div>
	  </div>
	</nav>

	<div id="main">
		<span style="font-size:30px;" onclick="openNav()">
Daily
	  <span style="font-size:30px;cursor:pointer" >&#9776; </span></span>
	</div>

<?php

//CODE SUPRIMECLIENTEL


												foreach ($data as $key => $value) {



													switch ($value->Sensores_id) {
								          case 1:

													if($value->Sensores_id == 1){

													$lableOne[] = '"'.$value->Fecha.'",';

													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
													$dataTwoTemperature[] = ',';
													$dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".$value->Sensores_id."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td>'.$value->Sensores_id.'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.$value->Sensores_id.'"/>
																<input type="hidden" name="date" value="'.$value->Fecha.'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';

												}elseif ($value->Sensores_id  == 2) {

													$lableOne[] = '"'.$value->Fecha.'",';

													$sensorNameTwo = $value->Sensores_id;
													$dataOneTemperature[] = ',';
													$dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													$htmTableth [] = "<tr>
															<td>".$value->Sensores_id."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$one[] = '<tr>
																<td>'.$value->Sensores_id.'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.$value->Sensores_id.'"/>
																<input type="hidden" name="date" value="'.strtotime($value->Fecha).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';

													}

													break;

								          case 2:

													if($value->Sensores_id == 1){

														$sensorName = $value->Sensores_id;
	                          $dataOneTemperature[] = $value->Temperatura.',';
														$dataOneHumidity[] = $value->Humedad.',';
														$dataTwoTemperature[] = ',';
														$dataTwoHumidity[] = ',';
														// $htmTableth [] = "<tr>
														// 		<td>".$value->Sensores_id."</td>
														// 		<td>".$value->Fecha."</td>
														// 		<td>".$value->Temperatura."</td>
														// 		 <td>".$value->Humedad."</td>
														// 		<td>".getStatusTemperature($value->Temperatura)."</td>
														// 		<td>".getStatusHumidity($value->Humedad)."</td>";

												}elseif ($value->Sensores_id == 2) {

													$sensorNameTwo = $value->Sensores_id;
													$dataOneTemperature[] = ',';
													$dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													// $htmTableth [] = "<tr>
													// 		<td>".$value->Sensores_id."</td>
													// 		<td>".$value->Fecha."</td>
													// 		<td>".$value->Temperatura."</td>
													// 		 <td>".$value->Humedad."</td>
													// 		<td>".getStatusTemperature($value->Temperatura)."</td>
													// 		<td>".getStatusHumidity($value->Humedad)."</td>";

													}

													// $two[] = '<tr>
													// 	<td>'.$value->Sensores_id.'</td>
													// 	<td><form method="post" action="../chart/dayInfoAddDays">
													// 	<input type="hidden" name="name" value="'.$value->Sensores_id.'"/>
													// 	<input type="hidden" name="date" value="'.$value->Fecha.'"/>
													// 	<input type="hidden" name="type" value="temperature"/>
													// 	<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';



													break;
													case 3:
													break;
								          case 4:
													break;
													case 5:
													break;
								          case 6:
													break;
													case 7:
													break;
								          case 8:
													break;
												}

												// $backgroundColorTwo[]= ;
												// $borderColorTwo[] = ;
												// $sensorNameTwo = "";
												// $lableTwo[] = ;
												//
												//

                          //
													// $backgroundColorOne[] = backgroundColor($value[114].$value[115]);
													// $borderColorOne[] = borderColor($value[154].$value[155]);


													// $htmTableth [] =  "<tr>
													// 		<td>".
													// 							$value[154].
													// 							$value[155].
													// 							 "</td>
													// 		<td></td><td></td><td></td><td></td><td></td>";




																			}



// }
//END OF CODE SUPRIMECLIENTEL



//TABLE
echo  '
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<br></br><br></br>
	<div class="table-responsive">
  <table class="table">
	<thead>
		<tr>
			<th>SENSOR </th>
			<th>DAY DETAILS</th>
		</tr>
	</thead>
	<tbody>
	'.implode(" ", $one).'
	</tr>
		 </tbody>
	 </table>
	 </div>

</div>

	<br></br><br></br>

	<div class="row">
	<div class="col-sm-8" >
	<!--center>Temperature</center-->
	<canvas id="myChart" width="60" height="40" class="chartjs-render-monitor" style="display: block; width: 333px; height: 333px;"></canvas>






</div>
</div>
<br></br><br></br>
<div class="row">
<div class="col-sm-8" >
<!--center>Humidity</center-->
<canvas id="humidity" width="60" height="40" class="chartjs-render-monitor" style="display: block; width: 333px; height: 333px;"></canvas>
</div>
</div>
<br></br><br></br>




</div>
	<br></br>
				<div class="card mb-3">
						<div class="card-header">
								<i class="fa fa-table"></i>
								<form method="post" action="../chart/showchart">
								<div class="col-sm-12 col-md-9">

								<label class="control-label col-sm-4" for="price">From:
									<input type="text" name="yearOne" id="startDate" class="form-control form-control-sm" placeholder="" aria-controls="example">
								</label>



								<label class="control-label col-sm-4" for="price">To:
									<input type="text" name="yearTwo" id="stopDate" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>

								</div>
								<input class="btn btn-primary" type="submit" value="Search" />
							</div>
							</form>

						<div class="card-body">
								<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
												<thead>
												<tr>
														<th>Sensor Id</th>
														<th>Date time</th>
														<th>Temperature</th>
														<th>Humidity</th>
														<th>Temperature Status</th>
														<th>Humidity Status</th>
												</tr>
												</thead>
												<tfoot>
												<tr>
													<th>Sensor Id</th>
													<th>Date time</th>
													<th>Temperature</th>
													<th>Humidity</th>
													<th>Temperature Status</th>
													<th>Humidity Status</th>
												</tr>
												</tfoot>

												<tbody>


												</tr>';

//END OF TABLE


echo implode(" ", $htmTableth);




                        echo '</tbody>

                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated

								'.  date('Y-m-d  h:i a').'
						 </div>
        </div>

				<footer class="container-fluid text-center">
				  <a href="#myPage" title="To Top">
				    <span class="glyphicon glyphicon-chevron-up"></span>
				  </a>
				  <p>@Copyrights <a href="http://xponential.tech/" title="Visit xponential.tech">xponential.tech </a></p>
				</footer>
				<script src="../assets/private/private/bootstrap/js/bootstrap.bundle.min.js"></script>
				<script src="../assets/private/private/datatables/jquery.dataTables.min.js"></script>
				<script src="../assets/private/private/datatables/dataTables.bootstrap4.js"></script>
				<script src="../assets/private/js/reports/sb-admin-datatables.js"></script>';
				echo '<script type="text/javascript">';
				echo "var canvas = document.getElementById('myChart');";
				echo "var humidity = document.getElementById('humidity');";
				echo "window.chartColors = {
						red: 'rgb(249, 5, 57)',
						orange: 'rgb(255, 159, 64)',
						yellow: 'rgb(255, 205, 86)',
						green: 'rgb(51, 204, 51)',
						blue: 'rgb(54, 162, 235)',
						purple: 'rgb(153, 102, 255)',
						grey: 'rgb(201, 203, 207)',
						black: 'rgb(0, 0, 0)'
				};";

					echo "var myLineChart = new Chart(canvas,
						{
								type: 'line',
								data: {";
										echo 'labels: ['.removeLastCaracter($lableOne).'],';
										echo 'datasets: [';
										echo '{';
														echo "label: '#".$sensorName." Arriba',
														fill: false,";
														echo "backgroundColor: window.chartColors.black,
														borderColor: window.chartColors.black,";
														echo 'data: ['.removeLastCaracter($dataOneTemperature).'],';
											echo '  },
						{';
														echo "label: '#".$sensorNameTwo." Abajo',
														fill: false,
														backgroundColor: window.chartColors.blue,
														borderColor: window.chartColors.blue,";
														echo 'data: ['.removeLastCaracter($dataTwoTemperature).'],';
												echo "}
										]
								},
								options: {
										responsive: true,
										title: {
												display: true,
												text: 'Temperatura'
										},
										backgroundRules: [{
												backgroundColor: window.chartColors.red,
												yAxisSegement: 5
										}, {
												backgroundColor: window.chartColors.yellow,
												yAxisSegement: 10
										}, {
												backgroundColor: window.chartColors.green,
												yAxisSegement: 20
										}, {
												backgroundColor: window.chartColors.yellow,
												yAxisSegement: 25
										}, {
												backgroundColor: window.chartColors.red,
												yAxisSegement: Infinity
										}],
										scales: {
												yAxes: [{
														ticks: {
															beginAtZero: true,
														  steps: 2,
														  stepValue: 2,
														  max: 100
														}
												}]
										}
								},
								plugins: [{
										beforeDraw: function (chart) {
												var ctx = chart.chart.ctx;
												var ruleIndex = 0;
												var rules = chart.chart.options.backgroundRules;";
												echo 'var yaxis = chart.chart.scales["y-axis-0"];
												var xaxis = chart.chart.scales["x-axis-0"];
												var partPercentage = 1 / (yaxis.ticksAsNumbers.length - 1);
												for (var i = yaxis.ticksAsNumbers.length - 1; i > 0; i--) {
														if (yaxis.ticksAsNumbers[i] < rules[ruleIndex].yAxisSegement) {
																ctx.fillStyle = rules[ruleIndex].backgroundColor;
																ctx.fillRect(xaxis.left, yaxis.top + ((i - 1) * (yaxis.height * partPercentage)), xaxis.width, yaxis.height * partPercentage);
														} else {
																ruleIndex++;
																i++;
														}
												}
										}
								}]
						});';

//another image
echo "var myLineChart = new Chart(humidity,
						{
								type: 'line',
								data: {";
										echo 'labels: ['.removeLastCaracter($lableOne).'],';
										echo 'datasets: [';
										echo '{';
														echo "label: '#".$sensorName." Arriba',
														fill: false,";
														echo "backgroundColor: window.chartColors.black,
														borderColor: window.chartColors.black,";
														echo 'data: ['.removeLastCaracter($dataOneHumidity).'],';
											echo '  },
						{';
														echo "label: '#".$sensorNameTwo." Abajo',
														fill: false,
														backgroundColor: window.chartColors.blue,
														borderColor: window.chartColors.blue,";
														echo 'data: ['.removeLastCaracter($dataTwoHumidity).'],';
												echo "}
										]
								},
								options: {
										responsive: true,
										title: {
												display: true,
												text: 'Humedad'
										},
										backgroundRules: [{
												backgroundColor: window.chartColors.red,
												yAxisSegement: 30
										}, {
												backgroundColor: window.chartColors.yellow,
												yAxisSegement: 45
										}, {
												backgroundColor: window.chartColors.green,
												yAxisSegement: 60
										}, {
												backgroundColor: window.chartColors.yellow,
												yAxisSegement: 80
										}, {
												backgroundColor: window.chartColors.red,
												yAxisSegement: Infinity
										}],
										scales: {
												yAxes: [{
														ticks: {
															beginAtZero: true,
															steps: 2,
															stepValue: 2,
															max: 100
														}
												}]
										}
								},
								plugins: [{
										beforeDraw: function (chart) {
												var ctx = chart.chart.ctx;
												var ruleIndex = 0;
												var rules = chart.chart.options.backgroundRules;";
												echo 'var yaxis = chart.chart.scales["y-axis-0"];
												var xaxis = chart.chart.scales["x-axis-0"];
												var partPercentage = 1 / (yaxis.ticksAsNumbers.length - 1);
												for (var i = yaxis.ticksAsNumbers.length - 1; i > 0; i--) {
														if (yaxis.ticksAsNumbers[i] < rules[ruleIndex].yAxisSegement) {
																ctx.fillStyle = rules[ruleIndex].backgroundColor;
																ctx.fillRect(xaxis.left, yaxis.top + ((i - 1) * (yaxis.height * partPercentage)), xaxis.width, yaxis.height * partPercentage);
														} else {
																ruleIndex++;
																i++;
														}
												}
										}
								}]
						});


						function openNav() {
						    document.getElementById("mySidenav").style.width = "750px";
						    document.getElementById("main").style.marginRight = "750px";
						    document.body.style.backgroundColor = "rgba(117,113,114,0.4)";
						}

						function closeNav() {
						    document.getElementById("mySidenav").style.width = "0";
						    document.getElementById("main").style.marginRight= "0";
						    document.body.style.backgroundColor = "white";
						}
						';


				echo'</script>';
?>

</body>



</html>
