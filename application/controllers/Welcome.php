<?php
/*
	
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('api_model','apiModel');
		
		
	}
	
	public function index()
	{
		var_dump($this->apiModel->get_post(1));
	}
}

?>
