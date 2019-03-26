<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('role_model');
		$this->load->helper('authmiddleware_helper');
	}

	public function login()
	{
		if($this->session->userdata('status') != '') hasLogin($this->session->userdata('status'));
		$this->load->view('auth/login');
	}

	public function prosesLogin()
	{
		$data = [
			'username' => trim($this->input->post('username')),
			'password' => trim($this->input->post('password'))
		];
		$checkUsername = $this->user_model->getUserByUsername($data['username']);
		if(count($checkUsername) <> 0)
		{
			if(password_verify($data['password'],$checkUsername[0]['password']))
			{
				$data_session = [
					'id'		=> $checkUsername[0]['id'],
					'username'	=> $checkUsername[0]['username'],
					'role_id'	=> $checkUsername[0]['role_id'],
					'status'	=> 'login',
				];
				$this->session->set_userdata($data_session);
				redirect('alumni');
			}else{
				echo "<script>alert('Password salah!');</script>";
				redirect('login');
			}
		}else{
			echo "<script>alert('Username salah!');</script>";
			redirect('login');
		}
	}

	public function register()
	{
		$this->load->view('auth/register');
	}

	public function registerUser()
	{
		$data = [
			'firstname' 		=> ucfirst(trim($this->input->post('firstname'))),
			'lastname' 			=> ucfirst(trim($this->input->post('lastname'))),
			'username' 			=> trim($this->input->post('username')),
			'password' 			=> trim($this->input->post('password')),
			'confirm_password' 	=> trim($this->input->post('confirm_password')),
			'email' 			=> trim($this->input->post('email')),
			'agree' 			=> trim($this->input->post('agree'))
		];
		$this->user_model->addUser('user', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}