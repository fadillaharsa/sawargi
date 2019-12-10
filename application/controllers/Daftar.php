<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller{
	
	public function __construct() { 
		parent::__construct(); 
		$this->load->helper(array('form', 'url')); 
		$this->load->library('form_validation');
	}
	
	public function index(){
		$this->daftar();
	}

	public function daftar() {
		$dataku=[];
		$dataku['aksi_daftar_rw'] = base_url('daftar/rw');
		$dataku['aksi_daftar_warga'] = base_url('daftar/warga');
		if($this->session->userdata('pengguna_sudah_masuk') == true ){
			redirect('masuk');
		} else {
			$this->load->view('daftar', $dataku);
		}
	}
	 
	public function rw(){
		if($this->session->userdata('pengguna_sudah_masuk') == true ){
			redirect('admin');
		}
		$this->form_validation->set_rules('input_nomor_rw', 'Nomor RW', 'required');	
		$this->form_validation->set_rules('input_kode_pos', 'Kode Pos', 'required');
		$this->form_validation->set_rules('input_username_rw', 'Username RW', 'required|callback_cek_usernamerw');
		$this->form_validation->set_rules('input_password_rw', 'Password RW', 'required|min_length[6]|max_length[64]');
		$this->form_validation->set_rules('input_pj_rw', 'Penanggung Jawab RW', 'required');
		$this->form_validation->set_rules('input_hp_pj', 'Nomor HP Penanggung Jawab RW', 'required');
		$this->form_validation->set_rules('input_email_pj', 'Email Penanggung Jawab', 'required|valid_email');

		$dataku=[];
		$dataku['aksi_daftar_rw'] = base_url('daftar/rw');
		$dataku['aksi_daftar_warga'] = base_url('daftar/warga');
		   
		if ($this->form_validation->run() == FALSE) { 
		   $this->load->view('daftar',$dataku);
		} 
		else { 
		   $this->load->model('Daftar_model');
		   $this->Daftar_model->daftarkanRW();
		   redirect('masuk');
		}
	}
	
	 
	public function warga() {
		if($this->session->userdata('pengguna_sudah_masuk') == true ){
			redirect('beranda');
		}

		$this->form_validation->set_rules('input_nama_lengkap', 'Nama Lengkap', 'required');	
		$this->form_validation->set_rules('input_username', 'Username', 'required|callback_cek_usernamewarga');	
		$this->form_validation->set_rules('input_password', 'Password', 'required|min_length[6]|max_length[64]');
		$this->form_validation->set_rules('input_email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('input_hp', 'Nomor HP', 'required');
		$this->form_validation->set_rules('input_token', 'Token', 'required|callback_cek_token');
		$this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('input_kode_pos', 'Kode Pos', 'required');

		$dataku=[];
		$dataku['aksi_daftar_rw'] = base_url('daftar/rw');
		$dataku['aksi_daftar_warga'] = base_url('daftar/warga');

		if ($this->form_validation->run() == FALSE) { 
			$this->load->view('daftar',$dataku); 
		} 
		else { 
			$this->load->model('Daftar_model');
			$this->Daftar_model->daftarkanWarga();
			redirect('beranda');
		}
	}
	
	public function cek_usernamewarga($input_username){
		$query = $this->db->where('username_warga', $input_username)->get("data_warga");
		  if ($query->num_rows() > 0)
		  {
			  $this->form_validation->set_message('cek_usernamewarga','The '.$input_username.' belongs to an existing account');
			  return FALSE;
			  }
		   else 
			   return TRUE;
	}

	public function cek_token($input_token){
		$query = $this->db->where('token_rw', $input_token)->get("akun_rw");
		  if ($query->num_rows() == 0)
		  {
			  $this->form_validation->set_message('cek_token','Token '.$input_token.' tidak ditemukan');
			  return FALSE;
			  }
		   else 
			   return TRUE;
	 } 

	public function cek_usernamerw($input_username_rw){
		$query = $this->db->where('username_rw', $input_username_rw)->get("akun_rw");
		  if ($query->num_rows() > 0)
		  {
			  $this->form_validation->set_message('cek_usernamerw','The '.$input_username_rw.' belongs to an existing account');
			  return FALSE;
			  }
		   else 
			   return TRUE;
	 }	

}