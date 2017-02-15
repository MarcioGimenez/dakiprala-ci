<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	
	function __construct(){
		parent::__construct();
		$this->load->library('encrypt');
	}

	  # VALIDA USUÁRIO     
	function valida_usuario() {         
		$this->db->where('email', $this->input->post('email'));          
		$this->db->where('senha', $this->input->post('senha'));     
  		$this->db->where('status', 1); 

		$query = $this->db->get('usuarios_admin');  
		  
		if ($query->num_rows() >= 1) { 
			set_msg('Login efetuado com sucesso!','success');                
			return true; 
			   
		}else{
			set_msg('Erro ao fazer o login','danger');       
		}    
	}

	function logado() {         
		$logado = $this->session->userdata('logado');         
		if (!isset($logado) || $logado != true) {
		set_msg('Você precisa fazer o login para ter acesso ao sistema','danger');
			return false;    
			//return true;   
		}else{
			return true;
		}     
	} 
	public function get_usuarios($id=null){
		if($id){
			$this->db->where('id',$id);
		}
		$query =$this->db->get('usuarios_admin');
		if($query->num_rows()!= 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function cadastra_usuario($data){
		if($this->db->insert('usuarios_admin',$data)){
			return true;
		}else{
			return false;
		}

	}
	public function alterar_usuario($data,$id){
		$this->db->where('id',$id);
		if($this->db->update('usuarios_admin',$data)){
			return true;
		}else{
			return false;

		}

	}
	public function remove_usuario($id){
		$this->db->where('id',$id);
		if($this->db->delete('usuarios_admin')){
			return true;
		}else{
			return false;
		}
	}
}
