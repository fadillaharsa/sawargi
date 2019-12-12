<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapel_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function listMapel(){
		$query="SELECT DISTINCT course_id FROM wpik_stm_lms_user_courses WHERE course_id!='0'";
		$hslquery=$this->db->query($query);
		return $hslquery;
	}

	function jumlahMapel(){
		$query="SELECT DISTINCT course_id FROM wpik_stm_lms_user_courses WHERE course_id!='0'";
		$hslquery=$this->db->query($query);
		return $hslquery->num_rows();;
	}

	function siswaTerbanyak(){
		$query="SELECT course_id, total FROM (SELECT COUNT(course_id) AS total, course_id FROM wpik_stm_lms_user_courses GROUP BY course_id ORDER BY total DESC LIMIT 1) AS A";
		$hslquery=$this->db->query($query);
		return $hslquery;;
	}

	function namaMapel($course_id){
		$query="SELECT post_title as hasil FROM wpik_posts WHERE ID='".$course_id."'";
		$hslquery=$this->db->query($query);
		return $hslquery->row()->hasil;
	}

	function jumlahUser($course_id){
		$query="SELECT user_course_id FROM wpik_stm_lms_user_courses WHERE course_id='".$course_id."'";
		$hslquery=$this->db->query($query);
		return $hslquery->num_rows();;
	}

	function belumMulai($course_id){
		$query="SELECT progress_percent FROM wpik_stm_lms_user_courses WHERE course_id='".$course_id."' AND progress_percent='0'";
		$hslquery=$this->db->query($query);
		return $hslquery->num_rows();;
	}

	function mulaiSatu($course_id){
		$query="SELECT progress_percent FROM wpik_stm_lms_user_courses WHERE course_id='".$course_id."' AND progress_percent>='20' AND progress_percent<'50'";
		$hslquery=$this->db->query($query);
		return $hslquery->num_rows();;
	}

	function mulaiDua($course_id){
		$query="SELECT progress_percent FROM wpik_stm_lms_user_courses WHERE course_id='".$course_id."'  AND progress_percent>='50' AND progress_percent<'80'";
		$hslquery=$this->db->query($query);
		return $hslquery->num_rows();;
	}

	function mulaiTiga($course_id){
		$query="SELECT progress_percent FROM wpik_stm_lms_user_courses WHERE course_id='".$course_id."' AND progress_percent>='80'";
		$hslquery=$this->db->query($query);
		return $hslquery->num_rows();;
	}

}	
?>