<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		
	}

	public function aboutus()
	{
		$this->load->view('user/aboutus');
	}

	public function ourguides()
	{
		$this->load->view('user/ourguides');
	}

	public function contactus()
	{
		$this->load->view('user/contactus');
	}

	public function partners()
	{
		$this->load->view('user/partners');
	}

	public function testimonials()
	{
		$this->load->view('user/testimonials');
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */