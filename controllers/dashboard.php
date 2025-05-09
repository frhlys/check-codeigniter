<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/auth/login');
        }

        $this->load->model('admin/User_model');
    }

    public function index() {
        $user_id = $this->session->userdata('user_id');
        $data['user'] = $this->User_model->get_user_by_id($user_id);

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit($id) {
        $data['user'] = $this->User_model->get_user_by_id($id);

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/edit_user', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update() {
        $id = $this->input->post('id');

        $update_data = [
            'first_name' => $this->input->post('first_name'),
            'last_name'  => $this->input->post('last_name'),
            'email'      => $this->input->post('email'),
            'phone'      => $this->input->post('phone')
        ];

        $this->User_model->update_user($id, $update_data);
        redirect('admin/dashboard');
    }
}
