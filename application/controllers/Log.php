<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('util_model', 'util');
		$this->load->model('usuario_model', 'usuarioModel');
		
	}
	public function index()
	{
		$this->in();
	}

	public function in(){
		$valor = $this->session->userdata('username');
		if(empty($valor)){
			$this->util->template('log/in');
		}else{
			redirect('panel','refresh');
		}
		
	}

	public function data(){
		if($this->usuarioModel->exist_username($this->input->post('username'))){
			$username = $this->input->post('username');
			$log = $this->usuarioModel->access($this->input->post());
			if ($log){
				$this->session->set_userdata(array('username' => $username));
				redirect('panel','refresh');
			}else{
				$datos['error'] = true;
				$this->util->template('log/in',$datos);
			}
		}else{
			$datos['error'] = true;
			$this->util->template('log/in',$datos);
		}
		
	}

	public function out(){
		$this->session->sess_destroy();
		redirect('log/in');
	}



}

/* End of file Log.php */
/* Location: ./application/controllers/Log.php */