<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('about_model');
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

        // Fetch data for that user using the correct user_id variable
        $data['about_me'] = $this->about_model->get_about_me_by_user_id($user_id);

        // Load the main view with the fetched data
        $this->load->view('main', $data);
    }
}
