<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_m extends CI_Model {

	public function get_records(){
        $query = $this->db->query("SELECT * FROM calon JOIN jurusan ON calon.id_jurusan = jurusan.id_jurusan ORDER BY jurusan.id_jurusan ASC");

        return $query;
    }

    public function get_records_id($id){
        $query = $this->db->query("SELECT * FROM calon JOIN jurusan ON calon.id_jurusan = jurusan.id_jurusan WHERE id_calon = $id ORDER BY jurusan.id_jurusan");

        return $query;
    }

    public function get_pengaturan($id = 1){
    	$query = $this->db->get_where('pengaturan', 'id = '.$id);
    	return $query;
    }

    public function get_pemenang(){
        $query = $this->db->query('select calon.nama_calon, calon.photo, jurusan.nama_jurusan, count(*) as total from vote inner join calon on calon.id_calon = vote.id_calon inner join jurusan on jurusan.id_jurusan = calon.id_jurusan group by vote.id_calon having count(*) = (select count(*) as total from vote inner join calon on calon.id_calon = vote.id_calon inner join jurusan on jurusan.id_jurusan = calon.id_jurusan group by vote.id_calon order by total desc limit 1) order by total desc');
        return $query;
    }

}

/* End of file home_m.php */
/* Location: ./application/models/home_m.php */