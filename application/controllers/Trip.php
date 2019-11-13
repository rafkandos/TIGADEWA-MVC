<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Trip extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {

  }

  public function openTrip()
  {
    
  }

  public function privateTrip()
  {
    
  }

  public function internationalTrip()
  {
    
  }

  public function detail()
  {
    $this->load->view('user/detail');
  }

}


/* End of file Trip.php */
/* Location: ./application/controllers/Trip.php */