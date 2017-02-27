<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locais extends CI_Controller {

	public function get_locais($tipo)
	{
		$this->load->model('local_model');
		$this->load->view('header');
		$locais['locais'] = $this->local_model->get_locais(null,$tipo);
		$this->load->view('locais',$locais);
		$this->load->view('footer');
	}
	public function get_locais_populares()
	{
		$this->load->model('local_model');
		$this->load->view('header');
		$locais['locais'] = $this->local_model->get_locais(null,null,'pontuacao');
		$this->load->view('locais',$locais);
		$this->load->view('footer');
	}
}
