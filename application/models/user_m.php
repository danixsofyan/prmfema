<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_m extends CI_Model {
  

	public function get_records(){
        $query = $this->db->get('calon');

        return $query;
    }

    public function get_records_id($id){
        $query = $this->db->get_where('calon', array('id_calon' => $id));

        return $query;
    }

    public function get_jurusan(){
        $query = $this->db->get('jurusan');        

        return $query;        
    }

    public function get_jurusan_id(){
        $query = $this->db->query('SELECT * FROM calon join jurusan ON calon.id_jurusan = jurusan.id_jurusan ORDER BY jurusan.id_jurusan ASC');       

        return $query;        
    }


    public function insert($data = array()){
        $result = $this->db->insert('calon',$data);
        if ($result) {
            return true;
        }else{
            return false;
        }
    }

    public function vote($data = array()){
        $result = $this->db->insert('vote',$data);
        if ($result) {
            return true;
        }else{
            return false;
        }
    }

    public function update($id, $data = array()){

        $this->db->where('id_user', $id);
        $this->db->update('calon', $data); 
    }

    public function set_status($id, $data = array()){

        $this->db->where('id_user', $id);
        $this->db->update('user', $data); 
    }

    public function delete($id){
        $query = $this->db->delete('calon', array('id_calon' => $id)); 
        return $query;
    }	

}

/* End of file user_m.php */
/* Location: ./application/models/user_m.php */