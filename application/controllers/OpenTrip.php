<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller OpenTrip
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

class OpenTrip extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->library('form_validation');
    $this->load->model('OpenTrip_model');
  }

  public function index()
  {
    $data['opentrip'] = $this->OpenTrip_model->get_opentrip();
    $this->load->view('user/opentrip', $data);
  }

  public function detail($id_opentrip)
  {
    $data['price'] = $this->OpenTrip_model->get_price($id_opentrip);
    $data['schedule'] = $this->OpenTrip_model->get_schedule($id_opentrip);
    $data['detail'] = $this->OpenTrip_model->get_detail($id_opentrip);
    $this->load->view('user/opentrip_detail', $data);
    $array = array(
      'id_opentrip' => $id_opentrip
    );
    
    $this->session->set_userdata( $array );
  }

  public function registrasi()
  {
    if ($this->input->post('submit')) {
      $this->form_validation->set_rules('selitem', 'Selected Meeting Piont', 'trim|required');
      $this->form_validation->set_rules('schedule', 'Schedule', 'trim|required');
      $this->form_validation->set_rules('fullname', 'Fullname', 'trim|required');
      $this->form_validation->set_rules('idno', 'Identity Number', 'trim|required');
      $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
      $this->form_validation->set_rules('country', 'Country', 'trim|required');
      $this->form_validation->set_rules('province', 'Province', 'trim');
      $this->form_validation->set_rules('city', 'City', 'trim');
      $this->form_validation->set_rules('address', 'Full Address', 'trim|required');
      $this->form_validation->set_rules('email', 'Email', 'trim|required');
      $this->form_validation->set_rules('tees_size', 'Tees Size', 'trim|required');
      $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
      $this->form_validation->set_rules('emergency_contact', 'Emergency Contact', 'trim|required');
      $this->form_validation->set_rules('booking_code', 'Booking Code', 'trim|required');

      if ($this->form_validation->run() == TRUE) {
        if ($this->OpenTrip_model->register() == TRUE){
          $this->session->set_flashdata('notif_sukses', 'Registration Successfully');
          $urlwa = 'https://api.whatsapp.com/send?phone=6281216012160&text=Hi%2C%20TigaDewaAdventure.%20Iam%20'.$this->input->post('fullname').'%20I%20want%20to%20confirm%20that%20I%20have%20been%20registration%20and%20booking%20code%20is%20'.$this->input->post('booking_code').'.%20Thanks';
          // redirect($urlwa, 'refresh');
            redirect('opentrip/detail/'.$this->session->userdata('id_opentrip') , 'refresh');
        } else {
          $this->session->set_flashdata('notif_gagal', 'Registration Unsuccessfull');
          redirect('opentrip/detail/'.$this->session->userdata('id_opentrip') , 'refresh');
        }
      } else {
        $this->session->set_flashdata('notif_gagal', validation_errors());
        redirect('opentrip/detail/'.$this->session->userdata('id_opentrip') , 'refresh');
      }
    } else {
      $this->session->set_flashdata('notif_gagal', validation_errors());
      redirect('opentrip/detail/'.$this->session->userdata('id_opentrip') , 'refresh');
    }
  }

}


/* End of file OpenTrip.php */
/* Location: ./application/controllers/OpenTrip.php */