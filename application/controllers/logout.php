<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        // if(!$this->session->userdata('id') || !$this->session->userdata('id_user')){
        //     redirect(base_url());
        // }   

    }

	public function index()
	{
		if($this->session->userdata('id_user')){
            $array = array('id_user' => '', 'username' => '');
        }elseif($this->session->userdata('id')){
            $array = array('id' => '', 'username' => '');
        }else{
        	redirect(base_url());
        }

		$this->session->unset_userdata($array);
		$this->session->sess_destroy();
        redirect(base_url());
	}

}