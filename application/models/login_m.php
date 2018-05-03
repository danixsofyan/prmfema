<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_m extends CI_Model {

	function get_records($password = null){
        $query = $this->db->get_where('user', array('password'=> $password), 1);

        if($query->num_rows == 1){
        	return $query->result();
        }

        return false;
    }
	
	function get_records_admin($username= null, $password = null){
        $query = $this->db->get_where('admin', array('username' => $username, 'password'=> $password), 1);

        if($query->num_rows == 1){
        	return $query->result();
        }

        return false;
    }

}

/* End of file login_m.php */
/* Location: ./application/models/login_m.php */