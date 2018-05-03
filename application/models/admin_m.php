<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

	public function get_records(){
        $query = $this->db->get('calon');

        return $query;
    }

    public function get_records_id($id){
        $query = $this->db->get_where('calon', array('id_calon' => $id));

        return $query;
    }

    public function delete_logo($id, $data = array()){

        $this->db->where('id', $id);
        $this->db->update('pengaturan', $data); 
    }

    public function set_profile($id, $data = array()){

        $this->db->where('id_calon', $id);
        $this->db->update('calon', $data); 
    }

    public function delete($tabel, $field, $id){
        $query = $this->db->delete($tabel, array($field => $id)); 
        return $query;
    }

}

/* End of file admin_m.php */
/* Location: ./application/models/admin_m.php */