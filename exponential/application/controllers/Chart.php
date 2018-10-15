<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_chart');
        $this->load->helper('url');
    }


	public function index()
	{
		$Data['data'] = $this->m_chart->findSensors();
		$this->load->view('One', $Data);
    // $this->load->view('index');
	}


	public function showchart()
	{
		$year1 = $this->input->post('yearOne');
		$year2 = $this->input->post('yearTwo');
    // $selectOne = $this->input->post('sensorId');
		$results = $this->m_chart->findSensorsByDate($year1, $year2);
    $Data['data'] = $results;
    $this->load->view('datatable', $Data);
	}


  public function getSensorId()
	{
		$name = $this->input->get('name');
    $nameOfType = $this->input->get('possition');
    // $results = $this->m_chart->fifTeenAddDays($name);TestFifTeenAddDays
    $enco = base64_decode($name);
    $changer = strstr($enco, 'The quick brown fox jumps over the lazy dog', true);
    $results = $this->m_chart->TestFifTeenAddDays($changer);
    $Data['data'] = $results;
    $Data['sesser'] = (int)$changer;
    if($nameOfType == "Above"){
      $this->load->view('fifTeenNormalAbove', $Data);
    }elseif($nameOfType == "Below"){
      $this->load->view('fifTeenNormalBelow', $Data);
    }elseif($nameOfType == "Compare"){
      $this->load->view('fifTeenCompare', $Data);
    }else{
      $this->load->view('fifTeenNormalAbove', $Data);
    }


	}


  public function belowSensorId()
	{
		$name = $this->input->post('name');
    $nameOfType = $this->input->post('possition');
    // $results = $this->m_chart->fifTeenAddDays($name);TestFifTeenAddDays
    $enco = base64_decode($name);
    $changer = strstr($enco, 'The quick brown fox jumps over the lazy dog', true);
    $results = $this->m_chart->TestFifTeenAddDays($changer);
    $Data['data'] = $results;
    $Data['sesser'] = (int)$changer;
    if($nameOfType == "Above"){
      $this->load->view('fifTeenNormalAbove', $Data);
    }elseif($nameOfType == "Below"){
      $this->load->view('fifTeenNormalBelow', $Data);
    }elseif($nameOfType == "Compare"){
      $this->load->view('fifTeenCompare', $Data);
    }

	}


  public function dayInfoAddDays()
  {
    $sensorId = $this->input->post('name');
    $datePublished = $this->input->post('date');
    $type = $this->input->post('possition');

    $enco = base64_decode($sensorId);
    $changer = strstr($enco, 'The quick brown fox jumps over the lazy dog', true);

    $results = $this->m_chart->TestSingleDayInfo($datePublished, $type);
    $Data['data'] = $results;
    $Data['sesser'] = (int)$changer;
    $Data['fiDate'] = $datePublished;

    if($type == "Above"){
      $this->load->view('OneDayAbove', $Data);
    }elseif($type == "Below"){
      $this->load->view('OneDayBelow', $Data);
    }elseif($type == "Compare"){
      $this->load->view('OneDayCompare', $Data);
    }else{
      $this->load->view('OneDayAbove', $Data);
    }

  }



  public function sensorOne()
  {
    $Data['data'] = $this->m_chart->findSensors();
    $this->load->view('One', $Data);
  }


  public function sensorTwo()
  {
    $Data['data'] = $this->m_chart->findSensors();
    $this->load->view('Two', $Data);
  }


  public function sensorThree()
  {
    $Data['data'] = $this->m_chart->findSensors();
    $this->load->view('Three', $Data);
  }


  public function sensorFour()
  {
    $Data['data'] = $this->m_chart->findSensors();
    $this->load->view('Four', $Data);
  }


  public function sensorFive()
  {
    $Data['data'] = $this->m_chart->findSensors();
    $this->load->view('Five', $Data);
  }


  public function sensorSix()
  {
    $Data['data'] = $this->m_chart->findSensors();
    $this->load->view('Six', $Data);
  }


  public function getCharts()
  {
    $chartData = $this->input->post('sensorId');
    $Data['data'] = $this->m_chart->findSensors();
    echo $chartData;
  }


}
