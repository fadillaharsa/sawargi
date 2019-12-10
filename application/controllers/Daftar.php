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
	   $dataku['daftar_action'] = base_url('index.php/daftar/process');
	   $dataku['daftar_actionLK'] = base_url('index.php/daftar/processLK');
	   $dataku['action_pencarian'] = base_url('index.php/pencarian/kustom');
	   $dataku['logout_url'] = base_url('index.php/masuk/logout');
	   if($this->session->userdata('user_has_login') == true ){
		   redirect('home');
		   } else {
		   $this->load->view('daftar', $dataku);
	   }
	 }
	 
	   public function process(){
		   if($this->session->userdata('user_has_login') == true ){
		   redirect('profil_mahasiswa');
		   }
		/* Load form validation library */ 
	
		   
		/* Validation rule */
		$this->form_validation->set_rules('npm', 'NPM', 'required');	
		$this->form_validation->set_rules('nama_mahasiswa', 'Nama', 'required');
		$this->form_validation->set_rules('email_mahasiswa', 'Email', 'required|valid_email|callback_check_mahasiswa');
		$this->form_validation->set_rules('password_mahasiswa', 'Password', 'required|min_length[6]|max_length[15]');
		
		
		$dataku=[];
	   $dataku['daftar_action'] = base_url('index.php/daftar/process');
	   $dataku['daftar_actionLK'] = base_url('index.php/daftar/processLK');
	   $dataku['action_pencarian'] = base_url('index.php/pencarian/kustom');
	   $dataku['logout_url'] = base_url('index.php/masuk/logout');
		   
		if ($this->form_validation->run() == FALSE) { 
		   $this->load->view('daftar',$dataku); 
		} 
		else { 
		   $this->load->model('Daftar_model');
		   $this->Daftar_model->saveMahasiswa();
		   redirect('home');
		}
		   
	   }
	 
	 
	 public function processLK() {
	   if($this->session->userdata('user_has_login') == true ){
		   redirect('lk_profil');
	   }
		/* Load form validation library */ 
		$this->load->library('form_validation');
		   
		/* Validation rule */
		$this->form_validation->set_rules('kategori_lembaga', 'Kategori', 'required');	
		$this->form_validation->set_rules('username_lembaga', 'Username', 'required');	
		$this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required');
		$this->form_validation->set_rules('email_lembaga', 'Email', 'required|valid_email|callback_check_lembaga');
		$this->form_validation->set_rules('password_lembaga', 'Password', 'required|min_length[6]|max_length[15]');
		
	   
	   
	   $dataku=[];
	   $dataku['daftar_action'] = base_url('index.php/daftar/process');
	   $dataku['daftar_actionLK'] = base_url('index.php/daftar/processLK');
	   $dataku['action_pencarian'] = base_url('index.php/pencarian/kustom');
	   $dataku['logout_url'] = base_url('index.php/masuk/logout');
		   
		if ($this->form_validation->run() == FALSE) { 
		   $this->load->view('daftar',$dataku); 
		} 
		else { 
		   $this->load->model('Daftar_model');
		   $this->Daftar_model->saveLembaga();
		   redirect('home');
		}
	 }
	 
	 
	 public function check_mahasiswa($email_mahasiswa)
	  {
			$query = $this->db->where('email_mahasiswa', $email_mahasiswa)->get("mahasiswa");
		if ($query->num_rows() > 0)
		   {
			$this->form_validation->set_message('check_mahasiswa','The '.$email_mahasiswa.' belongs to an existing account');
			   return FALSE;
		   }
		 else 
			 return TRUE;
	 }	
	 
	  public function check_lembaga($email_lembaga)
	  {
		  $query = $this->db->where('email_lembaga', $email_lembaga)->get("lembaga");
		  if ($query->num_rows() > 0)
		  {
			  $this->form_validation->set_message('check_lembaga','The '.$email_lembaga.' belongs to an existing account');
			  return FALSE;
			  }
		   else 
			   return TRUE;
	 }	

}