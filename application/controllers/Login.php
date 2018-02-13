<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('model_login');
	}
	
	public function index()
	{
		$this->load->view('login/view_login.php');
	}

	public function cek_data()
	{

		$data = array('username' => $this->input->post('username', TRUE),
						'password' => $this->input->post('password', TRUE)

			);
		$hasil = $this->model_login->cek_user($data);
		if($hasil->num_rows() == 1)
		{
			foreach ($hasil->result() as $sess) {
				$sess_data['status'] = 'Sudah Login';
				$sess_data['username'] = $sess->username;
				$sess_data['password'] = $sess->password;
				$this->session->set_userdata($sess_data);
			}
			redirect('home');
		}else{
		echo "<script>alert('Gagal Login.. Cek Kode Pengguna, Kata Sandi !');
			history.go(-1);
			</script>";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}

