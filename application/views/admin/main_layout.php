<?php         
	 $this->load->view('admin/layout/header_admin_v');
     $this->load->view('admin/layout/menu_sidebar_admin_v');
     $this->load->view($content);
     $this->load->view('admin/layout/footer_admin_v');   
?>