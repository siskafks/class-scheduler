<?php

class DetailPendaftar extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('hak_akses') != '1'){
            redirect('login');
        }
    }

    public function detail($id)
    {
        $data['title'] = "Registrant";

        $data['pendaftar'] = $this->db->query("SELECT * FROM user WHERE id_user ='$id'")->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detailPendaftar',$data);
        $this->load->view('templates_admin/footer');
    }

    public function confirm()
    {   
        $id = $this->input->post('id_user');
        $status_daftar = $this->input->post('status_daftar');
        $hak_akses = $this->input->post('hak_akses');
        $kode_murid = $this->input->post('kode_murid');

        $data = array(
            'status_daftar' => $status_daftar,
            'hak_akses' => $hak_akses,
            'kode_murid' => $kode_murid,
        );

        $where = array(
            'id_user' => $id
        );

        $this->cvsModel->updateData('user',$data,$where);
        redirect('admin/konfirmasi');

    }
}
?>