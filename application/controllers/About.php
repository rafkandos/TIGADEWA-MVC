<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('About_model', 'am');
		$this->load->model('Admin_model', 'adm');
		$this->load->model('_testimonialsmodel', 'tm');
		
	}
	

	public function index()
	{
		
	}

	public function aboutus()
	{
		$data['about'] = $this->adm->getAbout();
		$this->load->view('user/aboutus', $data);
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
		$data['testi'] = $this->tm->getTesti();
		$this->load->view('user/testimonials', $data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */