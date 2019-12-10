<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masuk extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Masuk_model');
	}

	public function index(){
		$this->masuk();
	}

	public function masuk(){
		$data=[];
		$data['title'] = "Masuk Sawargi";
		$data['aksi_masuk'] = base_url('masuk/proses');
			if($this->session->userdata('pengguna_sudah_masuk') == true ){
				redirect('beranda');
			} else {
				$this->load->view('masuk', $data);
			}
		$this->session->unset_userdata('pesan_masuk');
	}

	public function proses(){
		$process = $this->Masuk_model->masuk();
		if($process ==true){
			$this->session->set_userdata('username_pengguna',$_POST[inputUsername]);
			$this->session->set_userdata('pengguna_sudah_masuk',true);
			$this->session->set_userdata('jenis_pengguna','warga');
			redirect('beranda');
			} else {
			redirect('masuk');
			}
	}
	
	public function logout(){
		$this->session->unset_userdata('pengguna_sudah_masuk');
		$this->session->sess_destroy();
		redirect('masuk');
	}

}