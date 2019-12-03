<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model _guidesmodel_model
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

class _guidesmodel extends CI_Model {

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

  public function getGuides()
  {
    return $this->db->get('guides')->result();
    
  }

  public function add()
	  {

	    $data = array(
	      'name'       => $this->input->post('gn'), 
	      'jabatan'    => $this->input->post('jb'),
	      'caption'		 => $this->input->post('cp')
	    );

	    return $this->db->insert('guides', $data);

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

	    return $this->db->where('id_guides', $this->input->post('id_reg'))
	                    ->update('guides', $data);

	      if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        } 
    }
    
    public function update()
	  {
	    $data = array(
	      'name'       => $this->input->post('gn'), 
	      'jabatan'    => $this->input->post('jb'),
	      'caption'		 => $this->input->post('cp')
	    );

	    return $this->db->where('id_guides', $this->input->post('id_guides'))
	                    ->update('guides', $data);
	    

	    if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        } 
	  }

	  public function delete($id_guides)
		{
			$this->db->where('id_guides', $id_guides)
					    ->delete('guides');
			
			if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        }
	  }

	public function get_id_ot($id_guides)
	  {
	    return  $this->db->where('id_guides', $id_guides)
	                    ->get('guides')->row();
	  }

  // ------------------------------------------------------------------------

}

/* End of file _guidesmodel_model.php */
/* Location: ./application/models/_guidesmodel_model.php */