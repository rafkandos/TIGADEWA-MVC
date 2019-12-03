<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('About_model', 'am');
	}
	

	public function index()
	{
		
	}

	public function aboutus()
	{
		$this->load->view('user/aboutus');
	}

	public function ourguides()
	{
		$data['guides'] = $this->am->getGuides();
		$this->load->view('user/ourguides', $data);
	}

	public function contactus()
	{
		$this->load->view('user/contactus');
	}

	public function partners()
	{
		$data['partner'] = $this->am->getPartner();
		$this->load->view('user/partners', $data);
	}

	public function testimonials()
	{
		$this->load->view('user/testimonials');
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */