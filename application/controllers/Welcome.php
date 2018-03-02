<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	private $destinatario="gomezluisnutricion@hotmail.com";
	//private $destinatario="eduardopadillacz@gmail.com";

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
		$data['iformacion']="Ponencia en temas y talleres, durante certificaciones, diplomados, 
		seminarios, congresos, etc, ya sean presenciales o en línea. 
		Referente a temas relacionados con Nutricion, Entrenamiento, 
		Fitness, Farmacología y Culturismo. <br><br>
		El precio de los Honorarios profesionales se negociará con el organizador 
		conforme las diferentes características del evento. 
		Los gastos de Viáticos se cubrirán por parte del organizador del evento. 
		";
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
		$data['iformacion']='Asesoría académica personalizada, 
		referente a temas relacionados con Nutricion, Entrenamiento, 
		Fitness, Farmacología y Culturismo. <br><br>
		Se agenda un horario adecuado para ambas partes 
		y poder hacer una video llamada por Skype. <br><br>
		Se trabajará en sesiones de 2 horas, tomando en total 4 horas cada tema. 
		Se brindará al alumno la presentación del tema más diversos formatos 
		y materiales educativos (artículos científicos, imágenes, tablas y libros) 
		para que profundice más por su cuenta. <br><br>
		Precio por 1 hora de clase privada: $ 500. 
		Las horas de clase necesarias dependerán del tema y del alumno. 
		';
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
		$data['iformacion']='Material necesario para poder llevar un mejor control de la consulta. 
		Pudiendo evaluar de mejor manera los cambios corporales (masa muscular y grasa corporal) mientras 
		se puede llevar el Plan de alimentación más exacto, midiendo y pesando la comida. <br><br>
		•	Báscula de composición corporal, Beurer BG-17.<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o	Mide 4 parámetros:<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	Peso corporal<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	Grasa corporal<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	Agua corporal<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	Masa muscular<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o	Características:<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	5 niveles de actividad física (modo atleta)<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	Memoria de almacenamiento para 10 usuarios<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	Método de encendido Tap-On.<br><br>
		•	Báscula digital de alimentos de tazón.<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o	Pantalla LCD con números grandes de fácil lectura.<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o	Capacidad 5 kg.<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o	Bowl incluido.<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o	Función de tarar.<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o	2 pilas AA incluidas.<br><br>
		•	Set de Tazas medidoras (4 tazas).<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o	Capacidad: ¼, ⅓, ½ y 1 taza.<br><br>
		•	Set de Cucharas medidoras (5 cucharas).<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o	Capacidad: ¼, ⅓, ½ y 1 cdita, ½ y 1 cda.<br>
		Precio especial del paquete $ 950 + Envió ($150) = $1100.
		';
		$this->load->view('serviciosprivados',$data);
	}


	public function usarcupon()
	{
		$datam['activar'] ='normativa';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);
		$this->load->view('cupon',$data);

	}
	public function emialPromocion()
	{
		

		$email=$this->input->get('email');
		$nombre=$this->input->get('nombre');
		$codigo=$this->input->get('codigo');
		$descuento=$this->input->get('descuento');

		$data['descuento'] =$descuento.' %';
		$data['codigo'] =$codigo;
		$data['nombre'] =$nombre;
		$html= $this->load->view('emailplantilla',$data,true);

		$asunto=$descuento.' % para tu siguiente consulta';
		$cabeceras = 'From: SNT Center <gomezluisnutricion@hotmail.com>' . "\r\n" .
		'Reply-To: gomezluisnutricion@hotmail.com ' . "\r\n" .
		'Content-Type: text/html' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		if (mail($email, utf8_decode($asunto), $html, $cabeceras)) {
			echo "Envio email";
		}else{
			echo "Error al enviarse correo";
		}




	}



}
