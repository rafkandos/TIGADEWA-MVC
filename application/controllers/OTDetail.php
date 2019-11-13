<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OTDetail extends CI_Controller {

	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('OpenTrip_model');
	  }

	public function index($id_opentrip)
	{
		$data['price'] = $this->OpenTrip_model->get_price($id_opentrip);
	    $data['schedule'] = $this->OpenTrip_model->get_schedule($id_opentrip);
	    $data['detail'] = $this->OpenTrip_model->get_detail($id_opentrip);
	    $this->load->view('user/opentrip_detail');
	}

	public function registrasi($id_opentrip)
	  {
	    if ($this->input->post('submit')) {
	      $this->form_validation->set_rules('selitem', 'Selected Meeting Piont', 'trim|required');
	      $this->form_validation->set_rules('schedule', 'Schedule', 'trim|required');
	      $this->form_validation->set_rules('fullname', 'Fullname', 'trim|required');
	      $this->form_validation->set_rules('idno', 'Identity Number', 'trim|required');
	      $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
	      $this->form_validation->set_rules('country', 'Country', 'trim|required');
	      $this->form_validation->set_rules('province', 'Province', 'trim|required');
	      $this->form_validation->set_rules('city', 'City', 'trim|required');
	      $this->form_validation->set_rules('address', 'Full Address', 'trim|required');
	      $this->form_validation->set_rules('email', 'Email', 'trim|required');
	      $this->form_validation->set_rules('tees_size', 'Tees Size', 'trim|required');
	      $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
	      $this->form_validation->set_rules('emergency_contact', 'Emergency Contact', 'trim|required');

	      if ($this->form_validation->run() == TRUE) {
	        if ($this->OpenTrip_model->register() == TRUE){
	          $this->session->set_flashdata('notif_sukses', 'Registration Successfully');
	          redirect('opentrip', 'refresh');
	        } else {
	          $this->session->set_flashdata('notif_gagal', 'Registration Unsuccessfull');
	          redirect('opentrip/detail/"'.$id_opentrip.'"', 'refresh');
	        }
	      } else {
	        $this->session->set_flashdata('notif_gagal', validation_errors());
	        redirect('opentrip/detail/"'.$id_opentrip.'"', 'refresh');
	      }
	    } else {
	      $this->session->set_flashdata('notif_gagal', validation_errors());
	      redirect('opentrip/detail/"'.$id_opentrip.'"', 'refresh');
	    }
	  }

}

/* End of file OTDetail.php */
/* Location: ./application/controllers/OTDetail.php */