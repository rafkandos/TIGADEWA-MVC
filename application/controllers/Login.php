<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Login
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

class Login extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Loginmodel', 'lm');
    $this->load->library('session');
    
  }

  public function index()
  {
    $this->load->view('admin/login');
  }

  public function do_login()
  {
    if ($this->input->post('login')) {
      $this->form_validation->set_rules('username', 'Username', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == true) {
          if ($this->lm->login() == true) {
            redirect('Admin', 'refresh');
          } else{
            $this->session->set_flashdata('notif_gagal', 'Username atau Password salah!');
            redirect('Login', 'refresh');
          }
        } else {
          $this->session->set_flashdata('notif_gagal', validation_errors());
          redirect('Login', 'refresh');
        }
    } else {
          $this->session->set_flashdata('notif_gagal', validation_errors());
          redirect('Login', 'refresh');
        }
  }

}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */