<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('_testimonialsmodel', 'tm');
		$this->load->model('Admin_model', 'am');
		$this->load->model('_gallerymodel', 'gm');
	}
	

	public function index()
	{
		$data['testi'] = $this->tm->getTesti();
		$data['poptrip'] = $this->am->getPopTrip();
		$data['lastone'] = $this->gm->getFirst();
		$data['lasttu'] = $this->gm->getSecond();
		$data['lasttri'] = $this->gm->getThird();
		$this->load->view('user/home', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */