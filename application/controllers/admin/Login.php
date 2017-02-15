<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('admin/usuario_model');
	}

	public function index()	{	
		$this->load->library('form_validation');         
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');         
		$this->form_validation->set_rules('senha', 'Senha', 'required');         
		
		// verifica a validação
		if($this->form_validation->run() == FALSE){
			if(validation_errors()){
				set_msg(validation_errors(),'warning');
			}
		}else{

			if($this->usuario_model->valida_usuario()){
				$data = array('email' => $this->input->post('email'),'logado' => true);
				$this->session->set_userdata($data);
				redirect('admin/dashboard');
			} else {
				redirect('admin/login', 'refresh');           
			}
		}
		$this->load->view('admin/includes/header');
		$this->load->view('admin/login');
		$this->load->view('admin/includes/footer');
	}
	public function logout(){
		$this->session->unset_userdata('logado');
		$this->session->unset_userdata('email');
		set_msg('Você saiu do sistema','success');
		redirect('admin/login', 'refresh');
	}

}
