<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function showRole()
	{
		$result = $this->db->get('role')->result_array();
		return $result;
	}
}