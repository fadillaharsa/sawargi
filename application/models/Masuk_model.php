<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masuk_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function masuk(){
		$this->form_validation->set_rules('inputUsername', 'username', 'required'); //form view sebagai apa
		$this->form_validation->set_rules('inputPassword', 'password', 'required'); //form view sebagai apa

		if ($this->form_validation->run() == true) {
			$required=array(
			'username_warga' => $this->input->post('inputUsername',true) //nama kolom
			,'password_warga' => $this->input->post('inputPassword',true) //nama kolom
			);

			$auth=$this->db->where($required)->get('data_warga');//nama tabel
			$data=$auth->row_array();

			if($auth->num_rows()==1){
				$this->session->set_userdata('pengguna_sudah_masuk',true);
				$success=true;
			}else {
				$param=array(
				'username' => $this->input->post('inputUsername',true)
				);
				$auth=$this->db->where($param)->get('data_warga');
				$data=$auth->row_array();

				if($required['username_warga'] == $data['username']){
					$this->session->set_userdata('login_message','Maaf, Password Salah!');
					$this->session->set_userdata('login_valid',$required['username_warga']);
				} else{
					$this->session->set_userdata('login_message','Maaf, Username atau Password Salah!');
				}
				
				$success = false;
			}
		} else {
			$this->session->set_userdata('pesan_login','Maaf, NPM atau Password Salah!');
			$success = false;
		}
		return $success;
	}
}