<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->model_secure->getsecure();
		$isi['content'] = 'home/view_content';
		$isi['judul'] = 'Home';
		$isi['subjudul'] = '';
		$this->load->view('home/view_home.php',$isi);
	}
}
