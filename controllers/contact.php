<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Contactmodel');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('contact_view'); // Make sure your view file name is correct
    }

    public function send() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('contact_view'); // Return to form if validation fails
        } else {
            $data = [
                'full_name'      => $this->input->post('name', TRUE),
                'email_address'  => $this->input->post('email', TRUE),
                'message'        => $this->input->post('message', TRUE),
            ];

            $inserted = $this->Contactmodel->insert_contact($data);

            if ($inserted) {
                $this->session->set_flashdata('success', 'Message sent successfully!');
            } else {
                $this->session->set_flashdata('error', 'Something went wrong. Please try again.');
            }

            redirect('contact');
        }
    }
}
