<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the model
        $this->load->model('Dashboard_model');
        // Load form helper and URL helper if not already loaded
        $this->load->helper(['form', 'url']);
    }

    // Display the user dashboard
    public function index() {
        $data['users'] = $this->Dashboard_model->get_all_users();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/dashboard_view', $data);
        $this->load->view('admin/templates/footer');
    }

    // Edit a user's profile
    public function edit($id) {
        $data['user'] = $this->Dashboard_model->get_user_by_id($id);

        if (!$data['user']) {
            show_404();
        }

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/edit_profile', $data);
		  $this->load->view('admin/edit_user', $data);
        $this->load->view('admin/templates/footer');
    }

    // Update a user's profile
    public function update() {
        $id = $this->input->post('id');
        $data = [
            'first_name' => $this->input->post('first_name'),
            'last_name'  => $this->input->post('last_name'),
            'email'      => $this->input->post('email'),
            'phone'      => $this->input->post('phone'),
        ];

        $this->Dashboard_model->update_user($id, $data);

        // Redirect back to dashboard
        redirect('admin/dashboard');
    }
}



public function edit($id) {
    $data['user'] = $this->Dashboard_model->get_user_by_id($id);

    if (!$data['user']) {
        show_404(); // user not found
    }

    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/edit_profile', $data); // make sure this view uses $user
    $this->load->view('admin/templates/footer');
}
