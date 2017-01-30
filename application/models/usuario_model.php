<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function get($id = null){
		if($id == null){
			return $this->db->get('usuario')->result();
		}else{
			if($this->exist($id)){
				return $this->db->get_where('usuario', array('id',$id))->result()[0];
			}else{
				return null;
			}
		}
	}

	public function exist($id){
		$query = $this->db->get_where('usuario', array('usuario',$id));
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function exist_username($username){
		$sql = "select * from usuario where username = '" . $username . "'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	private function getId($username){
		$sql = "select id from usuario where username = '" . $username . "'";
		return $this->db->query($sql)->result()[0]->id;
	}

	public function access($data){
		$id = $this->getid($data['username']);
		if($this->exist($id)){
			$datos = $this->get($id);
			if($datos->username == $data['username']){
				if($datos->password == md5($data['password'])){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	

}

/* End of file usuario_model.php */
/* Location: ./application/models/usuario_model.php */