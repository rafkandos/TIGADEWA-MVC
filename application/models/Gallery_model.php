<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {

	public function get_a()
	{
		return $this->db->where('year', 2017)
						->get('gallery')->result();
	}

	public function get_b()
	{
		return $this->db->where('year', 2018)
						->get('gallery')->result();
	}

	public function get_c()
	{
		return $this->db->where('year', 2019)
						->get('gallery')->result();
	}

}

/* End of file Gallery_model.php */
/* Location: ./application/models/Gallery_model.php */