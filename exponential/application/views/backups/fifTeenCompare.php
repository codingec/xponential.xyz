<?php
$getValue = $sesser;
$enco = base64_decode($getValue);
$encoded = base64_encode($getValue.' The quick brown fox jumps over the lazy dog').
// $senssorId = strstr($enco, 'The quick brown fox jumps over the lazy dog', true);
$senssorId = $getValue;
$addOne = (int)$senssorId + 1;
$subtractT = (int)$senssorId -1;

// echo '15 COMPARE '.$senssorId;

function nameForCabinets($MsenssorId){
  switch ($MsenssorId) {
  case 1:
  return "Gabinete 1 Posición Arriba";
  break;
  case 2:
  return "Gabinete 1 Posición Abajo";
  break;
  case 3:
  return "Gabinete 2 Posición Arriba";
  break;
  case 4:
  return "Gabinete 2 Posición Abajo";
  break;
  case 5:
  return "Gabinete 3 Posición Arriba";
  break;
  case 6:
  return "Gabinete 3 Posición Abajo";
  break;
  case 7:
  return "Gabinete 4 Posición Arriba";
  break;
  case 8:
  return "Gabinete 4 Posición Abajo";
  break;
  case 9:
  return "Gabinete 5 Posición Arriba";
  break;
  case 10:
  return "Gabinete 5 Posición Abajo";
  break;
  case 11:
  return "Gabinete Externo Posición Izquierda";
  break;
  case 12:
  return "Gabinete Externo Posición Derecha";
  break;
  default:
    // header("Location: http://xponential.tech");
  }
}


function getTime($setTheGetter){
	$justTime = date("H:i:s", strtotime($setTheGetter));
	return $justTime;
}


function getDay($setTheGetter){
	$justDate = date('Y:m:d', strtotime($setTheGetter));
	return $justDate;
}


echo  '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> '.nameForCabinets($senssorId).'</title>';
?>
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

	<script>
	$(document).ready(function() {
		  // $('#temperaturelTwo').hide();
			// $('#humiditylTwo').hide();
	    // $('#temperaturelCompare').hide();
			// $('#humiditylCompare').hide();


	    // $('#uno').on('click', function() {
			// 	$('#temperaturelTwo').hide();
			// 	$('#humiditylTwo').hide();
			// 	$('#temperaturelCompare').hide();
			// 	$('#humiditylCompare').hide();
      //
	    // });
      //
			// $('#dos').on('click', function() {
			// 	$('#temperaturelOne').hide();
			// 	$('#humiditylOne').hide();
			// 	$('#temperaturelCompare').hide();
			// 	$('#humiditylCompare').hide();
			// });
      //
			// $('#compare').on('click', function() {
			// 	$('#temperaturelOne').hide();
			// 	$('#humiditylOne').hide();
			// 	$('#temperaturelTwo').hide();
			// 	$('#humiditylTwo').hide();
			// });

	});
	</script>
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

//NORMAL
$oneNormal= array();
$backgroundColorNormalOne= array();
$borderColorNormalOne= array();
$sensorNormalName= "";
$lableNormalOne= array();
$dataNormalOneTemperature= array();
$dataNormalOneHumidity= array();
$htmNormalTableth = array();

$twoNormal= array();
$backgroundColorNormalTwo= array();
$borderColorNormalTwo= array();
$sensorNormalNameTwo = "";
$lableNormalTwo= array();
$dataNormalTwoTemperature= array();
$dataNormalTwoHumidity= array();

//END NORMAL

//END OF GLOBAL ARRAYS


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

