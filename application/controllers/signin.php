<?php

Class Signin extends CI_Controller{

function index(){
	$this->load->library('facebook');
		$this->load->helper('url');
	echo "working";
	
	
		if ($this->facebook->is_authenticated())
		{
			// User logged in, get user details
			$user = $this->facebook->request('get', '/me?fields=id,name,email');
			if (!isset($user['error']))
			{
				$data['user'] = $user;
			}

		}
		$this->load->view('signin');
	
}




}

?>