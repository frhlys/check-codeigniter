<?php
Class read_data extends CI_Model{
public function readdata(){
	$query=$this->db->select('id,first_name, last_name, role, job, about_desc, age, residence, email, phone, social_media, availability, profile_pic')
		              ->get('project1');
		        return $query->result();
}
}

