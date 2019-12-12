<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Umum_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function hitungSiswa(){
		return $this->db->count_all("wpik_users");
	}

	function hitungPelajaran(){
		$query="SELECT DISTINCT course_id FROM wpik_stm_lms_user_courses";
		$hslquery=$this->db->query($query);
		return $hslquery->num_rows();
	}

	function hitungModul(){
		$query="SELECT DISTINCT lesson_id FROM wpik_stm_lms_user_lessons";
		$hslquery=$this->db->query($query);
		return $hslquery->num_rows();
	}

	function hitungUjian(){
		$query="SELECT DISTINCT id FROM wpik_aysquiz_quizes";
		$hslquery=$this->db->query($query);
		return $hslquery->num_rows();
	}

	function hitungKomentar(){
		$query="SELECT comment_ID FROM wpik_comments";
		$hslquery=$this->db->query($query);
		return $hslquery->num_rows();
	}
	
	function hitungReview(){
		$query="SELECT * FROM wpik_posts WHERE post_type='stm-reviews' AND post_status='publish'";
		$hslquery=$this->db->query($query);
		return $hslquery->num_rows();
	}
	function hitungRating(){
		$query="SELECT AVG(meta_value) as meta_value FROM wpik_postmeta WHERE meta_key='review_mark' AND meta_value!=''";
		$hslquery=$this->db->query($query);
		return $hslquery->row()->meta_value;
	}

}	
?>