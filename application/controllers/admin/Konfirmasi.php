<?php

class Konfirmasi extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('hak_akses') != '1'){
            redirect('login');
        }
    }
    
    public function index()
    {
        $data['title'] = "Registration Confirmation";

        $data['confirm'] = $this->cvsModel->getData('user')->result();

        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/konfirmasi',$data);
        $this->load->view('templates_admin/footer');
    }  

}
?>