<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller InternationalTrip
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class InternationalTrip extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('user/internationaltrip');
  }

  public function detail()
  {
    $this->load->view('user/detail');
  }

}


/* End of file InternationalTrip.php */
/* Location: ./application/controllers/InternationalTrip.php */