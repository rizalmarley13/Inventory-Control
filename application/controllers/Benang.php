<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->model_secure->getsecure();
		$isi['content'] = 'benang/form_inputbenang';
		$isi['judul'] = 'Master Data';
		$isi['subjudul'] = 'Data Benang';
		$this->load->view('home/view_home.php',$isi);
	}
	public function tampil_formbenang()
	{
	}
}
