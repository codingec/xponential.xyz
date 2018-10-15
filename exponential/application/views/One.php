<!DOCTYPE html>
<html lang="en">
<head>

 <title>Sensor One</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="assets/css/main/bootstrap.css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 <style>
 body {
		 font: 400 15px Lato, sans-serif;
		 line-height: 1.8;
		 color: #818181;
 }
 h2 {
		 font-size: 24px;
		 text-transform: uppercase;
		 color: #303030;
		 font-weight: 600;
		 margin-bottom: 30px;
 }
 h4 {
		 font-size: 19px;
		 line-height: 1.375em;
		 color: #303030;
		 font-weight: 400;
		 margin-bottom: 30px;
 }
 .jumbotron {
		 background-color: #f41ec9;
		 color: #fff;
		 padding: 100px 25px;
		 font-family: Montserrat, sans-serif;
 }
 .container-fluid {
		 padding: 60px 50px;
 }
 .bg-grey {
		 background-color: #f6f6f6;
 }
 .logo-small {
		 color: #f41ec9;
		 font-size: 50px;
 }
 .logo {
		 color: #f41ec9;
		 font-size: 200px;
 }
 .thumbnail {
		 padding: 0 0 15px 0;
		 border: none;
		 border-radius: 0;
 }
 .thumbnail img {
		 width: 100%;
		 height: 100%;
		 margin-bottom: 10px;
 }
 .carousel-control.right, .carousel-control.left {
		 background-image: none;
		 color: #fff;
 }
 .carousel-indicators li {
		 border-color: #fff;
 }
 .carousel-indicators li.active {
		 background-color: #fff;
 }

 .item h4 {
		 font-size: 19px;
		 line-height: 1.375em;
		 font-weight: 400;
		 font-style: italic;
		 margin: 70px 0;
 }
 .item span {
		 font-style: normal;
 }
 .panel {
		 border: 1px solid #f41ec9;
		 border-radius:0 !important;
		 transition: box-shadow 0.5s;
 }
 .panel:hover {
		 box-shadow: 5px 0px 40px rgba(0,0,0, .2);
 }
 .panel-footer .btn:hover {
		 border: 1px solid #f41ec9;
		 background-color: #fff !important;
		 color: #f41ec9;
 }
 .panel-heading {
		 color: #fff !important;
		 background-color: #f41ec9 !important;
		 padding: 25px;
		 border-bottom: 1px solid transparent;
		 border-top-left-radius: 0px;
		 border-top-right-radius: 0px;
		 border-bottom-left-radius: 0px;
		 border-bottom-right-radius: 0px;
 }
 .panel-footer {
		 background-color: white !important;
 }
 .panel-footer h3 {
		 font-size: 32px;
 }
 .panel-footer h4 {
		 color: #aaa;
		 font-size: 14px;
 }
 .panel-footer .btn {
		 margin: 15px 0;
		 background-color: #f41ec9;
		 color: #fff;
 }
 .navbar {
		 margin-bottom: 0;
		 background-color: #000;
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
		 color: #000 !important;
		 background-color: #fff !important;
 }
 .navbar-default .navbar-toggle {
		 border-color: transparent;
		 color: #fff !important;
 }

 .navbar li a {
     border-style: solid;
     border-color: #00bbf1;
     border-width: thin;
 }
 .nav  .liLikeA  {
    /* position: relative; */
    display: block;
    padding: 10px 15px;
    position: relative;
    display: block;
    padding-top: 15px;
    padding-bottom: 15px;
    /* padding: 10px 15px; */
}
footer{
  background-color: #000;
  height: 15px;
  color: white;

}

 footer .glyphicon {
		 font-size: 20px;
		 margin-bottom: 20px;
		 color: #000;
 }
 .slideanim {visibility:hidden;}
 .slide {
		 animation-name: slide;
		 -webkit-animation-name: slide;
		 animation-duration: 1s;
		 -webkit-animation-duration: 1s;
		 visibility: visible;
 }
 @keyframes slide {
	 0% {
		 opacity: 0;
		 transform: translateY(70%);
	 }
	 100% {
		 opacity: 1;
		 transform: translateY(0%);
	 }
 }
 @-webkit-keyframes slide {
	 0% {
		 opacity: 0;
		 -webkit-transform: translateY(70%);
	 }
	 100% {
		 opacity: 1;
		 -webkit-transform: translateY(0%);
	 }
 }
 @media screen and (max-width: 768px) {
	 .col-sm-4 {
		 text-align: center;
		 margin: 25px 0;
	 }
	 .btn-lg {
			 width: 100%;
			 margin-bottom: 35px;
	 }
 }
 @media screen and (max-width: 480px) {
	 .logo {
			 font-size: 150px;
	 }
 }

