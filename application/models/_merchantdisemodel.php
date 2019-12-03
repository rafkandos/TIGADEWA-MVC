<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model _merchantdise_model
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

class _merchantdisemodel extends CI_Model {

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

  public function getMerchantdise()
  {
    return $this->db->get('merchantdise')->result();
    
  }

  public function add()
	  {

	    $data = array(
	      'name'       => $this->input->post('mn'),
	    );

	    return $this->db->insert('merchantdise', $data);

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

	    return $this->db->where('id_merchantdise', $this->input->post('id_reg'))
	                    ->update('merchantdise', $data);

	      if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        } 
    }
    
    public function update()
	  {
	    $data = array(
	      'name'       => $this->input->post('mn')
	    );

	    return $this->db->where('id_merchantdise', $this->input->post('id_merchantdise'))
	                    ->update('merchantdise', $data);
	    

	    if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        } 
	  }

	  public function delete($id_merchantdise)
		{
			$this->db->where('id_merchantdise', $id_merchantdise)
					    ->delete('merchantdise');
			
			if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        }
	  }

	public function get_id_ot($id_merchantdise)
	  {
	    return  $this->db->where('id_merchantdise', $id_merchantdise)
	                    ->get('merchantdise')->row();
	  }

  // ------------------------------------------------------------------------

}

/* End of file _merchantdise_model.php */
/* Location: ./application/models/_merchantdise_model.php */