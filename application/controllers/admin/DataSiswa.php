<?php

class DataSiswa extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('hak_akses') != '1'){
            redirect('login');
        }
    }
    
    public function index()
    {
        $data['title'] = "Student";

        $data['siswa'] = $this->db->query("SELECT * FROM user WHERE status_daftar !=0 ORDER BY kode_murid ASC")->result();

        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataSiswa',$data);
        $this->load->view('templates_admin/footer');
    }

    
    public function updateData($id)
    {
        $where = array('id_user' => $id);
        $data['title'] = "Student Registration Form";
        
        $data['siswa'] = $this->db->query("SELECT * FROM user WHERE status_daftar !=0 AND id_user='$id'")->result();
        
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/updateDataSiswa',$data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
           $this->updateData();
        }else{
            $id = $this->input->post('id_user');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $no_telp = $this->input->post('no_telp');
            $password = md5($this->input->post('password'));
            $umur = $this->input->post('umur');            
            $tgl_lahir = $this->input->post('tgl_lahir');
            $photo = $_FILES['photo']['name'];
            if($photo){
                $config ['upload_path'] = './assets/assets_admlte/dist/img';
                $config ['allowed_types'] = 'jpg|jpeg|png|tiff';
                $this->load->library('upload',$config);
                if($this->upload->do_upload('photo')){
                    $photo=$this->upload->data('file_name');
                    $this->db->set('photo',$photo);
                }else{
                    echo $this->upload->display_errors();
                }
            }
            $kode_murid = $this->input->post('kode_murid');

            $data = array(
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'jenis_kelamin' => $jenis_kelamin,    
                'no_telp' => $no_telp,
                'password' => $password,
                'umur' => $umur,
                'tgl_lahir' => $tgl_lahir,
                'kode_murid' => $kode_murid,
            );

            $where = array(
                'id_user' => $id
            );

            $this->cvsModel->updateData('user',$data,$where);
            redirect('admin/dataSiswa');
        }
    }

    public function deleteData($id)
    {
        $where = array('id_user' => $id);
        $this->cvsModel->deleteData($where,'user');
        redirect('admin/dataSiswa');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('umur','Umur','required');
        $this->form_validation->set_rules('jenis_kelamin','Gender','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_telp','No. Telp','required');
        $this->form_validation->set_rules('username','Username','required');
    }
}
?>