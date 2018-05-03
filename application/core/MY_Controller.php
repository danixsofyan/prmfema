<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->data['message'] = array();

		var_dump('MY_Controller');
	}

}

/* End of file MY_Controller.php */
/* Location: ./core/MY_Controller.php */