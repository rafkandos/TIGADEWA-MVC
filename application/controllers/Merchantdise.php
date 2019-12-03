<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchantdise extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Merchantdise_model', 'mm');
		
	}
	

	public function index()
	{
		$data['merchant'] = $this->mm->getMerch();
		$this->load->view('user/merchantdise', $data);
	}

}

/* End of file Merchantdise.php */
/* Location: ./application/controllers/Merchantdise.php */