<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        // Load the models
        $this->load->model('Profilemodel');
        $this->load->model('about_model');
        $this->load->model('resume_model');
		  
        
        // Load necessary libraries
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {
        // Check if user is logged in
        if (!$this->session->userdata('logged_in')) {
            redirect('login');  // Redirect to login if not logged in
        }

        // Get user ID from session
        $user_id = $this->session->userdata('id');

        // Fetch data from models based on the logged-in user's ID
        $data['profile'] = $this->Profilemodel->get_profile_by_id($user_id);
        $data['about_me'] = $this->about_model->get_about_me_by_id($user_id);
        $data['resume'] = $this->resume_model->get_resume_by_id($user_id);

        // Load the view and pass the data to it
        $this->load->view('main', $data);
    }
}
