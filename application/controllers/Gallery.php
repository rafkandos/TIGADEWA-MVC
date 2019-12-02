<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gallery_model', 'gm');
	}

	public function index()
	{
		$data['get_a'] = $this->gm->get_a();
		$data['get_b'] = $this->gm->get_b();
		$data['get_c'] = $this->gm->get_c();
		$data['get_d'] = $this->gm->get_d();
		$data['get_e'] = $this->gm->get_e();
		$data['get_f'] = $this->gm->get_f();
		$data['get_g'] = $this->gm->get_g();
		$data['get_h'] = $this->gm->get_h();
		$data['get_i'] = $this->gm->get_i();
		$data['get_j'] = $this->gm->get_j();
		$data['get_k'] = $this->gm->get_k();
		$data['get_l'] = $this->gm->get_l();
		$this->load->view('user/gallery', $data);
	}

	public function detail($id_gallery)
	{
		$data['gal'] = $this->gm->getAll($id_gallery);
		$this->load->view('user/gallery_detail', $data);
	}

}

/* End of file Gallery.php */
/* Location: ./application/controllers/Gallery.php */