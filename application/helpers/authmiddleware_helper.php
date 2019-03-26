<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('hasLogin')) {
	function hasLogin(string $status)
	{
		if($status == 'login')
		{
			return redirect('alumni');
		}else{
			return redirect('login');
		}
	}
}