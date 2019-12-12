<?php
class Home_model extends CI_Model{
	function __construct(){
		parent::__construct();

		$this->load->database();
	}
	
	function caridata($jdata=2){
		$sqlstr="select * from lowongan ORDER BY id_lowongan DESC LIMIT ".$jdata;
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
}
?>