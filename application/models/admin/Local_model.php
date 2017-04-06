<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Local_model extends CI_Model {



	
	public function get_locais($id=null){
		if($id){
			$this->db->where('id',$id);
		}
		$query =$this->db->get('locais');
		if($query->num_rows()!= 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function cadastra_local($data){
		if($this->db->insert('locais',$data)){
			return $this->db->insert_id();
		}else{
			return false;
		}

	}
	public function alterar_local($data,$id){
		$this->db->where('id',$id);
		if($this->db->update('locais',$data)){
			return true;
		}else{
			return false;

		}

	}
	public function remove_local($id){
		$this->db->where('id',$id);
		if($this->db->delete('locais')){
			return true;
		}else{
			return false;
		}
	}
}
