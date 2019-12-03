<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model _partner_model
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

class _partnermodel extends CI_Model {

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

  public function getPartner()
  {
    return $this->db->get('partner')->result();
  }

  public function add()
	  {

	    $data = array(
	      'name'       => $this->input->post('pn'),
	    );

	    return $this->db->insert('partner', $data);

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

	    return $this->db->where('id_partner', $this->input->post('id_reg'))
	                    ->update('partner', $data);

	      if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        } 
    }
    
    public function update()
	  {
	    $data = array(
	      'name'       => $this->input->post('pn')
	    );

	    return $this->db->where('id_partner', $this->input->post('id_partner'))
	                    ->update('partner', $data);
	    

	    if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        } 
	  }

	  public function delete($id_partner)
		{
			$this->db->where('id_partner', $id_partner)
					    ->delete('partner');
			
			if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        }
	  }

	public function get_id_ot($id_partner)
	  {
	    return  $this->db->where('id_partner', $id_partner)
	                    ->get('partner')->row();
	  }

  // ------------------------------------------------------------------------

}

/* End of file _partner_model.php */
/* Location: ./application/models/_partner_model.php */