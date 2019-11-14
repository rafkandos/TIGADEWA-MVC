<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gallery_model');
	}

	public function index()
	{
		$data['get_a'] = $this->Gallery_model->get_a();
		$data['get_b'] = $this->Gallery_model->get_b();
		$data['get_c'] = $this->Gallery_model->get_c();
		$this->load->view('user/gallery', $data);
	}

}

/* End of file Gallery.php */
/* Location: ./application/controllers/Gallery.php */