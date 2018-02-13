<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_secure extends CI_model {
	
	public function getsecure()
	{
		$username = $this->session->userdata('username');
		if (empty($username))
		{
			$this->session->sess_destroy();
			redirect('Login');
		}
	}
}
