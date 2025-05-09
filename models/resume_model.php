<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resume_model extends CI_Model {

    // Define the table name
    protected $table = 'resume';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Get all resume records
    public function get_all_resumes() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    // Get a single resume record by ID
    public function get_resume_by_id($id) {
        $query = $this->db->get_where($this->table, array('id_resume' => $id));
        return $query->row();
    }

    // Insert a new resume record
    public function insert_resume($data) {
        return $this->db->insert($this->table, $data);
    }

    // Update an existing resume record
    public function update_resume($id, $data) {
        $this->db->where('id_resume', $id);
        return $this->db->update($this->table, $data);
    }

    // Delete a resume record
    public function delete_resume($id) {
        return $this->db->delete($this->table, array('id_resume' => $id));
    }
}
