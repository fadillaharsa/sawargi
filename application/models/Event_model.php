<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Daftar_model extends CI_Model
{
    public function saveMahasiswa()
    {
		$data['npm'] = $this->input->post('npm');
		$data['nama_mahasiswa'] = $this->input->post('nama_mahasiswa');
		$data['email_mahasiswa'] = $this->input->post('email_mahasiswa');
		$data['password_mahasiswa'] = $this->input->post('password_mahasiswa');
		$this->db->insert('mahasiswa', $data);
		$this->session->set_userdata('user_has_login',true);
		$this->session->set_userdata('user_username',$data['npm']);
		$this->session->set_userdata('user_jenis','mahasiswa');
    }
	
	public function saveLembaga()
    {
		$data['username_lembaga'] = $this->input->post('username_lembaga');
		$data['kategori_lembaga'] = $this->input->post('kategori_lembaga');
		$data['nama_lembaga'] = $this->input->post('nama_lembaga');
		$data['email_lembaga'] = $this->input->post('email_lembaga');
		$data['password_lembaga'] = $this->input->post('password_lembaga');
		$this->db->insert('lembaga', $data);
		$this->session->set_userdata('user_has_login',true);
		$this->session->set_userdata('user_username',$data['username_lembaga']);
		$this->session->set_userdata('user_jenis','lembaga');
    }
}