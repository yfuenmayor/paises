
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paises_model extends CI_Model {

	public function __construct() {
	    parent::__construct();
	    $this->paises = 'paises';
	} 

	public function getPaises()
	{
		$query = $this->db
						->order_by('sigla', 'asc')
						->get($this->paises);
		return $query->result();
	}

	public function setPais($data)
	{
		return $this->db->insert('registros', $data);
	}

}
