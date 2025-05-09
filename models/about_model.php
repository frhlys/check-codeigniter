<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about_model  extends CI_Model {

    // Define the table name
    protected $table = 'about_me';

    public function __construct() {
        parent::__construct();
        // Load the database libraryq
        $this->load->database();
    }
	
	//C-Create R-Read U-Update D-Delete

    // Get all about_me records
    public function get_all_about_me() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    // Get a single about_me record by ID
    public function get_about_me_by_id($id) {
        $query = $this->db->get_where($this->table, array('id_about' => $id));
        return $query->row();
    }

    // Insert a new about_me record
    public function insert_about_me($data) {
        return $this->db->insert($this->table, $data);
    }

    // Update an existing about_me record
    public function update_about_me($id, $data) {
        $this->db->where('id_about', $id);
        return $this->db->update($this->table, $data);
    }

    // Delete an about_me record
    public function delete_about_me($id) {
        return $this->db->delete($this->table, array('id_about' => $id));
    }
}
