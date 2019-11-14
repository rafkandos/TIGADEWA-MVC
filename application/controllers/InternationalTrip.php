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
    $this->load->model('InternationalTrip_model');
  }

  public function index()
  {
    $data['internationaltrip'] = $this->InternationalTrip_model->get_internationaltrip();
    $this->load->view('user/internationaltrip', $data);
  }

  public function detail($id_internationaltrip)
  {
    $data['price'] = $this->InternationalTrip_model->get_price($id_internationaltrip);
    $data['schedule'] = $this->InternationalTrip_model->get_schedule($id_internationaltrip);
    $data['sch'] = $this->InternationalTrip_model->get_sch($id_internationaltrip);
    $data['detail'] = $this->InternationalTrip_model->get_detail($id_internationaltrip);
    $this->load->view('user/internationaltrip_detail', $data);
    $array = array(
      'id_internationaltrip' => $id_internationaltrip
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
      $this->form_validation->set_rules('region', 'Region', 'trim|required');
      $this->form_validation->set_rules('province', 'Province', 'trim');
      $this->form_validation->set_rules('city', 'City', 'trim');
      $this->form_validation->set_rules('address', 'Full Address', 'trim|required');
      $this->form_validation->set_rules('email', 'Email', 'trim|required');
      $this->form_validation->set_rules('tees_size', 'Tees Size', 'trim|required');
      $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
      $this->form_validation->set_rules('emergency_contact', 'Emergency Contact', 'trim|required');
      $this->form_validation->set_rules('booking_code', 'Booking Code', 'trim|required');

      if ($this->form_validation->run() == TRUE) {
        if ($this->InternationalTrip_model->register() == TRUE){
          $this->session->set_flashdata('notif_sukses', 'Registration Successfully');
          $urlwa = 'https://api.whatsapp.com/send?phone=6281216012160&text=Hi%2C%20Admin%20TigaDewa.%20Saya%20'.$this->input->post('fullname').'%20ingin%20konfirmasi%20pemesanan%20dengan%20kode%20booking%20'.$this->input->post('booking_code').'%2C%20Terima%20kasih.';
          redirect($urlwa, 'refresh');
            // redirect('internationaltrip/detail/'.$this->session->userdata('id_internationaltrip') , 'refresh');
        } else {
          $this->session->set_flashdata('notif_gagal', 'Registration Unsuccessfull');
          redirect('internationaltrip/detail/'.$this->session->userdata('id_internationaltrip') , 'refresh');
        }
      } else {
        $this->session->set_flashdata('notif_gagal', validation_errors());
        redirect('internationaltrip/detail/'.$this->session->userdata('id_internationaltrip') , 'refresh');
      }
    } else {
      $this->session->set_flashdata('notif_gagal', validation_errors());
      redirect('internationaltrip/detail/'.$this->session->userdata('id_internationaltrip') , 'refresh');
    }
  }

}


/* End of file InternationalTrip.php */
/* Location: ./application/controllers/InternationalTrip.php */