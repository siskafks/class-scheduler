<?php

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('hak_akses') != '3'){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "Profile";

        $id_user = $this->session->userdata('id_user');
        $data['siswa'] = $this->db->query("SELECT * FROM user WHERE id_user='$id_user'")->result();

        $this->load->view('templates_student/header',$data);
        $this->load->view('templates_student/sidebar');
        $this->load->view('user/student/home',$data);
        $this->load->view('templates_student/footer');
    }
}
?>