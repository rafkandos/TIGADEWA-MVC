<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('_testimonialsmodel', 'tm');
		
	}
	

	public function index()
	{
		$data['testi'] = $this->tm->getTesti();
		$this->load->view('user/home', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */