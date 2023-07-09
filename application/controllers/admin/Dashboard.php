<?php

class Dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('hak_akses') != '1'){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "Profile";

        $id_guru = $this->session->userdata('id_guru');
        $data['guru'] = $this->db->query("SELECT * FROM guru WHERE id_guru='$id_guru'")->result();

        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('templates_admin/footer');
    }
}
?>