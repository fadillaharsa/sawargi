<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Umum extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Umum_model");
	}

	public function index(){
		$data=[];
		$data['logout_url'] = base_url('login/logout');
		if($this->session->userdata('user_has_login') == true ){			
			$data['jumlahSiswa']=$this->Umum_model->hitungSiswa();
			$data['jumlahPelajaran']=$this->Umum_model->hitungPelajaran();
			$data['jumlahModul']=$this->Umum_model->hitungModul();
			$data['jumlahUjian']=$this->Umum_model->hitungUjian();
			$data['jumlahKomentar']=$this->Umum_model->hitungKomentar();
			$data['jumlahReview']=$this->Umum_model->hitungReview();
			$data['jumlahRating']=$this->Umum_model->hitungRating();
			$this->load->view('umum', $data);
		} else {
			redirect('login');
		}
	}

}