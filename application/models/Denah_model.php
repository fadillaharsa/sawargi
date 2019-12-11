<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Denah_model extends CI_Model
{
    public function proses(){
    $username_rw = $this->session->userdata('username_pengguna');
    $sqlstr="select id_rw from akun_rw where username_rw='".$username_rw."'";
    $hslquery=$this->db->query($sqlstr);
    $data['id_rw'] = $hslquery->row()->id_rw;
    $data['google_maps'] = $this->input->post('input_denah');
  
		$this->db->insert('denah', $data);
    }

    public function hapus(){
      
    }
}