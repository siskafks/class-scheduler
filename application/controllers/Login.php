<?php

class Login extends CI_Controller {
	public function index()
	{
        $this->_rules();

		if($this->form_validation->run()==FALSE){
			$data['title'] = "Login";
            $this->load->view('templates_admin/header',$data);
            $this->load->view('login');
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$keterangan = $this->input->post('keterangan');

			if($keterangan == 0){
                $cek = $this->cvsModel->cek_loginS($username, $password);
            }else{
                $cek = $this->cvsModel->cek_loginT($username, $password);
            }

			if($cek == FALSE){
				redirect('login');
			}else{
				$this->session->set_userdata('hak_akses',$cek->hak_akses);
				$this->session->set_userdata('nama',$cek->nama);
				$this->session->set_userdata('photo',$cek->photo);
				$this->session->set_userdata('id_user',$cek->id_user);
				$this->session->set_userdata('id_guru',$cek->id_guru);
				$this->session->set_userdata('kode_guru',$cek->kode_guru);
				$this->session->set_userdata('kode_murid',$cek->kode_murid);
				switch ($cek->hak_akses) {
					case 1: redirect('admin/dashboard');
						break;
					case 2: redirect('user/teacher/home');
						break;
					case 3: redirect('user/student/home');
						break;
					default:
						break;
				}
			}
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('keterangan','username','required');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}

?>
