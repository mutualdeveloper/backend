<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends CI_Model {

	public function save($data){
		$this->db->insert('carousel',$data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}

	public function update($data,$id){
		$this->db->where('id',$id);
		$this->db->update('carousel', $data);
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('carousel');
	}	

}

/* End of file slider_model.php */
/* Location: ./application/models/slider_model.php */