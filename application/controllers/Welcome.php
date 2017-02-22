<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('local_model');
		$this->load->view('header');
		$estados['estados'] = $this->local_model->get_locais(null,'estado');
		$this->load->view('index',$estados);
		$this->load->view('footer');
	}
}
