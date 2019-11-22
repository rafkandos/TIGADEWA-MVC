<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') != true) {
			redirect('Login','refresh');
		}
	}
	

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

	public function logout()
    {
        $data = array(
            'id_admin'    => "",
			'username'    => "",
			'adminName'	  => "",
            'logged_in'   => false
        );
        
        $this->session->unset_userdata('$data');
        $this->session->sess_destroy();
        redirect('admin');
    }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */