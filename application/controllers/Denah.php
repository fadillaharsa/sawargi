<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Denah extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('denah');
	}

}