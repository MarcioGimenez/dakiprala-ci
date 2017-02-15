<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Local extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('local_completo');
		$this->load->view('footer');
	}
}
