<?php

class Register extends CI_Controller{
    public function index()
    {
        $data['title'] = "Form Registrasi";
    
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_admin/header',$data);
            $this->load->view('registerForm');
        }else{
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $no_telp = $this->input->post('no_telp');
            $password = md5($this->input->post('password'));
            $umur = $this->input->post('umur');            
            $tgl_lahir = $this->input->post('tgl_lahir');
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
            $status_daftar = $this->input->post('status_daftar');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,    
            'no_telp' => $no_telp,
            'password' => $password,
            'umur' => $umur,
            'tgl_lahir' => $tgl_lahir,
            'photo' => $photo,
            'status_daftar' => $status_daftar,
        );
        $this->cvsModel->insertData($data,'user');
        $this->load->view('templates_user/header',$data);
        $this->load->view('user/success');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('jenis_kelamin','Gender','required');
        $this->form_validation->set_rules('no_telp','No. Telp','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('umur','Umur','required');
        $this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
    }
}

?>