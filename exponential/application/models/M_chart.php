<?php if(!defined('BASEPATH')) exit('No direct script access allowed!!');

class M_chart extends CI_Model
{


    public function __construct()
    {
          $this->load->database();
    }


    public function findSensors()
    {
      $query = $this->db->query("SELECT DISTINCT Sensores_id FROM graphchart_gabinete ORDER BY Sensores_id ASC");
      return $this->getDetailsOfSensorByDate();
    }


    public function findSensorsByDate($year1, $year2)
    {
      $query = $this->db->query("SELECT * FROM graphchart_gabinete WHERE Fecha BETWEEN '$year1' AND '$year2' ORDER BY Fecha ASC");
      return $query->result();
    }


    public function getDetailsOfSensors()
    {
      $retriever = $this->db->query("SELECT * FROM graphchart_gabinete WHERE Sensores_id IN ('1','2','3','4','5','6')");
      return $retriever->result_array();
    }


    public function getDetailsOfSensorByDate()
    {
      date_default_timezone_set('America/Guayaquil');
      // $todayEarly = date("Y-m-d")." 00:00:00";
      $todayEarly = "2018-04-19 00:00:00";
      $todayLater = date("Y-m-d")." 23:00:00";
      $byDtate = $this->db->query("SELECT * FROM graphchart_gabinete WHERE Fecha  BETWEEN '$todayEarly' AND '$todayLater' ORDER BY Fecha ASC");
      // $byDtate = $this->db->query("SELECT * FROM graphchart_gabinete WHERE Fecha  BETWEEN '2018-03-29 00:00:00' AND '2018-04-02 23:59:40' ORDER BY Fecha ASC");
      $totall= array();
      foreach ($byDtate->result() as $th) {
        $totall[] = '"'.$th->id.'",';
      }
      $tr = substr(implode(" ",$totall), 0, -1);
      $changed = str_replace('"',"'",$tr);
      $retriever = $this->db->query("SELECT * FROM graphchart_gabinete WHERE id IN ($changed)");
      return $retriever->result();
    }


