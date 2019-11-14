<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller PrivateTrip
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

class PrivateTrip extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('PrivateTrip_model');
  }

  public function index()
  {
    $data['privatetrip'] = $this->PrivateTrip_model->get_privatetrip();
    $this->load->view('user/privatetrip', $data);
  }

  public function detail($id_privatetrip)
  {
    $data['price'] = $this->PrivateTrip_model->get_price($id_privatetrip);
    $data['schedule'] = $this->PrivateTrip_model->get_schedule($id_privatetrip);
    $data['sch'] = $this->PrivateTrip_model->get_sch($id_privatetrip);
    $data['detail'] = $this->PrivateTrip_model->get_detail($id_privatetrip);
    $this->load->view('user/privatetrip_detail', $data);
    $array = array(
      'id_privatetrip' => $id_privatetrip
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
        if ($this->PrivateTrip_model->register() == TRUE){
          $this->session->set_flashdata('notif_sukses', 'Registration Successfully');
          $urlwa = 'https://api.whatsapp.com/send?phone=6281216012160&text=Hi%2C%20Admin%20TigaDewa.%20Saya%20'.$this->input->post('fullname').'%20ingin%20konfirmasi%20pemesanan%20dengan%20kode%20booking%20'.$this->input->post('booking_code').'%2C%20Terima%20kasih.';
          redirect($urlwa, 'refresh');
            // redirect('privatetrip/detail/'.$this->session->userdata('id_privatetrip') , 'refresh');
        } else {
          $this->session->set_flashdata('notif_gagal', 'Registration Unsuccessfull');
          redirect('privatetrip/detail/'.$this->session->userdata('id_privatetrip') , 'refresh');
        }
      } else {
        $this->session->set_flashdata('notif_gagal', validation_errors());
        redirect('privatetrip/detail/'.$this->session->userdata('id_privatetrip') , 'refresh');
      }
    } else {
      $this->session->set_flashdata('notif_gagal', validation_errors());
      redirect('privatetrip/detail/'.$this->session->userdata('id_privatetrip') , 'refresh');
    }
  }

}


/* End of file PrivateTrip.php */
/* Location: ./application/controllers/PrivateTrip.php */