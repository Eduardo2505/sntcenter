<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	///private $destinatario="gomezluisnutricion@hotmail.com";
	private $destinatario="eduardopadillacz@gmail.com";

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

    public function normativa()
	{
		$datam['activar'] ='normativa';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);
		$this->load->view('normativa',$data);
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
		$data['costoConsulta']="900";
		$data['costoProgramaTotal']="2,700";
		$data['linkConsulta']="https://sntcenter.com.mx/planes/inicio/2-12-semanas.html";
		$data['linkProgramaTotal']="https://sntcenter.com.mx/planes/inicio/3-plan-12-semanas.html";
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
		$data['costoConsulta']="850";
		$data['costoProgramaTotal']="5,100";
		$data['linkConsulta']="https://sntcenter.com.mx/planes/inicio/5-consulta-24-semanas.html";
		$data['linkProgramaTotal']="https://sntcenter.com.mx/planes/inicio/4-plan-24-semanas.html";
		$data['numConsultas']="6";
		$this->load->view('plan',$data);
	}

	public function plan36seman()
	{
		

		
		$datam['activar'] ='planes';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);

		$data['titulo']="Plan Integral 36 semanas";
		$data['imagen']="36semanasF.jpg";
		$data['meses']="N/A";
		$data['costoConsulta']="800";
		$data['costoProgramaTotal']="7,200";
		$data['linkConsulta']="https://sntcenter.com.mx/planes/inicio/6-consulta-36-semanas.html";
		$data['linkProgramaTotal']="https://sntcenter.com.mx/planes/inicio/7-plan-36-semanas.html";
		$data['numConsultas']="9";
		$this->load->view('plan',$data);
	}


	public function plan48seman()
	{
		

		
		$datam['activar'] ='planes';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);

		$data['titulo']="Plan Integral 48 semanas";
		$data['imagen']="48semanasF.jpg";
		$data['meses']="N/A";
		$data['costoConsulta']="750";
		$data['costoProgramaTotal']="9,750";
		$data['linkConsulta']="https://sntcenter.com.mx/planes/inicio/9-consulta-48-semanas.html";
		$data['linkProgramaTotal']="https://sntcenter.com.mx/planes/inicio/8-plan-48-semanas.html";
		$data['numConsultas']="12";
		$this->load->view('plan',$data);
	}

	public function plan60seman()
	{
		

		
		$datam['activar'] ='planes';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);

		$data['titulo']="Plan Integral 60 semanas";
		$data['imagen']="60semanasF.jpg";
		$data['meses']="N/A";
		$data['costoConsulta']="700";
		$data['costoProgramaTotal']="11,200";
		$data['linkConsulta']="https://sntcenter.com.mx/planes/inicio/10-consulta-60-semanas.html";
		$data['linkProgramaTotal']="https://sntcenter.com.mx/planes/inicio/11-plan-60-semanas.html";
		$data['numConsultas']="15";
		$this->load->view('plan',$data);
	}


	public function plan72seman()
	{
		

		
		$datam['activar'] ='planes';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);

		$data['titulo']="Plan Integral 72 semanas";
		$data['imagen']="72semanasF.jpg";
		$data['meses']="N/A";
		$data['costoConsulta']="650";
		$data['costoProgramaTotal']="11,700";
		$data['linkConsulta']="https://sntcenter.com.mx/planes/inicio/13-consulta-72-semanas.html";
		$data['linkProgramaTotal']="https://sntcenter.com.mx/planes/inicio/12-plan-72-semanas.html";
		$data['numConsultas']="18";
		$this->load->view('plan',$data);
	}

	public function plan96seman()
	{
		

		
		$datam['activar'] ='planes';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);

		$data['titulo']="Plan Integral 96 semanas";
		$data['imagen']="96semanasF.jpg";
		$data['meses']="N/A";
		$data['costoConsulta']="600";
		$data['costoProgramaTotal']="14,400";
		$data['linkConsulta']="https://sntcenter.com.mx/planes/inicio/14-consulta-96-semanas.html";
		$data['linkProgramaTotal']="https://sntcenter.com.mx/planes/inicio/15-plan-96-semanas.html";
		$data['numConsultas']="24";
		$this->load->view('plan',$data);
	}

	public function eviarEmail()
	{
		

		
		$nombre=$this->input->post('nombre');
		$email=$this->input->post('email');
		$telefono=$this->input->post('telefono');
		$asunto=$this->input->post('asunto');
		$mensaje=$this->input->post('mensaje');

		
		$html= ' Email : '.$email.'
		<br>Nombre : '.$nombre.'
		<br>Teléfono: '.$telefono.'<br>
		<br>Mensaje: '.$mensaje.'
		'; 

		$cabeceras = 'From: contacto@sntcenter.com.mx' . "\r\n" .
		'Reply-To: suscripcion@sntcenter.com.mx' . "\r\n" .
		'Content-Type: text/html' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();



		if (mail($this->destinatario, utf8_decode($asunto), $html, $cabeceras)) {
			$datam['activar'] ='planes';
			$data['menu'] = $this->load->view('plantilla/menu', $datam, true);
			$data['mensaje']="Se envió correctamente el mensaje, en unos momentos nos estaremos comunicando.";
			$this->load->view('msn',$data);
		}else{
			echo "Error al enviarse correo";
		}

	}

	public function suscripcion()
	{
		

		
		
		$email=$this->input->post('email');
		$asunto="Suscripcion ".$this->input->post('email');
		
		
		$html= ' Email de Susucripción : '.$email; 

		$cabeceras = 'From: suscripcion@sntcenter.com.mx' . "\r\n" .
		'Reply-To: contacto@sntcenter.com.mx' . "\r\n" .
		'Content-Type: text/html' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();



		if (mail($this->destinatario, utf8_decode($asunto), $html, $cabeceras)) {
			$datam['activar'] ='planes';
			$data['menu'] = $this->load->view('plantilla/menu', $datam, true);
			$data['mensaje']="Gracias por tu suscripción";
			$this->load->view('msn',$data);
		}else{
			echo "Error al enviarse correo";
		}

	}


	public function ponenciaaca()
	{
		
		$datam['activar'] ='planes';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);
		$data['titulo']="Ponencia Académica";
		$data['imagen']="Ponenciaacademica.jpg";
		$data['costoConsulta']="1,25";
		$data['linkConsulta']="#";
		$this->load->view('serviciosprivados',$data);
	}

	public function clase()
	{
		
		$datam['activar'] ='planes';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);
		$data['titulo']="Clase privada académica";
		$data['imagen']="clasesPriva.jpg";
		$data['costoConsulta']="1,25";
		$data['linkConsulta']="#";
		$this->load->view('serviciosprivados',$data);
	}

	public function equipo()
	{
		
		$datam['activar'] ='planes';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);
		$data['titulo']="Equipo para seguimiento de la consulta";
		$data['imagen']="Equiponutricional.jpg";
		$data['costoConsulta']="1,25";
		$data['linkConsulta']="#";
		$this->load->view('serviciosprivados',$data);
	}





}
