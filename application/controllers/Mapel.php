<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Mapel_model");
	}

	public function index(){
		$this->halaman();
	}
	
	public function halaman(){
		$data=[];
		$data['logout_url'] = base_url('login/logout');
		if($this->session->userdata('user_has_login') == true ){
			$data['jumlahMapel'] = $this->Mapel_model->jumlahMapel();
			$data['listMapel']=$this->Mapel_model->listMapel();

			$siswaTerbanyak=$this->Mapel_model->siswaTerbanyak()->row()->course_id;
			$jumlahTerbanyak=$this->Mapel_model->siswaTerbanyak()->row()->total;
			$namaSiswaTerbanyak=$this->Mapel_model->namaMapel($siswaTerbanyak);
				$c=1;
				$x=1;
				foreach($data['listMapel']->result() as $row){
					$course_id=$row->course_id;
					$namaMapel[$x]=$this->Mapel_model->namaMapel($course_id);
					$jumlahUser[$x]=$this->Mapel_model->jumlahUser($course_id);
					$belumMulai[$x]=$this->Mapel_model->belumMulai($course_id);
					$mulaiSatu[$x]=$this->Mapel_model->mulaiSatu($course_id);
					$mulaiDua[$x]=$this->Mapel_model->mulaiDua($course_id);
					$mulaiTiga[$x]=$this->Mapel_model->mulaiTiga($course_id);
					$x++;
				}
			$data['namaSiswaTerbanyak']=$namaSiswaTerbanyak;
			$data['jumlahTerbanyak']=$jumlahTerbanyak;
			$data['namaMapel']=$namaMapel;
			$data['jumlahUser']=$jumlahUser;
			$data['belumMulai']=$belumMulai;
			$data['mulaiSatu']=$mulaiSatu;
			$data['mulaiDua']=$mulaiDua;
			$data['mulaiTiga']=$mulaiTiga;
			$this->load->view('mapel',$data);
			
		} else {
			redirect('login');
		}
	}



}

