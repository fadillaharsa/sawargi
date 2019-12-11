<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Daftar_model extends CI_Model{

public function daftarkanRW(){
	$data['kode_pos_rw'] = $this->input->post('input_kode_pos');
	$data['username_rw'] = $this->input->post('input_username_rw');
	$data['password_rw'] = $this->input->post('input_passsword_rw');
	$data['nama_pj'] = $this->input->post('input_pj_rw');
	$data['email_pj'] = $this->input->post('input_email_pj');
	$data['hp_pj'] = $this->input->post('input_hp_pj');
	$this->db->insert('akun_rw', $data);
	$this->session->set_userdata('pengguna_sudah_masuk',true);
	$this->session->set_userdata('username_pengguna',$data['username_rw']);
	$this->session->set_userdata('jenis_pengguna','rw');
}
	
public function daftarkanWarga(){
	$data['nama_warga'] = $this->input->post('input_nama_lengkap');
	$data['username_warga'] = $this->input->post('input_username');
	$data['password_warga'] = $this->input->post('input_password');
	$data['email_warga'] = $this->input->post('input_email');
	$data['hp_warga'] = $this->input->post('input_hp');
	$data['alamat_warga'] = $this->input->post('input_alamat');
	$data['kode_pos_warga'] = $this->input->post('input_kode_pos');
	$token = $this->input->post('input_token');

	$sqlstr="select id_rw from akun_rw where token_rw='".$token."'";
	$hslquery=$this->db->query($sqlstr);

	$data['id_rw'] = $hslquery->row()->id_rw;

	$this->db->insert('data_warga', $data);

	$this->session->set_userdata('pengguna_sudah_masuk',true);
	$this->session->set_userdata('username_pengguna',$data['username_warga']);
	$this->session->set_userdata('jenis_pengguna','warga');
	}

}