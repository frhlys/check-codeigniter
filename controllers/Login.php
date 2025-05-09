<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('login');
    }

    public function auth() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $query = $this->db->get_where('users', array(
            'Email' => $email,
            'Password' => $password
        ));

        if ($query->num_rows() == 1) {
            $row = $query->row_array();
            $this->session->set_userdata([
                'id' => $row['Id'],
                'username' => $row['Username'],
                'age' => $row['Age'],
                'email' => $row['Email'],
                'logged_in' => TRUE
            ]);
            redirect('Welcome');
        } else {
            $data['error'] = 'Wrong Email or Password';
            $this->load->view('login', $data);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
//
