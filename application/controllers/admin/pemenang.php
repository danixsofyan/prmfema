<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemenang extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('id') || $this->session->userdata('username') != 'seruterus'){
            redirect(base_url('logoutPemenang'));
        }
        $this->load->model('Home_m');
        $this->load->model('Dashboard_m');
    }

	public function index()
	{
        $data['query'] = $this->Home_m->get_pemenang();
        $queryPengaturan = $this->Home_m->get_pengaturan();
        foreach ($queryPengaturan->result() as $row) {
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

        $queryCalon = $this->Dashboard_m->get_calon();
        $queryJumlahPilih = $this->Dashboard_m->get_total_pilih_tiap_calon();
        if ($queryJumlahPilih->num_rows > 0) {
            foreach ($queryJumlahPilih->result() as $row) {
                $data['jumlahPilih'][$row->id_calon] = $row->total;
            }
        }

        if (empty($data['warna'])) {
                $warna = "#6883a3";
            }else{
                $warna = $data['warna'];
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
                  xLabelAngle: 10,
                  hideHover: 'auto',
                  barColors: ['".$warna."']
                });
            ";
        }

        $data['total_pemilih_1'] = $this->Dashboard_m->sum_pemilih_status(1);
        $data['total_pemilih_0'] = $this->Dashboard_m->sum_pemilih_status(0);

        if ($data['query']->num_rows() > 1) {
            $data['content']="admin/content/pemenang_multi_v"; //content
        }else{
            $data['content']="admin/content/pemenang_v"; //content
        }

        $this->load->view('user/main_layout', $data); //layout
	}

}

/* End of file pemenang.php */
/* Location: ./application/controllers/admin/pemenang.php */