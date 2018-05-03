<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vooter_m extends CI_Model {

	public function get_records(){
        $query = $this->db->get('user');

        return $query;
    }

    public function addVooters($data = array()){
        $result = $this->db->insert('user',$data);
        if ($result) {
            return true;
        }else{
            return false;
        }
    }

}

/* End of file vooter_v.php */
/* Location: ./application/models/vooter_v.php */