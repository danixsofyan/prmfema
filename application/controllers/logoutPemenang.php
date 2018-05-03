<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogoutPemenang extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('id_user')){
            $array = array('id_user' => '', 'username' => '');
        }elseif($this->session->userdata('id')){
            $array = array('id' => '', 'username' => '');
        }else{
        	redirect(base_url('admin'));
        }

		$this->session->unset_userdata($array);
		$this->session->sess_destroy();
        redirect(base_url('admin'));
	}

}

/* End of file logoutPemenang.php */
/* Location: ./application/controllers/logoutPemenang.php */