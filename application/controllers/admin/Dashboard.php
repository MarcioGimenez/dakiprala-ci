<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('admin/usuario_model');
		if($this->usuario_model->logado()!= true){
			redirect('admin/login', 'refresh');
		}
	}
	
	
	public function index()
	{
		$this->load->view('admin/includes/header');
		$this->load->view('admin/includes/menu');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/includes/footer');
	}
}