//COMPARATIVE
										foreach ($data as $key => $value) {

													switch ($senssorId) {
								          case 1:

													if($value->Sensores_id == 1){

													$lableOne[] = '"'.$value->Fecha.'",';

													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
                          $dataTwoTemperature[] = ',';
												  $dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td>'.nameForCabinets($value->Sensores_id).'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.date('Y:m:d', strtotime($value->Fecha)).'"/>
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
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$one[] = '<tr>
																<td>'.nameForCabinets($value->Sensores_id).'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.date('Y:m:d', strtotime($value->Fecha)).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';

													}

													break;

								          case 2:
                          if($value->Sensores_id == 3){

													$lableOne[] = '"'.$value->Fecha.'",';

													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
                          $dataTwoTemperature[] = ',';
												  $dataTwoHumidity[] = ',';


													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td>'.nameForCabinets($value->Sensores_id).'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.date('Y:m:d', strtotime($value->Fecha)).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';

												}elseif ($value->Sensores_id  == 4) {

													$lableOne[] = '"'.$value->Fecha.'",';

													$sensorNameTwo = $value->Sensores_id;
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';
                                                    $dataOneTemperature[] = ',';
												    $dataOneHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$one[] = '<tr>
																<td>'.nameForCabinets($value->Sensores_id).'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.date('Y:m:d', strtotime($value->Fecha)).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';

													}


													break;
													case 3:
                          if($value->Sensores_id == 5){

													$lableOne[] = '"'.$value->Fecha.'",';

													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
                                                    $dataTwoTemperature[] = ',';
												    $dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td>'.nameForCabinets($value->Sensores_id).'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.date('Y:m:d', strtotime($value->Fecha)).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';

												}elseif ($value->Sensores_id  == 6) {

													$lableOne[] = '"'.$value->Fecha.'",';

													$sensorNameTwo = $value->Sensores_id;
                          $dataOneTemperature[] = ',';
												  $dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$one[] = '<tr>
																<td>'.nameForCabinets($value->Sensores_id).'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.date('Y:m:d', strtotime($value->Fecha)).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';

													}
													break;
								          case 4:
                          if($value->Sensores_id == 7){

													$lableOne[] = '"'.$value->Fecha.'",';

													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
                          $dataTwoTemperature[] = ',';
												  $dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td>'.nameForCabinets($value->Sensores_id).'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.date('Y:m:d', strtotime($value->Fecha)).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';

												}elseif ($value->Sensores_id  == 8) {

													$lableOne[] = '"'.$value->Fecha.'",';

													$sensorNameTwo = $value->Sensores_id;
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';
                          $dataOneTemperature[] = ',';
												  $dataOneHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$one[] = '<tr>
																<td>'.nameForCabinets($value->Sensores_id).'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.date('Y:m:d', strtotime($value->Fecha)).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';

													}
													break;
													case 5:
                          if($value->Sensores_id == 9){

													$lableOne[] = '"'.$value->Fecha.'",';

													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
                                                    $dataTwoTemperature[] = ',';
												    $dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td>'.nameForCabinets($value->Sensores_id).'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.date('Y:m:d', strtotime($value->Fecha)).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';

												}elseif ($value->Sensores_id  == 10) {

													$lableOne[] = '"'.$value->Fecha.'",';

													$sensorNameTwo = $value->Sensores_id;
                          $dataOneTemperature[] = ',';
												  $dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$one[] = '<tr>
																<td>'.nameForCabinets($value->Sensores_id).'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.date('Y:m:d', strtotime($value->Fecha)).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';

													}
													break;
								          case 6:
                          if($value->Sensores_id == 11){

													$lableOne[] = '"'.$value->Fecha.'",';

													$sensorName = $value->Sensores_id;
                          $dataOneTemperature[] = $value->Temperatura.',';
													$dataOneHumidity[] = $value->Humedad.',';
                          $dataTwoTemperature[] = ',';
												  $dataTwoHumidity[] = ',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

													$one[] = '<tr>
																<td>'.nameForCabinets($value->Sensores_id).'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.date('Y:m:d', strtotime($value->Fecha)).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';

												}elseif ($value->Sensores_id  == 12) {

													$lableOne[] = '"'.$value->Fecha.'",';

													$sensorNameTwo = $value->Sensores_id;
                          $dataOneTemperature[] = ',';
												  $dataOneHumidity[] = ',';
													$dataTwoTemperature[] = $value->Temperatura.',';
													$dataTwoHumidity[] = $value->Humedad.',';

													$htmTableth [] = "<tr>
															<td>".nameForCabinets($value->Sensores_id)."</td>
															<td>".$value->Fecha."</td>
															<td>".$value->Temperatura."</td>
															 <td>".$value->Humedad."</td>
															<td>".getStatusTemperature($value->Temperatura)."</td>
															<td>".getStatusHumidity($value->Humedad)."</td>";

															$one[] = '<tr>
																<td>'.nameForCabinets($value->Sensores_id).'</td>
																<td><form method="post" action="../chart/dayInfoAddDays">
																<input type="hidden" name="name" value="'.base64_encode($value->Sensores_id.' The quick brown fox jumps over the lazy dog').'"/>
																<input type="hidden" name="date" value="'.date('Y:m:d', strtotime($value->Fecha)).'"/>
																<input type="hidden" name="type" value="temperature"/>
																<input class="btn btn-link" type="submit" value="'.$value->Fecha.'" /> </form></td>';

													}
                          default:
                            header("Location: http://xponential.tech");

												}


																			}


