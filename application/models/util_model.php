<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Util_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function template($nombre,$data = null){
		$this->load->view('template/header');
		if ($data == null){
			$this->load->view($nombre);
		}else{
			$this->load->view($nombre, $data);
		}
		$this->load->view('template/footer');
	}

}

/* End of file util_model.php */
/* Location: ./application/models/util_model.php */