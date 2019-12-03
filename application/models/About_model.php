<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model About_model
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

class About_model extends CI_Model {

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

  public function getPartner()
  {
    return $this->db->get('partner')->result();
    
  }

  // ------------------------------------------------------------------------

}

/* End of file About_model.php */
/* Location: ./application/models/About_model.php */