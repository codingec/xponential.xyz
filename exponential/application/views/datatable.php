<?php
date_default_timezone_set('America/Guayaquil');
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
	$justDate = date('Y-m-d', strtotime($setTheGetter));
	return $justDate;
}

function uniqueValues($setTheGetter){
  $result = array_unique($setTheGetter);
  return implode($result);

}


//FUNCTIONS
function getStatusTemperature($transform){
 if ($transform <= 5) {
	   return '<button type="button" class="btn btn-danger">CRITICO</button>';
 } elseif ($transform >= 6 && $transform <= 10) {
		return '<button type="button" class="btn btn-warning">PREVENTIVO</button>';
 }elseif ($transform >= 11 && $transform <= 20) {
		 return '<button type="button" class="btn btn-success">NORMAL</button>';
 }elseif ($transform >= 21 && $transform <= 25) {
		 return '<button type="button" class="btn btn-warning">PREVENTIVO</button>';
 }elseif ($transform >= 26) {
		 return '<button type="button" class="btn btn-danger">CRITICO</button>';
 }else{
		 return '<button type="button" class="btn btn-warning">ERROR</button>';
 }
}
function getStatusHumidity($transform){
 if ($transform <= 30) {
	 return '<button type="button" class="btn btn-danger">CRITICO</button>';
 } elseif ($transform >= 31 && $transform <= 45) {
	  return '<button type="button" class="btn btn-warning">PREVENTIVO</button>';
 }elseif ($transform >= 46 && $transform <= 60) {
		 return '<button type="button" class="btn btn-success">NORMAL</button>';
 }elseif ($transform >= 61 && $transform <= 80) {
		 return '<button type="button" class="btn btn-warning">PREVENTIVO</button>';
 }elseif ($transform >= 81) {
		 return '<button type="button" class="btn btn-danger">CRITICO</button>';
 }else{
		 return '<button type="button" class="btn btn-warning">ERROR</button>';
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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ROPORTE PERSONALIZADO</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/main/bootstrap.css" />
	<link rel="stylesheet" href="../assets/private/private/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../assets/private/private/datatables/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="../assets/private/css/sb-admin.css">
	<link rel="stylesheet" href="../assets/css/main/datetimepicker.css">
	<script src="../assets/private/private/jquery/jquery.min.js"></script>
	<script src="../assets/js/main/datetimepicker.js"></script>
	<script src="../assets/js/dates.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" href="../assets/css/main/screensize.css">
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="http://localhost/exponential"><img src="../assets/img/xponential/logo.png" alt="Mountain View"></a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">


	      </ul>
	    </div>
	  </div>
	</nav>

  <!-- Container (Portfolio Section) id="portfolio" -->
  <div  id="std" class="container">
      <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              <div id="one" class="item active">
                <img src="../assets/img/xponential/slider/one.png"  style="width:100%;" alt="Mountain View">

                <div class="carousel-caption">
                        <h3> </h3>
                        <p> </p>
                      </div>
                  </div>
              <div  id="two" class="item">
                <img src="../assets/img/xponential/slider/two.png"  style="width:100%;" alt="Mountain View">
                <div class="carousel-caption">
            <h3> </h3>
            <p> </p>
          </div>
              </div>
              <div id="three" class="item">
                <img src="../assets/img/xponential/slider/three.png"  style="width:100%;" alt="Mountain View">

                <div class="carousel-caption">
                        <h3> </h3>
                        <p> </p>
                      </div>
              </div>
          </div>

          <!-- Left and right controls -->
          <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right"></span>
       <span class="sr-only">Next</span>
          </a>
      </div>
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

									<!-- <label class="control-label col-sm-4" for="price"> Sensor:
										<select  name="sensorId" class="selectpicker" data-style="btn-success">
										<option value="0"selected>Escoger sensor</option>
									  <option value="1">Sensor 1</option>
									  <option value="2">Sensor 2</option>
									  <option value="3">Sensor 3</option>
										<option value="4">Sensor 4</option>
										<option value="5">Sensor 5</option>
										<option value="6">Sensor 6</option>
									</select></label> -->

								</div>
								<input class="btn btn-primary" type="submit" value="Search" />
							</div>

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


                        </tr>
												<?php

												foreach ($data as $th) {
													echo "<tr>
	                            <td>".nameForCabinets($th->Sensores_id)."</td>
															<td>".$th->Fecha."</td>
															<td>".$th->Temperatura."</td>
															<td>".$th->Humedad."</td>
															<td>".getStatusTemperature($th->Temperatura)."</td>
															<td>".getStatusHumidity($th->Humedad)."</td>";
												}

												?>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated
							<?php
								echo  date('Y-m-d  h:i a');
						 ?></div>
        </div>

        <footer class="container-fluid text-center">

          <p>@Copyrights <a href="http://xponential.tech" title="Visit http://xponential.tech"> xponential.tech</a></p>
        </footer>
				<script src="../assets/private/private/bootstrap/js/bootstrap.bundle.min.js"></script>
				<script src="../assets/private/private/chart.js/Chart.min.js"></script>
				<script src="../assets/private/private/datatables/jquery.dataTables.min.js"></script>
				<script src="../assets/private/private/datatables/dataTables.bootstrap4.js"></script>
				<script src="../assets/private/js/reports/sb-admin-datatables.js"></script>
				<script src="../assets/private/js/charts/sb-admin-charts.js"></script>


</body>



</html>
