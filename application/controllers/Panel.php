<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('util_model','util');
		$this->load->model('api_model','apiModel');


		//VERIFICATION LOG
		$valor = $this->session->userdata('username');
		if(empty($valor)){
			redirect(base_url('log'),'refresh');
		}
	}

	public function index()
	{
		$this->bienvenido();
	}

	public function bienvenido(){
		$this->_todoTemplate('bienvenido');
	}

	public function menus(){
		$this->_todoTemplate('menus');
	}

	public function sliders(){
		$this->_todoTemplate('slider/listar');
	}

	public function servicios(){
		$this->_todoTemplate('servicios');
	}

	public function aereos(){
		$this->_todoTemplate('aereos');
	}

	public function paquetes(){
		$this->_todoTemplate('paquetes');
	}

	public function footer(){
		$this->_todoTemplate('footer');
	}

	public function publicaciones(){
		$this->_todoTemplate('publicaciones');
	}

	public function cuenta(){
		$this->_todoTemplate('cuenta');
	}



	public function sliderdetail(){
		$id = $this->input->get('id');
		$this->_todoTemplateWithData('slider/editar',$id);
	}

	public function sliderAdd(){
		$this->_todoTemplate('slider/add');
	}


	private function _todoTemplate($page){
		$datos['page'] = $page; 
		$this->util->template('panel/todo',$datos);
	}

	private function _todoTemplateWithData($page,$id){
		$datos['page'] = $page;
		$datos['id'] = $id; 
		$this->util->template('panel/todo',$datos);
	}

}

/* End of file Panel.php */
/* Location: ./application/controllers/Panel.php */