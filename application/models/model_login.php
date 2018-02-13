<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {

	public function get_login($username,$password)
	{
		$this->db->from('tb_user');
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$query = $this->db->get();

		return $query->num_rows();
	}

	public function cek_user($data){
		$query = $this->db->get_where('tb_user',$data);
		return $query;

		// $query = $this->db->join('tabel_jabatan','tabel_jabatan.id_jabatan=tabel_user.id_jabatan')->get_where('tabel_user',$data);
		// return $query;
	}
}


