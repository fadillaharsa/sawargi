<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Denah_admin extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$dataku=[];
		$dataku['title'] = "Admin - Denah";
		$dataku['aksi_input'] = base_url('denah_admin/proses');
		$username_rw=$this->session->userdata('username_pengguna');

		$sqlstr="select id_rw from akun_rw where username_rw='".$username_rw."'";
		$hslquery=$this->db->query($sqlstr);
		$id_rw = $hslquery->row()->id_rw;

		$sqlstr="select * from denah where id_rw ='".$id_rw."'";
		$hslquery=$this->db->query($sqlstr);
		$dataku['denah'] = $hslquery->row()->google_maps;

		if ($hslquery->num_rows() > 0){
			$this->session->set_userdata('denah',true);
		}

		$this->load->view('denah_admin',$dataku);
		
	}

	public function proses(){
		if($this->session->userdata('pengguna_sudah_masuk') == false ){
			redirect('masuk');
		}
		$this->form_validation->set_rules('input_denah', 'Denah RW', 'required');	

		$dataku=[];
		$dataku['title'] = "Admin - Denah";
		$dataku['aksi_input'] = base_url('denah_admin/proses');
		   
		if ($this->form_validation->run() == FALSE) { 
		   $this->load->view('denah_admin',$dataku);
		} 
		else { 
		   $this->load->model('Denah_model');
		   $this->Denah_model->proses();
		   redirect('denah_admin');  
		}
	}

}