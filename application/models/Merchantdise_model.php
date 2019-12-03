<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Merchantdise_model
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

class Merchantdise_model extends CI_Model {

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

  public function getMerch()
  {
    return $this->db->get('merchantdise')->result();
    
  }

  // ------------------------------------------------------------------------

}

/* End of file Merchantdise_model.php */
/* Location: ./application/models/Merchantdise_model.php */