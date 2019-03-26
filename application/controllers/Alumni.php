<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->view('alumni/index');
	}

	public function profile()
	{
		$id = $this->session->userdata('id');
		foreach ($this->user_model->getUserById($id) as $user) {
			$data['username'] = $user['username'];
			$data['email'] = $user['email'];
		}
		$this->load->view('alumni/profile', $data);
	}

	// public function update(int $id)
	// {
	// 	$result = $this->user_model->checkData($id);
	// 	echo count($result) == 0 ? "Kosong" : "Terisi";
	// }
}