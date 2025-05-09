// application/models/Resume_model.php
class Resume_model extends CI_Model {

    public function get_skills($id) {
        $this->db->where('id_resume', $id);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('resume', 1);
        return $query->row_array();
    }

    public function get_education($id) {
        $this->db->where('id_resume', $id);
        $this->db->order_by('education_year', 'ASC');
        $query = $this->db->get('resume');
        return $query->result_array();
    }

    public function get_experience($id) {
        $this->db->where('id_resume', $id);
        $this->db->order_by('experience_start', 'ASC');
        $query = $this->db->get('resume');
        return $query->result_array();
    }
}
