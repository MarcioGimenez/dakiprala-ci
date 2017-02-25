<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Local_model extends CI_Model {



	
	public function get_locais($id=null,$tipo=null){
		if($id){
			$this->db->where('id',$id);
		}
		if($tipo){
			$this->db->where('tipo',$tipo);
		}
		$this->db->where('status',1);
		$query =$this->db->get('locais');
		if($query->num_rows()!= 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

}