#cardStyler{
    margin-top: 5px;
    margin-left: 5px;
    margin-right: 5px;
}


.card {
  overflow: hidden;
  position: relative;
  border: 1px solid #CCC;
  border-radius: 8px;
  text-align: center;
  padding: 0;
  /* background-color: #284c79; */
  color: rgb(136, 172, 217);
}

.card .header-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 70px;
  border-bottom: 1px #FFF solid;
  z-index: 1;
}
.card .avatar {
  position: relative;
  z-index: 100;
  background-color: #000;

}

.circle {
    background: #00bbf1;
    border-radius: 50px;
    text-align: center;
    vertical-align: middle;
    color: white;
    height: 50px;
    font-weight: bold;
    width: 50px;
    display: table;
    margin: 5px auto;

}
.circle p {
    vertical-align: middle;
    display: table-cell;
    font-size: 27px;
}

.external {
    background: #3e55ce;
    border-radius: 50px;
    text-align: center;
    vertical-align: middle;
    color: white;
    height: 50px;
    font-weight: bold;
    width: 50px;
    display: table;
    margin: 5px auto;

}
.external p {
    vertical-align: middle;
    display: table-cell;
    font-size: 27px;
}

#std{
  width: 100%;
   height: 100%;
   margin: 0 !important;
    padding: 0 !important;
   background-position: center;
   -webkit-background-size: cover;
   -moz-background-size: cover;
   background-size: cover;
   -o-background-size: cover;
}

.centered {
    text-align: center;
    width: 80%;
    height: 80%;
    margin: 0,auto;
}

.heatherColor{
  color: #00bbf1;
}
#btStyle{
  border-color: #00bbf1;
}
 </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- START  id="btStyle" -->



<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="http://www.su-techbian.com/exponential">
        <img src="assets/img/xponential/logo.png" alt="Mountain View"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li class="liLikeA"> CUADROS ESTADISTICOS DE SENSORES </li>
        <li><a href="#about">SENSORES POR GABINETE</a></li>

      </ul>
    </div>
  </div>
</nav>
<br></br>


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
              <img src="assets/img/xponential/slider/one.png"  style="width:100%;" alt="Mountain View">

              <div class="carousel-caption">
                      <h3> </h3>
                      <p> </p>
                    </div>
                </div>
            <div  id="two" class="item">
              <img src="assets/img/xponential/slider/two.png"  style="width:100%;" alt="Mountain View">
              <div class="carousel-caption">
          <h3> </h3>
          <p> </p>
        </div>
            </div>
            <div id="three" class="item">
              <img src="assets/img/xponential/slider/three.png"  style="width:100%;" alt="Mountain View">

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

<div class="container-fluid centered">
<img src="assets/img/xponential/Allcabinets.png" style="width:100%; height: 100%;">
</div>


<!-- CHARTJS -->
<br></br>
<div id="wrapper">
	<!-- <div class="container">
 <div class="row">
 <div class="col-sm-8" >
 <canvas id="myChart" width="60" height="40"></canvas>
 </div>
 </div>
 </div> -->