    public function findSensorsByIdAddDays($name)
    {
      date_default_timezone_set('America/Guayaquil');
      //$today = date('Y-m-d ')." 00:00:00";
      $today = "2018-04-19 00:00:00";
      $year2 = date('Y-m-d', strtotime($today. ' - 15 days'));
      $afterFiveteen= $year2. ' 23:00:00';
      $query = $this->db->query("SELECT * FROM graphchart_gabinete WHERE Fecha BETWEEN '$afterFiveteen' AND '$today' ORDER BY Fecha ASC");
      $totall= array();
      foreach ($query->result() as $th) {
        if($th->Sensores_id === $name){
          $totall[] = '{"id":'.'"'.$th->id.'",
                      "Sensores_id":'.'"'.$th->Sensores_id.'",
                      "Fecha":'.'"'.$th->Fecha.'",
                      "Temperatura":'.'"'.$th->Temperatura.'",
                      "Humedad":'.'"'.$th->Humedad.'"},';
        }

      }
      $atm = substr(implode(" ",$totall), 0, -1);
      $convert = '['.$atm.']';
      return json_encode($totall);
    }


    public function fifTeenAddDays($name)
    {
      date_default_timezone_set('America/Guayaquil');
      //$today = date('Y-m-d ')." 23:00:00";
      $today = "2018-04-19 00:00:00";
      $year2 = date('Y-m-d', strtotime($today. ' - 15 days'));
      $afterFiveteen= $year2. ' 00:00:00';
      // $query = $this->db->query("SELECT * FROM graphchart_gabinete WHERE Fecha BETWEEN '$today' AND '$afterFiveteen' ORDER BY Fecha ASC");
      $query = $this->db->query("SELECT Sensores_id, MAX(Fecha) AS Fecha, MAX(Temperatura) AS Temperatura, MAX(Humedad), DATE_FORMAT(Fecha,'%Y-%m-%d') AS ymd FROM graphchart_gabinete WHERE Fecha BETWEEN '$today' AND '$afterFiveteen' GROUP BY Sensores_id, ymd ORDER BY Fecha ASC");
      $totall= array();
      foreach ($query->result() as $th) {

          switch ($name) {
          case 1:
          if($th->Sensores_id == 1){
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }elseif ($th->Sensores_id == 2) {
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }
          break;
          case 2:
          if($th->Sensores_id == 1){
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }elseif ($th->Sensores_id == 2) {
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }
          break;
          case 3:
          if($th->Sensores_id == 3){
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }elseif ($th->Sensores_id == 4) {
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }
          break;
          case 4:
          if($th->Sensores_id == 3){
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }elseif ($th->Sensores_id == 4) {
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }
          break;
          case 5:
          if($th->Sensores_id == 5){
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }elseif ($th->Sensores_id == 6) {
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }
          break;
          case 6:
          if($th->Sensores_id == 5){
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }elseif ($th->Sensores_id == 6) {
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }
          break;
          case 7:
          if($th->Sensores_id == 7){
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }elseif ($th->Sensores_id == 8) {
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }
          break;
          case 8:
          if($th->Sensores_id == 7){
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }elseif ($th->Sensores_id == 8) {
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }
          break;
          case 9:
          if($th->Sensores_id == 9){
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }elseif ($th->Sensores_id == 10) {
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }
          break;
          case 10:
          if($th->Sensores_id == 9){
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }elseif ($th->Sensores_id == 10) {
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }
          break;
          case 11:
          if($th->Sensores_id == 11){
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }elseif ($th->Sensores_id == 12) {
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }
          break;
          case 12:
          if($th->Sensores_id == 11){
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }elseif ($th->Sensores_id == 12) {
            $totall[] = '{"Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
          }
          break;
          	default:
          		echo "Please choose one sensor";
          	break;
        }

        }

        return json_encode($totall);
      }



      public function singleDayInfo($sensorId, $datePublished, $type)
      {
        $today = $datePublished." 00:00:00";
        $nighTime = $datePublished. ' 23:00:00';
        $query = $this->db->query("SELECT * FROM graphchart_gabinete WHERE Fecha BETWEEN '$today' AND '$nighTime' ORDER BY Fecha ASC");
        $totall= array();
        foreach ($query->result() as $th) {
          // if($th->Sensores_id === $name){
            switch ($sensorId) {
            case 1:
            if($th->Sensores_id == 1){
            $totall[] = '{"id":'.'"'.$th->id.'",
                        "Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
            }elseif ($th->Sensores_id == 2) {
              $totall[] = '{"id":'.'"'.$th->id.'",
                        "Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
            }
            break;
            case 2:
            if($th->Sensores_id == 1){
            $totall[] = '{"id":'.'"'.$th->id.'",
                        "Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
            }elseif ($th->Sensores_id == 2) {
              $totall[] = '{"id":'.'"'.$th->id.'",
                        "Sensores_id":'.'"'.$th->Sensores_id.'",
                        "Fecha":'.'"'.$th->Fecha.'",
                        "Temperatura":'.'"'.$th->Temperatura.'",
                        "Humedad":'.'"'.$th->Humedad.'"},';
            }
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
            case 9:

            break;
            case 10:

            break;
            case 11:

            break;
            case 12:

            break;
              default:
                echo "Please choose one sensor";
              break;
          }

          }
          // $atm = substr(implode(" ",$totall), 0, -1);
          // $convert = '['.$atm.']';
          return json_encode($totall);
        }


      public function AddDaysSensorDetails()
      {
          date_default_timezone_set('America/Guayaquil');
          //$today = date('Y-m-d ')." 23:59:00";
          $today = "2018-04-19 00:00:00";
	  $year2 = date('Y-m-d', strtotime($today. ' - 15 days'));
          $afterFiveteen= $year2. ' 00:00:00';
          $query = $this->db->query("SELECT * FROM graphchart_gabinete WHERE Fecha BETWEEN '$afterFiveteen' AND '$today' ORDER BY Fecha ASC");
          return $query->result();
       }


       function removeLastCaracter($asd)
       {
        	$fastOne = substr(implode(" ",$asd), 0, -1);
    	    return $fastOne;
       }


       public function TestFifTeenAddDays($name)
       {
         date_default_timezone_set('America/Guayaquil');
         //$today = date('Y-m-d ')." 23:59:00";
         $today = "2018-04-19 00:00:00";
	 $year2 = date('Y-m-d', strtotime($today. ' - 15 days'));
         $afterFiveteen= $year2. ' 00:00:00';
         $query = $this->db->query("SELECT id, Sensores_id, MAX(Fecha) AS Fecha, MAX(Temperatura) AS Temperatura, MAX(Humedad)AS Humedad, DATE_FORMAT(Fecha,'%Y-%m-%d') AS ymd FROM graphchart_gabinete WHERE Fecha BETWEEN '$afterFiveteen' AND '$today' GROUP BY Sensores_id, ymd ORDER BY Fecha ASC");
         return $query->result();
       }



        public function TestSingleDayInfo($datePublished, $type)
       {
           $today = $datePublished." 00:00:00";
           $nighTime = $datePublished. ' 23:00:00';
           $query = $this->db->query("SELECT * FROM graphchart_gabinete WHERE Fecha BETWEEN '$today' AND '$nighTime' ORDER BY Fecha ASC");
          return $query->result();
        }





}