//END OF COMPARATIVE

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
	<form method="get" action="../chart/getSensorId">
	<input type="hidden" name="name" value="'.$encoded.'"/>
	<input type="hidden" name="possition" value="Above"/>
	<input id="uno" class="btn btn-primary" type="submit" value="Posición Arriba" />
	</form>

	<form method="get" action="../chart/getSensorId">
	<input type="hidden" name="name" value="'.$encoded.'"/>
	<input type="hidden" name="possition" value="Below"/>
	<input id="dos" class="btn btn-primary" type="submit" value="Posición Abajo" />
	</form>

	<form method="get" action="../chart/getSensorId">
	<input type="hidden" name="name" value="'.$encoded.'"/>
	<input type="hidden" name="possition" value="Compare"/>
	<input id="compare" class="btn btn-primary" type="submit" value="Comparar" />
	</form>



	<canvas id="myChart" width="60" height="40" class="chartjs-render-monitor" style="display: block; width: 333px; height: 333px;"></canvas>


</div>
</div>
<br></br><br></br>
<div class="row">
<div class="col-sm-8" >


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
												<th>Id de Sensor</th>
												<th>Fecha</th>
												<th>Temperatura</th>
												<th>Humedad</th>
												<th>Estado de Temperature </th>
												<th>Estado de Humedad </th>
												</tr>
												</thead>
												<tfoot>
												<tr>
												<th>Id de Sensor</th>
												<th>Fecha</th>
												<th>Temperatura</th>
												<th>Humedad</th>
												<th>Estado de Temperature </th>
												<th>Estado de Humedad </th>
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


//
					echo "var combinedTemperature = new Chart(canvas,
						{
								type: 'line',
								data: {";
										echo 'labels: ['.removeLastCaracter($lableOne).'],';
										echo 'datasets: [';
										echo '{';
														echo "label: '".nameForCabinets($sensorName)." ',
														fill: false,";
														echo "backgroundColor: window.chartColors.black,
														borderColor: window.chartColors.black,";
														echo 'data: ['.removeLastCaracter($dataOneTemperature).'],';
											echo '  },
						{';
														echo "label: ' ".nameForCabinets($sensorNameTwo)." ',
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
												fontSize: 18,
	                      fontColor: '#111',
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
echo "var combinedHumidity = new Chart(humidity,
						{
								type: 'line',
								data: {";
										echo 'labels: ['.removeLastCaracter($lableOne).'],';
										echo 'datasets: [';
										echo '{';
														echo "label: '".nameForCabinets($sensorName)." ',
														fill: false,";
														echo "backgroundColor: window.chartColors.black,
														borderColor: window.chartColors.black,";
														echo 'data: ['.removeLastCaracter($dataOneHumidity).'],';
											echo '  },
						{';
														echo "label: ' ".nameForCabinets($sensorNameTwo)." ',
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
												fontSize: 18,
	                      fontColor: '#111',
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
