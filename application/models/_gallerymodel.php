<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _gallerymodel extends CI_Model {

	public function getGallery()
	{
		return $this->db->get('gallery')->result();
	}

	public function getFirst()
	{
		return $this->db->order_by('id_gallery', 'desc')
						->get('gallery', 1)
						->result();
	}

	public function getSecond()
	{
		return $this->db->order_by('id_gallery', 'desc')
						->get('gallery', 1, 1)->result();
	}

	public function getThird()
	{
		return $this->db->order_by('id_gallery', 'desc')
						->get('gallery', 1, 2)->result();
	}

	public function upload()
	  {
	    $hai = $this->upload->data('file_name');

	    $data = array(
	      'picture' => $hai
	    );

	    return $this->db->where('id_gallery', $this->input->post('id_reg'))
	                    ->update('gallery', $data);

	      if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        } 
	  }

	 public function add()
	  {

	    $data = array(
	      'tripName'        => $this->input->post('tn'), 
	      'tripDate'        => $this->input->post('td'),
	      'year'		    => $this->input->post('ye'),
	      'detail'          => $this->input->post('dt')
	    );

	    return $this->db->insert('gallery', $data);

	    if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        } 
	  }

	public function update()
	  {
	    $data = array(
	      'tripName'        => $this->input->post('tn'), 
	      'tripDate'        => $this->input->post('td'),
	      'year'		    => $this->input->post('ye'),
	      'detail'          => $this->input->post('dt')
	    );

	    return $this->db->where('id_gallery', $this->input->post('id_gallery'))
	                    ->update('gallery', $data);
	    

	    if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        } 
	  }

	 public function delete($id_gallery)
		{
			$this->db->where('id_gallery', $id_gallery)
					    ->delete('gallery');
			
			if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        }
	  }

	public function get_id_ot($id_gallery)
	  {
	    return  $this->db->where('id_gallery', $id_gallery)
	                    ->get('gallery')->row();
	  }

}

/* End of file _gallerymodel.php */
/* Location: ./application/models/_gallerymodel.php */