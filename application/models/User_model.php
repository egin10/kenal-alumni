<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function addUser(string $table,array $data)
	{
		$dataUser = [
			'username' 	=> $data['username'],
			'email' 	=> $data['email'],
			'password' 	=> password_hash($data['password'], PASSWORD_DEFAULT),
			'role_id' 	=> 2
		];
		$check = $this->db->get_where($table,array('username' => $dataUser['username']),1)->result_array();
		if(count($check) == 0) {
			$this->db->insert($table,$dataUser);
			redirect('login');
		}else{
			redirect('register');
		}
	}

	public function getUserById(int $id)
	{
		$result = $this->db->get_where('user',array('id' => $id),1)->result_array();
		return $result;
	}

	public function getUserByUsername(string $username)
	{
		$result = $this->db->get_where('user',array('username' => $username),1)->result_array();
		return $result;
	}
}