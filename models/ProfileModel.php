<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileModel extends CI_Model {

    // Define the table name
    protected $table = 'profile';

    public function __construct() {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

    // Get all profile records
    public function get_all_profiles() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    // Get a single profile by ID
    public function get_profile_by_id($id) {
        $query = $this->db->get_where($this->table, array('id' => $id));
        return $query->row();
    }

    // Insert a new profile record
    public function insert_profile($data) {
        return $this->db->insert($this->table, $data);
    }

    // Update an existing profile record
    public function update_profile($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    // Delete a profile record
    public function delete_profile($id) {
        return $this->db->delete($this->table, array('id' => $id));
    }
}
