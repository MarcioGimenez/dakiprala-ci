<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Local_model extends CI_Model {



	
	public function get_locais($titulo=null,$tipo=null,$ordem=null){
		if($titulo){
			$this->db->where('titulo_seo',$titulo);
		}
		if($tipo){
			$this->db->where('tipo',$tipo);
		}
		if($ordem){
			$this->db->order_by($ordem, "asc");
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
