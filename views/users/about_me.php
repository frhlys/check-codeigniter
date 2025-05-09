<?php 
class Users extends CI_Controller{
	public function user_profile(){
		$this->form_validation->set_rules('first_name', 'First Name', 'trim required max_length[50]|min_length[2]|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim required|max_length[50]|min_length[2]|xss_clean')
		$this->form_validation->set_rules('age', 'Age', 'trim required max_length[50]|min_length[2]|xss_clean'); ; 
		$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[100]|min_length[5]|xss_clean|valid_email'); ) 
		$this->form_validation->set_rules('role', 'Role', 'trim required max_length[50]|min_length[2]|xss_clean'); 
		$this->form_validation->set_rules('job', 'Job', 'trim required max_length[50]|min_length[2]|xss_clean'); 
		$this->form_validation->set_rules('phone', 'Phone', 'trim required max_length[50]|min_length[2]|xss_clean'); 
		$this->form_validation->set_rules('social', 'Social', 'trim required max_length[50]|min_length[2]|xss_clean');
		
		if($this->form_validation->run() == FALSE) { 
		$data['main_content'] = 'users/user_profile'; 
		$this->load->view('layouts/main', $data); 
		} 
		else { 
		
		} 
} 			
}

