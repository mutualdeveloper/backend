<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//COMPONENT MODEL
		$this->load->model('slider_model','sliderModel');
	}
	
	public function save(){
		$id = $this->input->post('id');
		$data = $this->input->post();
		if(empty($id)){
			$inserted_id = $this->sliderModel->save($data);
			redirect(base_url('panel/sliderdetail/?id=' . $inserted_id),'refresh');
		}
		else{
			unset($data['id']);
			$this->sliderModel->update($data,$id);
		}
	}

	public function delete(){
		$id = $this->input->post('id');
		$this->sliderModel->delete($id);
	}


}
