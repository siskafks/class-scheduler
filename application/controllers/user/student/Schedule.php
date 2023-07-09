<?php

class Schedule extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('hak_akses') != '3'){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "Schedule";

        $kode_murid = $this->session->userdata('kode_murid');
        $data['ajar'] = $this->db->query("SELECT * FROM mengajar WHERE kode_murid='$kode_murid'")->result();

        $this->load->view('templates_student/header',$data);
        $this->load->view('templates_student/sidebar');
        $this->load->view('user/student/schedule',$data);
        $this->load->view('templates_student/footer');
    }

}
?>