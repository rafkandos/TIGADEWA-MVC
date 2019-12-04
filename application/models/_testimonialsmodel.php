<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model _testimonials_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class _testimonialsmodel extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  public function getTesti()
  {
    return $this->db->get('testimonials')->result();
  }

  public function add()
	  {

	    $data = array(
        'name'       => $this->input->post('cn'),
        'caption'    => $this->input->post('cp')
	    );

	    return $this->db->insert('testimonials', $data);

	    if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        } 
    }
    
    public function upload()
	  {
	    $hai = $this->upload->data('file_name');

	    $data = array(
	      'photo' => $hai
	    );

	    return $this->db->where('id_testimonials', $this->input->post('id_reg'))
	                    ->update('testimonials', $data);

	      if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        } 
    }
    
    public function update()
	  {
	    $data = array(
	      'name'       => $this->input->post('cn'),
        'caption'    => $this->input->post('cp')
	    );

	    return $this->db->where('id_testimonials', $this->input->post('id_testimonials'))
	                    ->update('testimonials', $data);
	    

	    if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        } 
	  }

	  public function delete($id_testimonials)
		{
			$this->db->where('id_testimonials', $id_testimonials)
					    ->delete('testimonials');
			
			if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        }
	  }

	public function get_id_ot($id_testimonials)
	  {
	    return  $this->db->where('id_testimonials', $id_testimonials)
	                    ->get('testimonials')->row();
	  }

  // ------------------------------------------------------------------------

}

/* End of file _testimonials_model.php */
/* Location: ./application/models/_testimonials_model.php */