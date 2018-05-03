<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Login_m');
        if($this->session->userdata('id')){
            redirect('admin/home_admin');
        }    
    }

	public function index() 
	{
        $this->load->view('admin/login_admin_v'); //layout
	}

	public function auth(){
		$username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $check = $this->Login_m->get_records_admin($username, $password);
		if($check){
            foreach ($check as $row) {
                $login = array(
                    'id'    =>  $row->id_admin,
                    'username'  => $row->username
               );
            }
            $this->session->set_userdata($login);

            if ($this->session->userdata('username') == 'seruterus') {
                redirect('pemenang');
            }else{
                redirect('admin/home_admin');
            }
            
        }else{

            $this->session->set_flashdata('msg', 'Login Failed');
            echo $this->session->flashdata('msg');
            redirect('admin/login_admin');
        }
	}

}

/* End of file login_admin.php */
/* Location: ./application/controllers/login.php */