<?php

class DataGuru extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('hak_akses') != '1'){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "Teacher";

        $data['guru'] = $this->db->query("SELECT * FROM guru ORDER BY kode_guru ASC")->result();

        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataGuru',$data);
        $this->load->view('templates_admin/footer');  
    }

    public function tambahData()
    {
        $data['title'] = "Teacher Registration Form";

        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambahDataGuru',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
           $this->tambahData();
        }else{
            $kode_guru = $this->input->post('kode_guru');
            $nama = $this->input->post('nama');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $umur = $this->input->post('umur');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $alamat = $this->input->post('alamat');
            $no_telp = $this->input->post('no_telp');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $photo = $_FILES['photo']['name'];
            if($photo=''){}else{
                $config ['upload_path'] = './assets/assets_admlte/dist/img';
                $config ['allowed_types'] = 'jpg|jpeg|png|tiff';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('photo')){
                    echo "Photo Gagal diupload!";
                }else{
                    $photo=$this->upload->data('file_name');
                }
            }
            $hak_akses = $this->input->post('hak_akses');

        $data = array(
            'kode_guru' => $kode_guru,
            'nama' => $nama,
            'tgl_lahir' => $tgl_lahir,
            'umur' => $umur,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
            'username' => $username,
            'password' => $password,
            'photo' => $photo,
            'hak_akses' => $hak_akses,
        );

        $this->cvsModel->insertData($data,'guru');
        redirect('admin/dataGuru');
        }
    }

    public function updateData($id)
    {
        $where = array('id_guru' => $id);
        $data['title'] = "Teacher Registration Form";
        
        $data['guru'] = $this->db->query("SELECT * FROM guru WHERE id_guru='$id'")->result();
        
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/updateDataGuru',$data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
           $this->updateData();
        }else{
            $id = $this->input->post('id_guru');
            $kode_guru = $this->input->post('kode_guru');
            $nama = $this->input->post('nama');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $umur = $this->input->post('umur');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $alamat = $this->input->post('alamat');
            $no_telp = $this->input->post('no_telp');
            $username = $this->input->post('username');
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
            $hak_akses = $this->input->post('hak_akses');

            $data = array(
                'kode_guru' => $kode_guru,
                'nama' => $nama,
                'tgl_lahir' => $tgl_lahir,
                'umur' => $umur,
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat,
                'no_telp' => $no_telp,
                'username' => $username,
                'hak_akses' => $hak_akses,
            );

            $where = array(
                'id_guru' => $id
            );

            $this->cvsModel->updateData('guru',$data,$where);
            redirect('admin/dataGuru');
        }
    }

    public function deleteData($id)
    {
        $where = array('id_guru' => $id);
        $this->cvsModel->deleteData($where,'guru');
        redirect('admin/dataGuru');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_guru','Teacher Code','required');
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