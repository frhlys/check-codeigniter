

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactmodel extends CI_Model {

    // Define the table name
    protected $table = 'contact';

    public function __construct() {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

    // Get all contact messages
    public function get_all_contacts() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    // Get a single contact by email
    public function get_contact_by_email($email) {
        $query = $this->db->get_where($this->table, array('email_address' => $email));
        return $query->row();
    }

    // Insert a new contact message
    public function insert_contact($data) {
        return $this->db->insert($this->table, $data);
    }

    // Update an existing contact message
    public function update_contact($email, $data) {
        $this->db->where('email_address', $email);
        return $this->db->update($this->table, $data);
    }

    // Delete a contact message
    public function delete_contact($email) {
        return $this->db->delete($this->table, array('email_address' => $email));
    }
}
