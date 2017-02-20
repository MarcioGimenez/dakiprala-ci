<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Local extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('admin/usuario_model');
		$this->load->model('admin/local_model');
		if($this->usuario_model->logado()!= true){
			redirect('admin/login', 'refresh');
		}
	}
	


	public function index()	{	
	// pega todos os locais do bd e passa para a view
			
		$data['locais']=$this->local_model->get_locais();
		
		$this->load->view('admin/includes/header');
		$this->load->view('admin/includes/menu');
		$this->load->view('admin/lista_locais',$data);
		$this->load->view('admin/includes/footer');

		
	}

	public function cadastro(){
		if($_POST){
			//print_r($_FILES);
			//var_dump($_POST);

			//exit;

			$data['titulo'] = $this->input->post('titulo');
			$data['tipo'] = $this->input->post('tipo');			
			$data['status'] = $this->input->post('status');
			$data['latitude'] = $this->input->post('latitude');
			$data['longitude'] = $this->input->post('longitude');			
			$data['titulo_foto'] = $this->input->post('titulo_foto');
			$data['descricao'] = $this->input->post('descricao');
			$data['titulo_google'] = $this->input->post('titulo_google');
			$data['titulo_facebook'] = $this->input->post('titulo_facebook');
			$data['descricao_google'] = $this->input->post('descricao_google');
			$data['descricao_facebook'] = $this->input->post('descricao_facebook');


			//realiza validação dos dados recebidos
			$this->load->library('form_validation');
			$this->form_validation->set_rules('titulo','Titulo','trim|required|min_length[10]');
			$this->form_validation->set_rules('latitude','Latitude','trim|required|min_length[5]');
			$this->form_validation->set_rules('longitude','Longitude','trim|required|min_length[5]');
			$this->form_validation->set_rules('titulo_foto','Titulo da foto','trim|required|min_length[10]');
			$this->form_validation->set_rules('titulo_foto','Titulo da foto','trim|required|min_length[10]');
			$this->form_validation->set_rules('descricao','Descrição','trim|required|min_length[100]');
			$this->form_validation->set_rules('titulo_google','Titulo do Google','trim|required|min_length[20]');
			$this->form_validation->set_rules('titulo_facebook','Titulo do Facebook','trim|required|min_length[20]');
			$this->form_validation->set_rules('descricao_google','Descrição do Google','trim|required|min_length[40]');
			$this->form_validation->set_rules('descricao_facebook','Descrição do Facebook','trim|required|min_length[40]');

			// verifica a validação
			if($this->form_validation->run() == FALSE){
				if(validation_errors()){
					set_msg(validation_errors(),'warning');
				}else{
					set_msg('validação ok','success');
				}	
			}else{
				
				if($this->local_model->cadastra_local($data)){
					set_msg('Local cadastrado com sucesso','success');
					redirect('admin/local', 'refresh');

				}
			}
		}
		$this->load->view('admin/includes/header');
		$this->load->view('admin/includes/menu');
		if(isset($data)){
			$this->load->view('admin/cadastro_local',$data);
		}else{
			$this->load->view('admin/cadastro_local');
		}
		$this->load->view('admin/includes/footer');

	}
	public function alterar($id=null){
		
		if($_POST){
			// recupera dados POST
			
			$data['nome'] = $this->input->post('nome');
			$data['cpf'] = $this->input->post('cpf');
			$data['endereco'] = $this->input->post('endereco');
			$data['nivel'] = $this->input->post('nivel');
			$data['email'] = $this->input->post('email');
			$data['status'] = $this->input->post('status');

			//realiza validação dos dados recebidos
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nome','Nome','trim|required|min_length[5]');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			
			// verifica a validação
			if($this->form_validation->run() == FALSE){
				if(validation_errors()){
					set_msg(validation_errors(),'warning');
				}else{
					set_msg('validação ok','success');
				}	
			}else{

				if($this->local_model->alterar_local($data,$id)){
					
					set_msg('Usuário alterado com sucesso','success');
					redirect('admin/local', 'refresh');

				}
			}
		}

		$data['local'] = $this->local_model->get_locais($id);
		$this->load->view('admin/includes/header');
		$this->load->view('admin/includes/menu');
		if(isset($data)){
			$this->load->view('admin/alterar_local',$data);
		}else{
			$this->load->view('admin/alterar_local');
		}
		$this->load->view('admin/includes/footer');
	}
	public function excluir($id=null){

		if($this->local_model->remove_local($id)){
			set_msg('Usuário excluído com sucesso','success');
		}else{
			set_msg('Erro ao excluir local','danger');
		}
		$data['locais']=$this->local_model->get_locais();
		$this->load->view('admin/includes/header');
		$this->load->view('admin/includes/menu');
		$this->load->view('admin/lista_local',$data);
		$this->load->view('admin/includes/footer');
	}
}