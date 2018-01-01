<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function __construct() {
		parent::__construct();

		$this->load->helper('url');
	}
	public function index()
	{
		$datam['activar'] ='index';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);
		$this->load->view('welcome_message',$data);
	}

	public function yo()
	{
		$datam['activar'] ='yo';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);
		$this->load->view('yo',$data);
	}

	public function contacto()
	{
		$datam['activar'] ='contacto';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);
		$this->load->view('contacto',$data);
	}

	public function planes()
	{
		$datam['activar'] ='planes';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);
		$this->load->view('planes',$data);
	}

	public function plan12seman()
	{
		

		
		$datam['activar'] ='planes';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);

		$data['titulo']="Plan Integral 12 semanas";
		$data['imagen']="12semanasF.jpg";
		$data['meses']="N/A";
		$data['costoConsulta']="1,100";
		$data['costoProgramaTotal']="3,300";
		$data['linkConsulta']="https://sntcenter.com.mx/planes/inicio/2-consulta-12-semanas.html";
		$data['linkProgramaTotal']="";
		$data['numConsultas']="3";
		$this->load->view('plan',$data);
	}

	public function plan24seman()
	{
		

		
		$datam['activar'] ='planes';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);

		$data['titulo']="Plan Integral 24 semanas";
		$data['imagen']="24semanasF.jpg";
		$data['meses']="N/A";
		$data['costoConsulta']="1,100";
		$data['costoProgramaTotal']="3,300";
		$data['linkConsulta']="https://sntcenter.com.mx/planes/inicio/2-consulta-12-semanas.html";
		$data['linkProgramaTotal']="";
		$data['numConsultas']="3";
		$this->load->view('plan',$data);
	}




}
