<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		$this->load->view('login');
	}
}