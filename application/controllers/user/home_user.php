<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_user extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Home_m');
        $this->load->model('User_m');
        if(!$this->session->userdata('id_user')){
            redirect(base_url());
        } 
    }

	public function index()
	{
		$data['query'] = $this->Home_m->get_records();
        $queryPengaturan = $this->Home_m->get_pengaturan();
        foreach ($queryPengaturan->result() as $row) {
            $data['judul'] = $row->judul;
            $data['subjudul'] = $row->subjudul;
            $data['judulmodal'] = $row->judulmodal;
            $data['subjudulmodal'] = $row->subjudulmodal;
            $data['texthover'] = $row->texthover;
            $data['periode'] = $row->periode;
            $data['warna'] = $row->warna;
            $data['logo'] = $row->logo;
            $data['logosupport'] = $row->logosupport;
        }
		$data['content']="user/content/content_v"; //content
        $this->load->view('user/main_layout', $data); //layout
	}

    public function vote()
    {
        $vote['id_user']                    = $this->session->userdata('username');
        $vote['id_calon']                   = $this->uri->segment(4);
        $data                               = $this->User_m->vote($vote);

        $this->session->set_flashdata('pesan', 'Voting Berhasil');

        $array = array('id_user' => '', 'username' => '');
        $this->session->unset_userdata($array);
        // $this->session->sess_destroy();
        redirect('user/login_user');
    }

}

/* End of file home_user.php */
/* Location: ./application/controllers/user/home.php */