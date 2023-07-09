<?php

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('hak_akses') != '2'){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "Profile";

        $id_guru = $this->session->userdata('id_guru');
        $data['guru'] = $this->db->query("SELECT * FROM guru WHERE id_guru='$id_guru'")->result();

        $this->load->view('templates_teacher/header',$data);
        $this->load->view('templates_teacher/sidebar');
        $this->load->view('user/teacher/home',$data);
        $this->load->view('templates_teacher/footer');
    }
}
?>