<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paises extends MX_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('Paises_model');
}

	public function index(){
		$data['paises'] = $this->Paises_model->getPaises();
		$this->load->view('paises_view', $data);
	}

	public function getPais(){

		$response['nombre'] = $this->input->post('Nombre');
		
		$data['pais_id'] = $this->input->post('Id');
		$data['acceso'] = date('Y-m-d H:i:s',time());

		$carga = $this->Paises_model->setPais($data);

		echo $r = ($carga) ? json_encode($response) : null ;

	}

}
