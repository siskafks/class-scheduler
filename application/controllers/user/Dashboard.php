<?php

class Dashboard extends CI_Controller{

    public function index()
    {
        $data['title'] = "Dashboard";
        $this->load->view('templates_user/header',$data);
        $this->load->view('user/dashboard',$data);
        $this->load->view('templates_user/footer');
    }
}
?>