<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('dashio/index');
	}

	public function profile()
	{
		$this->load->view('dashio/profile');
	}
}