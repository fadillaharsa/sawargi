<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Login_model');
	}

	public function index(){
		$this->login();
	}

	public function login(){
		$data=[];
		$data['title'] = "Login";
		$data['login_action'] = base_url('login/process');
			if($this->session->userdata('user_has_login') == true ){
			redirect('umum');
			} else {
			$this->load->view('login', $data);
			}
		$this->session->unset_userdata('login_message');
	}

	public function process(){
		$process = $this->Login_model->login();
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