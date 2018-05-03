<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_m extends CI_Model {

	public function get_calon(){
        $query = $this->db->query('SELECT * FROM calon join jurusan ON calon.id_jurusan = jurusan.id_jurusan ORDER BY jurusan.id_jurusan ASC');       

        return $query;        
    }

    public function get_total_pilih_tiap_calon(){
    	$query = $this->db->query('select id_calon, count(id_calon) as total from vote group by id_calon');
    	return $query;
    }

    public function sum_pemilih(){
        return $this->db->count_all('user');        
    }

    public function sum_pemilih_status($id = 0){
    	$this->db->where('status', $id);
		$this->db->from('user');
        return $this->db->count_all_results();        
    }
}

/* End of file dashboard_m.php */
/* Location: ./application/models/dashboard_m.php */