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

	public function get_d()
	{
		return $this->db->where('year', 2016)
						->get('gallery')->result();
	}

	public function get_e()
	{
		return $this->db->where('year', 2015)
						->get('gallery')->result();
	}

	public function get_f()
	{
		return $this->db->where('year', 2014)
						->get('gallery')->result();
	}

	public function get_g()
	{
		return $this->db->where('year', 2013)
						->get('gallery')->result();
	}

	public function get_h()
	{
		return $this->db->where('year', 2012)
						->get('gallery')->result();
	}

	public function get_i()
	{
		return $this->db->where('year', 2011)
						->get('gallery')->result();
	}

	public function get_j()
	{
		return $this->db->where('year', 2010)
						->get('gallery')->result();
	}

	public function get_k()
	{
		return $this->db->where('year', 2009)
						->get('gallery')->result();
	}

	public function get_l()
	{
		return $this->db->where('year', 2008)
						->get('gallery')->result();
	}

	public function getAll($id_gallery)
	{
		return $this->db->where('id_gallery', $id_gallery)
						->get('gallery')->result();
	}

}

/* End of file Gallery_model.php */
/* Location: ./application/models/Gallery_model.php */