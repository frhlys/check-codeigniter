class AboutController extends CI_Controller {
    public function index() {
        $user_id = $this->session->userdata('user_id');
        $data['about'] = $this->About_model->get_about($user_id);
        $this->load->view('admin/about_form', $data);
    }

    public function save() {
        $user_id = $this->session->userdata('user_id');
        $this->About_model->save_about($user_id, $this->input->post());
        redirect('admin/about');
    }
}