<!-- Container (About Section) -->
<div id="about" class="container-fluid">

    <div class="col-sm-8">
      <h2>SELECCIONE UNO DE LOS SENSORES</h2><br>
      <br>
      <p></p>
      <br>

      <a href="http://www.su-techbian.com/exponential/chart/showchart" class="btn btn-primary">Reporte Personalizado</a>
        <br>   </br>

        <?php


        date_default_timezone_set('America/Guayaquil');
        //ONE
        $todayEarly = date("Y-m-d")." 00:00:00";
        $todayLater = date("Y-m-d")." 23:59:50";

        $one= array();
      	$backgroundColorOne= array();
      	$borderColorOne= array();
      	$sensorName= "";
      	$lableOne= array();
      	$dataOneTemperature= array();
      	$dataOneHumidity= array();
        //END ONE

        //TWO
        $two= array();
        $backgroundColorTwo= array();
        $borderColorTwo= array();
        $sensorNameTwo= "";
        $lableTwo= array();
        $dataTwoTemperature= array();
        $dataTwoHumidity= array();
        //END TWO

        //THREE
        $three= array();
        $backgroundColorThree= array();
      	$borderColorThree= array();
      	$sensorNameThree= "";
      	$lableThree= array();
      	$dataThreeTemperature= array();
      	$dataThreeHumidity= array();
        //END THREE

        //FOUR
        $four= array();
        $backgroundColorFour= array();
      	$borderColorFour= array();
      	$sensorNameFour= "";
      	$lableFour= array();
      	$dataFourTemperature= array();
      	$dataFourHumidity= array();

        //END FOUR

        //FIVE
        $five= array();
        $backgroundColorFive= array();
      	$borderColorFive= array();
      	$sensorNameFive= "";
      	$lableFive= array();
      	$dataFiveTemperature= array();
      	$dataFiveHumidity= array();

        //END FIVE

        //SIX
        $six= array();
        $backgroundColorSix= array();
      	$borderColorSix= array();
      	$sensorNameSix= "";
      	$lableSix= array();
      	$dataSixTemperature= array();
      	$dataSixHumidity= array();


            $lableSeven  = array();
            $dataSevenTemperature[] = array();
            $dataSevenHumidity[] = array();
            $sensorNameSeven = "";


            $lableEight = array();
            $dataEightTemperature = array();
            $dataEightHumidity = array();
            $sensorNameEight = '';




            $lableNine = array();
            $dataNineTemperature = array();
            $dataNinetHumidity = array();
            $sensorNameNine = "";




            $lableTen = array();
            $dataTenTemperature = array();
            $dataTentHumidity = array();
            $sensorNameTen = "";



            $lableEleven = array();
            $dataElevenTemperature = array();
            $dataElevenHumidity = array();
            $sensorNameEleven = '';



            $lableTwelve = array();
            $dataTwelveTemperature = array();
            $dataTwelveHumidity = array();
            $sensorNameTwelve = "";


        function validateData($lalala){
          if(empty($lalala))
          {
            return 0;
          }else
          {
            return getLastObject($lalala);
          }

      }
        //END SIX

        function backgroundColor($transform){
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

        function borderColor($transform){
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

        function getLastObject($asd){
          $last = end($asd);
        	return $last;
        }

        foreach ($data as $th) {

        switch ($th->Sensores_id) {
        case 1:
        if($th->Sensores_id == 1){
          $lableOne[] = '"'.$th->Fecha.'",';
        	$dataOneTemperature[] = $th->Temperatura.',';
          $dataOneHumidity[] = $th->Humedad.',';
        	$sensorName = $th->Sensores_id;
         }
        	break;
          case 2:
          if ($th->Sensores_id == 2) {
            $lableTwo[] = '"'.$th->Fecha.'",';
          	$dataTwoTemperature[] = $th->Temperatura.',';
            $dataTwoHumidity[] = $th->Humedad.',';
          	$sensorNameTwo = $th->Sensores_id;
           }
          break;
          case 3:
          if ($th->Sensores_id == 3) {
            $lableThree[] = '"'.$th->Fecha.'",';
          	$dataThreeTemperature[] = $th->Temperatura.',';
            $dataThreeHumidity[] = $th->Humedad.',';
          	$sensorNameThree = $th->Sensores_id;
           }
          break;
          case 4:
          if ($th->Sensores_id == 4) {
            $lableFour[] = '"'.$th->Fecha.'",';
          	$dataFourTemperature[] = $th->Temperatura.',';
            $dataFourHumidity[] = $th->Humedad.',';
          	$sensorNameFour = $th->Sensores_id;
           }
          break;
          case 5:
          if ($th->Sensores_id == 5) {
            $lableFive[] = '"'.$th->Fecha.'",';
          	$dataFiveTemperature[] = $th->Temperatura.',';
            $dataFiveHumidity[] = $th->Humedad.',';
          	$sensorNameFive = $th->Sensores_id;
           }
          break;
          case 6:
          if ($th->Sensores_id == 6) {
            $lableSix[] = '"'.$th->Fecha.'",';
          	$dataSixTemperature[] = $th->Temperatura.',';
            $dataSixHumidity[] = $th->Humedad.',';
          	$sensorNameSix = $th->Sensores_id;
           }
          break;
          case 7:
          if ($th->Sensores_id == 7) {
            $lableSeven[] = '"'.$th->Fecha.'",';
          	$dataSevenTemperature[] = $th->Temperatura.',';
            $dataSevenHumidity[] = $th->Humedad.',';
          	$sensorNameSeven= $th->Sensores_id;
           }
          break;
          case 8:
          if ($th->Sensores_id == 8) {
            $lableEight[] = '"'.$th->Fecha.'",';
          	$dataEightTemperature[] = $th->Temperatura.',';
            $dataEightHumidity[] = $th->Humedad.',';
          	$sensorNameEight = $th->Sensores_id;
           }
          break;
          case 9:
          if ($th->Sensores_id == 9) {
            $lableNine[] = '"'.$th->Fecha.'",';
          	$dataNineTemperature[] = $th->Temperatura.',';
            $dataNinetHumidity[] = $th->Humedad.',';
          	$sensorNameNine = $th->Sensores_id;
           }
          break;
          case 10:
          if ($th->Sensores_id == 10) {
            $lableTen[] = '"'.$th->Fecha.'",';
          	$dataTenTemperature[] = $th->Temperatura.',';
            $dataTentHumidity[] = $th->Humedad.',';
          	$sensorNameTen = $th->Sensores_id;
           }
          break;
          case 11:
          if ($th->Sensores_id == 11) {
            $lableEleven[] = '"'.$th->Fecha.'",';
          	$dataElevenTemperature[] = $th->Temperatura.',';
            $dataElevenHumidity[] = $th->Humedad.',';
          	$sensorNameEleven = $th->Sensores_id;
           }
           break;
           case 12:
           if ($th->Sensores_id == 12) {
            $lableTwelve[] = '"'.$th->Fecha.'",';
           	$dataTwelveTemperature[] = $th->Temperatura.',';
            $dataTwelveHumidity[] = $th->Humedad.',';
           	$sensorNameTwelve = $th->Sensores_id;
            }
            break;
          default:
            // header("Location: http://xponential.tech");
}
}
      echo '
             <div id="cardStyler" class="col-sm-4">

                 <div class="card">
                 <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>

                 <div class="avatar">
                    <!------  <img src="" alt="" /> ---------->

                     <span class="badge"><h1>Gabinete 1</h1></span>

                 </div>

                     <div class="content">
                     <a href="http://www.su-techbian.com/exponential/chart/getSensorId?name='
                     .$encoded = base64_encode('1 The quick brown fox jumps over the lazy dog').'
                     ">
                     <div class="circle">
                <p>1</p>
            </div>
            </a>

<table class="table">
<thead>
  <tr class="heatherColor">
    <th>Sensor</th>
    <th>Temperatura</th>
    <th>Humedad</th>
  </tr>
</thead>
<tbody>
 <tr>
 <td> Arriba</td>
        <td>'.validateData($dataOneTemperature).'</td>
        <td>'.validateData($dataOneHumidity).'</td>  </tr>
        <tr>
        <td>Abajo</td>
               <td>'.validateData($dataTwoTemperature).'</td>
               <td>'.validateData($dataTwoHumidity).'</td>
               </tr>
   </tbody>
 </table></p>
<p>
<button type="button" id="btStyle" class="btn btn-default">

<a href="http://www.su-techbian.com/exponential/chart/getSensorId?name='
.$encoded = base64_encode('1 The quick brown fox jumps over the lazy dog').'
">Gabinete 1</a>
</button></p>
                     </div>
                 </div>
             </div>



             <div id="cardStyler" class="col-sm-4">

                 <div class="card">
                     <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>

                     <div class="avatar">
                        <!------  <img src="" alt="" /> ---------->
                         <span class="badge"><h1>Gabinete 2</h1></span></a>
                     </div>

                     <div class="content">
                     <a href="http://www.su-techbian.com/exponential/chart/getSensorId?name='
                     .$encoded = base64_encode('2 The quick brown fox jumps over the lazy dog').'">
                     <div class="circle">
                     <p>2</p>
                    </div>
                    </a>
                     <table class="table">
                     <thead>
                       <tr class="heatherColor">
                         <th>Sensor</th>
                         <th>Temperatura</th>
                         <th>Humedad</th>
                       </tr>
                     </thead>
                     <tbody>
                      <tr>
                      <td> Arriba</td>
                             <td>'.validateData($dataThreeTemperature).'</td>
                             <td>'.validateData($dataThreeHumidity).'</td>  </tr>
                             <tr>
                             <td>Abajo</td>
                                    <td>'.validateData($dataFourTemperature).'</td>
                                    <td>'.validateData($dataFourHumidity).'</td>
                                    </tr>
                        </tbody>
                      </table></p>
                     <p>
                         <button type="button" id="btStyle" class="btn btn-default">
                         <a href="http://www.su-techbian.com/exponential/chart/getSensorId?name='
                         .$encoded = base64_encode('2 The quick brown fox jumps over the lazy dog').'">
                         Gabinete 2
                         </a></button></p>
                     </div>

                 </div>
             </div>


             <div id="cardStyler" class="col-sm-4">

                 <div class="card">
                     <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>

                     <div class="avatar">
                        <!------  <img src="" alt="" /> ---------->
                         <span class="badge"><h1>Gabinete 3</h1></span></a>
                     </div>

                     <div class="content">
                     <a href="http://www.su-techbian.com/exponential/chart/getSensorId?name='
                     .$encoded = base64_encode('3 The quick brown fox jumps over the lazy dog').'">
                     <div class="circle">
                     <p>3</p>
                     </div>
                     </a>
                     <table class="table">
                     <thead>
                       <tr class="heatherColor">
                         <th>Sensor</th>
                         <th>Temperatura</th>
                         <th>Humedad</th>
                       </tr>
                     </thead>
                     <tbody>
                      <tr>
                      <td> Arriba</td>
                             <td>'.validateData($dataFiveTemperature).'</td>
                             <td>'.validateData($dataFiveHumidity).'</td>  </tr>
                             <tr>
                             <td>Abajo</td>
                                    <td>'.validateData($dataSixTemperature).'</td>
                                    <td>'.validateData($dataSixHumidity).'</td>
                                    </tr>
                        </tbody>
                      </table></p>
                     <p>
                         <button type="button" id="btStyle" class="btn btn-default">
                         <a href="http://www.su-techbian.com/exponential/chart/getSensorId?name='
                         .$encoded = base64_encode('3 The quick brown fox jumps over the lazy dog').'">
                         Gabinete 3
                         </a></button></p>
                     </div>

                 </div>
             </div>


             <div id="cardStyler" class="col-sm-4">

                 <div class="card">
                     <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>

                     <div class="avatar">
                        <!------  <img src="" alt="" /> ---------->
                         <span class="badge"><h1>Gabinete 4</h1></span></a>
                     </div>

                     <div class="content">
                     <a href="http://www.su-techbian.com/exponential/chart/getSensorId?name='
                     .$encoded = base64_encode('4 The quick brown fox jumps over the lazy dog').'">
                     <div class="circle">
                     <p>4</p>
                     </div>
                     </a>
                     <table class="table">
                     <thead>
                       <tr class="heatherColor">
                         <th>Sensor</th>
                         <th>Temperatura</th>
                         <th>Humedad</th>
                       </tr>
                     </thead>
                     <tbody>
                      <tr>
                      <td> Arriba</td>
                             <td>'.validateData($dataSevenTemperature).'</td>
                             <td>'.validateData($dataSevenHumidity).'</td>  </tr>
                             <tr>
                             <td>Abajo</td>
                                    <td>'.validateData($dataEightTemperature).'</td>
                                    <td>'.validateData($dataEightHumidity).'</td>

                                                 </tr>


                        </tbody>
                      </table></p>
                     <p>
                         <p><button type="button" id="btStyle" class="btn btn-default">
                         <a href="http://www.su-techbian.com/exponential/chart/getSensorId?name='
                         .$encoded = base64_encode('4 The quick brown fox jumps over the lazy dog').'">
                         Gabinete 4</a></button></p>
                     </div>

                 </div>
             </div>





             <div id="cardStyler" class="col-sm-4">

                 <div class="card">
                     <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>

                     <div class="avatar">
                        <!------  <img src="" alt="" /> ---------->
                         <span class="badge"><h1>Gabinete 5</h1></span></a>
                     </div>

                     <div class="content">
                     <a href="http://www.su-techbian.com/exponential/chart/getSensorId?name='
                     .$encoded = base64_encode('5 The quick brown fox jumps over the lazy dog').'">
                     <div class="circle">
                     <p>5</p>
                     </div>
                     </a>
                     <table class="table">
                     <thead>
                       <tr class="heatherColor">
                         <th>Sensor</th>
                         <th>Temperatura</th>
                         <th>Humedad</th>
                       </tr>
                     </thead>
                     <tbody>
                      <tr>
                      <td> Arriba</td>
                             <td>'.validateData($dataNineTemperature).'</td>
                             <td>'.validateData($dataNinetHumidity).'</td>  </tr>
                             <tr>
                             <td>Abajo</td>
                                    <td>'.validateData($dataTenTemperature).'</td>
                                    <td>'.validateData($dataTentHumidity).'</td>

                                                 </tr>


                        </tbody>
                      </table></p>
                     <p>
                         <button type="button"  id="btStyle" class="btn btn-default">
                         <a href="http://www.su-techbian.com/exponential/chart/getSensorId?name='
                         .$encoded = base64_encode('5 The quick brown fox jumps over the lazy dog').'">
                         Gabinete 5
                         </a></button></p>
                     </div>

                 </div>
             </div>


             <div id="cardStyler" class="col-sm-4">

                 <div class="card">
                     <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>

                     <div class="avatar">
                        <!------  <img src="" alt="" /> ---------->
                         <span class="badge"><h1>Exterior</h1></span></a>
                     </div>

                     <div class="content">
                     <a href="http://www.su-techbian.com/exponential/chart/getSensorId?name='
                     .$encoded = base64_encode('6 The quick brown fox jumps over the lazy dog').'">
                     <div class="external">
                     <p>6</p>
                     </div>
                     </a>
                     <table class="table">
                     <thead>
                       <tr class="heatherColor">
                         <th>Sensor</th>
                         <th>Temperatura</th>
                         <th>Humedad</th>
                       </tr>
                     </thead>
                     <tbody>
                      <tr>
                      <td> Izquierdo</td>
                             <td>'.validateData($dataElevenTemperature).'</td>
                             <td>'.validateData($dataElevenHumidity).'</td>  </tr>
                             <tr>
                             <td>Derecha</td>
                                    <td>'. validateData($dataTwelveTemperature).'</td>
                                    <td>'. validateData($dataTwelveHumidity).'</td>

                                                 </tr>


                        </tbody>
                      </table></p>
                     <p>
                         <button type="button" id="btStyle" class="btn btn-default">
                         <a href="http://www.su-techbian.com/exponential/chart/getSensorId?name='
                         .$encoded = base64_encode('6 The quick brown fox jumps over the lazy dog').'">
                         Exterior
                         </a></button></p>
                     </div>

                 </div>



</div>
</div>

</div>




</div>

 ';



		?>

			</div>
		</div>
	</div>

</div> <!--END OF WRAPPER-->
<footer class="container-fluid ">
  Todos los derechos reservados <a href="http://www.su-techbian.com" title="Visit http://www.su-techbian.com">@Xponential</a>
  <div class="firmesa " style="float:right; margin-right:5px;">
  Bajo el aval de
  <img src="assets/img/xponential/FIRMESA.png" style="width: 50%; height: 17%;  ">
</div>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>

<?php
// $array = array(1, 2, 2, 3, 5, 8, 9, 1, 3);
// $unique = array_unique( $array);
// $input = array("a" => "green", "red", "b" => "green", "blue", "red");
// $result = array_unique($input);
// echo implode($result) ;

 ?>
