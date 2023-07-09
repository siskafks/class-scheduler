<?php

class Schedule extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('hak_akses') != '2'){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "Schedule";

        $kode_guru = $this->session->userdata('kode_guru');
        $data['ajar'] = $this->db->query("SELECT * FROM mengajar WHERE kode_guru='$kode_guru'")->result();

        $this->load->view('templates_teacher/header',$data);
        $this->load->view('templates_teacher/sidebar');
        $this->load->view('user/teacher/schedule',$data);
        $this->load->view('templates_teacher/footer');
    }

}
?>