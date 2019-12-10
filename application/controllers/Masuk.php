<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masuk extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Masuk_model');
	}

	public function index(){
		$this->login();
	}

	public function login(){
		$data=[];
		$data['title'] = "Masuk Sawargi";
		$data['aksi_masuk'] = base_url('masuk/proses');
			if($this->session->userdata('pengguna_sudah_masuk') == true ){
				redirect('beranda');
			} else {
				$this->load->view('login', $data);
			}
		$this->session->unset_userdata('pesan_masuk');
	}

	public function proses(){
		$process = $this->Masuk_model->masuk();
		if($process ==true){
			$this->session->set_userdata('user_username',$_POST[inputUsername]);
			redirect('umum');
			} else {
			redirect('login');
			}
	}
	
	public function logout(){
		$this->session->unset_userdata('user_has_login');
		$this->session->sess_destroy();
		redirect('login');
	}

}