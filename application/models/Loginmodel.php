<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Loginmodel_model
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

class Loginmodel extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  public function login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $query = $this->db->where('username', $username)
							  ->where('password', $password)
							  ->get('admin');

			if ($query->num_rows() > 0) {
				$dl = $query->row();

				$data = array(
					'id_admin'  => $dl->id_admin,
					'username'  => $dl->username,
					'password'  => $dl->password,
					'adminName' => $dl->adminName,
					'logged_in'	=> true
				);
				
				$this->session->set_userdata($data);
        return true;
			} else{
				return false;
			}
  }

  // ------------------------------------------------------------------------

}

/* End of file Loginmodel_model.php */
/* Location: ./application/models/Loginmodel_model.php */