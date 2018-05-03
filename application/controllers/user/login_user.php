<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_user extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Login_m');
        $this->load->model('User_m');
        $this->load->model('Home_m');
        if($this->session->userdata('id_user')){
            redirect('user/home_user');
        }elseif($this->session->userdata('id')){
            redirect('admin/home_admin');
        }

    }

	public function index()
	{
        $queryPengaturan = $this->Home_m->get_pengaturan();
        foreach ($queryPengaturan->result() as $row) {
            $data['judul'] = $row->judul;
            $data['subjudul'] = $row->subjudul;
            $data['periode'] = $row->periode;
            $data['logo'] = $row->logo;
        }
		$this->load->view('user/login_user_v', $data);
	}

	public function auth(){
		$password = $this->input->post('password');
        $check = $this->Login_m->get_records($password);
		if($check){
            foreach ($check as $row) {
                if ($row->status == 1) {
                    $this->session->set_flashdata('msg', 'Anda Sudah Pernah Login!');
                }else{
                    $login = array(
                        'id_user' => $row->id_user,
                        'username'  => $row->password
                    );

                    $this->session->set_userdata($login);

                    $data['status'] = 1;
                    $this->User_m->set_status($this->session->userdata('id_user'), $data);

                    redirect('user/home_user');
                }
            }
        }else{
            $this->session->set_flashdata('msg', 'Password salah, silahkan coba lagi');
        }
        redirect('user/login_user');
	}

}

/* End of file login_user.php */
/* Location: ./application/controllers/login.php */