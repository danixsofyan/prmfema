<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('id')){
            redirect(base_url());
        }
        $this->load->model('Dashboard_m');
        $this->load->model('User_m');
        $this->load->model('Home_m');
        $this->load->model('Admin_m');
        $this->load->model('Vooter_m');
    }

    public function index()
	{
		$data['query'] = $this->Dashboard_m->get_calon();
		$queryCalon = $this->Dashboard_m->get_calon();
		$data['total_calon'] = $data['query']->num_rows();
		$data['total_pemilih'] = $this->Dashboard_m->sum_pemilih();
		$data['total_pemilih_1'] = $this->Dashboard_m->sum_pemilih_status(1);
		$data['total_pemilih_0'] = $this->Dashboard_m->sum_pemilih_status(0);

		$queryJumlahPilih = $this->Dashboard_m->get_total_pilih_tiap_calon();
		if ($queryJumlahPilih->num_rows > 0) {
			foreach ($queryJumlahPilih->result() as $row) {
				$data['jumlahPilih'][$row->id_calon] = $row->total;
			}
		}

		$queryWarna = $this->Home_m->get_pengaturan();
		foreach ($queryWarna->result() as $rowWarna) {
			if (empty($rowWarna->warna)) {
				$warna = "#6883a3";
			}else{
				$warna = $rowWarna->warna;
			}
			
		}

		if ($queryCalon->num_rows() > 0) {
		$data['dataGrafik'] = "
				Morris.Bar({
		          element: 'hero-bar',
		          data: [ ";
		          	foreach ($queryCalon->result() as $rowGrafik) {
		          		if (!isset($data['jumlahPilih'][$rowGrafik->id_calon])) {
		          			$data['jumlahPilih'][$rowGrafik->id_calon] = 0;
		          		}
						$data['dataGrafik'] .= "{calon: '".$rowGrafik->nama_calon."', suara: ".$data['jumlahPilih'][$rowGrafik->id_calon]."},";
					}
		$data['dataGrafik'] .= "     ],
		          xkey: 'calon',
		          ykeys: ['suara'],
		          labels: ['Perolehan Suara'],
		          barRatio: 0.4,
		          xLabelAngle: 15,
		          hideHover: 'auto',
		          barColors: ['".$warna."']
		        });
			";
		}
		
		$data['content']="admin/content/dashboard_v"; //content
        $this->load->view('admin/main_layout', $data); //layout
	}

	public function dashboard()
	{
		
	}

	public function pengaturan($id = '', $field = '')
	{	

		if (!empty($id) && !empty($field)) {
			$hapus[$field] = '';
            $this->Admin_m->delete_logo($id, $hapus);
            redirect('admin/home_admin/pengaturan');
		}

		$query = $this->Home_m->get_pengaturan();
		foreach ($query->result() as $row) {
			$data['id'] = $row->id;
			$data['judul'] = $row->judul;
			$data['subjudul'] = $row->subjudul;
			$data['judulmodal'] = $row->judulmodal;
			$data['subjudulmodal'] = $row->subjudulmodal;
			$data['judulpemenang'] = $row->judulpemenang;
			$data['texthover'] = $row->texthover;
			$data['periode'] = $row->periode;
			$data['logo'] = $row->logo;
			$data['warna'] = $row->warna;
			$data['logoadmin'] = $row->logoadmin;
			$data['logosupport'] = $row->logosupport;
		}
		$data['content']="admin/content/pengaturan_v"; //content
        $this->load->view('admin/main_layout', $data); //layout
	}

	public function calon_pemimpin()
	{
		$data['query'] = $this->User_m->get_jurusan_id(); //query
		$data['content']="admin/content/calon_pemimpin_v"; //content
        $this->load->view('admin/main_layout', $data); //layout
	}

	public function tambah_pemimpin()
	{
		$data['query'] = $this->User_m->get_jurusan(); //query
		$data['content']="admin/content/form_calon_v"; //content
        $this->load->view('admin/main_layout', $data); //layout
	}

	public function set_pengaturan()
    {

    	if(isset($_POST['submit'])){

    		if ($_FILES['logo']['size'] > 0 && $_FILES['logosupport']['size'] > 0) {
    			
    			$this->session->set_flashdata('judul', 'Gagal Menyimpan Data.');
    			$this->session->set_flashdata('pesan', 'Tidak Bisi Upload Logo dan Logo Support secara bersamaan!');
    			redirect('admin/home_admin/pengaturan');
    			exit();
    		}

    		if ($_FILES['logo']['size'] > 0) {
    			$config['upload_path']          = './assets/img/logo/';
		        $config['allowed_types']        = 'gif|jpg|jpeg|png';
		        $config['max_size']             = 2048000;

		        $this->load->library('upload', $config);

		        if (!$this->upload->do_upload('logo'))
		        {

		        }
		        else
		        {
			        $update['logo']           	= $this->upload->nama_file();
		        }
    		}elseif ($_FILES['logosupport']['size'] > 0) {
    			$config['upload_path']          = './assets/img/logosupport/';
		        $config['allowed_types']        = 'gif|jpg|jpeg|png';
		        $config['max_size']             = 2048000;

		        $this->load->library('upload', $config);
		        if (!$this->upload->do_upload('logosupport'))
		        {

		        }
		        else
		        {
			        $update['logosupport']    = $this->upload->nama_file();
		        }
    		}

	        $update['judul']             = $this->input->post('judul');
	        $update['subjudul']          = $this->input->post('subjudul');
	        $update['judulmodal']        = $this->input->post('judulmodal');
	        $update['judulpemenang']        = $this->input->post('judulpemenang');
	        $update['subjudulmodal']     = $this->input->post('subjudulmodal');
	        $update['texthover']       	 = $this->input->post('texthover');
	        $update['periode']         	 = $this->input->post('periode');
	        $update['warna']           	 = $this->input->post('warna');
	        $update['logoadmin']         = $this->input->post('logoadmin');
	        $data                        = $this->Admin_m->delete_logo($this->input->post('id'), $update);
    	}
    	$this->session->set_flashdata('judul', 'Sukses');
    	$this->session->set_flashdata('pesan', 'Berhasil Menyimpan Data.');
	    redirect('admin/home_admin/pengaturan');

    }

	public function upload_calon()
    {

    	$config['upload_path']          = './assets/img/photo/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 2048000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload())
        {
            redirect('admin/home_admin/tambah_pemimpin');
        }
        else
        {
	        $calon['photo']                    	= $this->upload->nama_file();
        }

        	$calon['id_calon']                	= $this->input->post('id_calon');
	        $calon['nama_calon']                = $this->input->post('nama_calon');
	        $calon['id_jurusan']         		= $this->input->post('id_jurusan');
	        $calon['visi']           			= $this->input->post('visi');
	        $calon['misi']         				= $this->input->post('misi');
	        $calon['asal_kota']                	= $this->input->post('asal_kota');
	        $data                               = $this->User_m->insert($calon);
	        redirect('admin/home_admin/calon_pemimpin');
    }

	public function detil_pemimpin()
	{
		$id = $this->uri->segment(4);
		$data['query'] = $this->Home_m->get_records_id($id); //query
		$data['content']="admin/content/detil_pemimpin_v"; //content
        $this->load->view('admin/main_layout', $data); //layout
	}

	public function profile($id = NULL)
	{
		$data['query'] = $this->Home_m->get_records_id($id); //query
		$data['content']="admin/content/profile_v"; //content
        $this->load->view('admin/main_layout', $data); //layout
	}

	public function edit_profile($id = NULL, $field = NULL)
	{
		if (!empty($id) && !empty($field)) {
			$hapus[$field] = '';
            $this->Admin_m->set_profile($id, $hapus);
            redirect('admin/home_admin/edit_profile/'.$id);
		}

		$data['query'] = $this->Home_m->get_records_id($id); //query
		$data['query1'] = $this->User_m->get_jurusan(); //query
		$data['content']="admin/content/edit_profile_v"; //content
        $this->load->view('admin/main_layout', $data); //layout
	}

	public function set_profile()
    {

    	$config['upload_path']          = './assets/img/photo/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 2048000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload())
        {
            
        }
        else
        {
	        $calon['photo']                    	= $this->upload->nama_file();
        }
	        $calon['id_calon']                	= $this->input->post('id_calon');
	        $calon['nama_calon']                = $this->input->post('nama_calon');
	        $calon['id_jurusan']         		= $this->input->post('id_jurusan');
	        $calon['visi']           			= $this->input->post('visi');
	        $calon['misi']         				= $this->input->post('misi');
	        $calon['asal_kota']                	= $this->input->post('asal_kota');

        $this->Admin_m->set_profile($this->input->post('id_calon'), $calon);
        redirect('admin/home_admin/edit_profile/'.$this->input->post('id_calon'));
    }

	public function edit_pemimpin()
	{
		$data['content']="admin/content/edit_pemimpin_v"; //content
        $this->load->view('admin/main_layout', $data); //layout
	}

	public function vooters()
	{
		$data['query'] = $this->Vooter_m->get_records();
		$data['content']="admin/content/vooters_v"; //content
        $this->load->view('admin/main_layout', $data); //layout
	}

	public function tambah_vooter()
	{
		$tambah = addVooters($this->input->post('jumlahVooter'), $this->input->post('panjangPassword'));
		if ($tambah) {
			redirect('admin/home_admin/vooters');
		}
	}

	public function hapus_pemimpin($id = 0)
	{
		if (empty($id)) {
			redirect(base_url());
		}else{
			$this->Admin_m->delete('calon', 'id_calon', $id);
			$this->Admin_m->delete('vote', 'id_calon', $id);
			redirect(base_url());
		}
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */