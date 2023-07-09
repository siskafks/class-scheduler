<?php

class Schedule extends CI_Controller{

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

        $data['ajar'] = $this->cvsModel->getData('mengajar')->result();

        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/schedule',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Teaching Relationship Form";

        $data['guru'] = $this->cvsModel->getData('guru')->result();
        $data['siswa'] = $this->db->query("SELECT * FROM user WHERE status_daftar !=0 ORDER BY kode_murid ASC")->result();

        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/teaching',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
           $this->tambahData();
        }else{
            $id_ajar = $this->input->post('id_ajar');
            $kode_guru = $this->input->post('kode_guru');
            $kode_murid = $this->input->post('kode_murid');
            $hari = $this->input->post('hari');
            $jam_awal = $this->input->post('jam_awal');
            $jam_akhir = $this->input->post('jam_akhir');
            
            $data = array(
                'id_ajar' => $id_ajar,
                'kode_guru' => $kode_guru,
                'kode_murid' => $kode_murid,  
                'hari' => $hari, 
                'jam_awal' => $jam_awal,
                'jam_akhir' => $jam_akhir,  
            );

            $this->cvsModel->insertData($data,'mengajar');
            redirect('admin/schedule');
        }
    }

    public function deleteData($id)
    {
        $where = array('id_ajar' => $id);
        $this->cvsModel->deleteData($where,'mengajar');
        redirect('admin/schedule');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_ajar','CODE','required');
        $this->form_validation->set_rules('kode_guru','Teacher Code','required');
        $this->form_validation->set_rules('kode_murid','Student Code','required');
        $this->form_validation->set_rules('hari','Hari','required');
    }
}
?>