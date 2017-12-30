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


}
