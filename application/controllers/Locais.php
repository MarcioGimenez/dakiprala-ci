<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locais extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('locais');
		$this->load->view('footer');
	}
}
