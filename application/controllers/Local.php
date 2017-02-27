<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Local extends CI_Controller {

	public function get_local($nome)
	{
		$this->load->model('local_model');
		$this->load->view('header');
		$local['local'] = $this->local_model->get_locais($nome,null,null);
		$this->load->view('local_completo',$local);
		$this->load->view('footer');
	}
}
