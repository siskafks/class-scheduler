<?php

class MySchedule extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('hak_akses') != '1'){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "Schedule";

        $kode_guru = $this->session->userdata('kode_guru');
        $data['ajar'] = $this->db->query("SELECT * FROM mengajar WHERE kode_guru='$kode_guru'")->result();

        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/mySchedule',$data);
        $this->load->view('templates_admin/footer');
    }

}
?>