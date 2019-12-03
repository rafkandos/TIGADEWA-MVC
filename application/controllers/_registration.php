<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _registration extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') != true) {
			redirect('Login','refresh');
		}
		$this->load->model('_registrationmodel');
	}

	public function index()
	{
		$data['register'] = $this->_registrationmodel->get_register();
		$this->load->view('admin/register', $data);
	}

	public function detail($id_register)
	{
		$data['reg'] = $this->_registrationmodel->get_register_by_id($id_register);
		$this->load->view('admin/detail', $data);
		$array = array(
			'id_register' => $id_register
		);
			
		$this->session->set_userdata( $array );
	}

	public function get_id_register($id_register)
    {
        $data_reg = $this->_registrationmodel->get_register_by_id($id_register);
        echo json_encode($data_reg);
	}
	
	public function updatePembayaran()
	{
		if ($this->_registrationmodel->updatePembayaran() == TRUE){
        	$this->session->set_flashdata('notif_sukses', 'Payment Updated');
        	redirect('_registration/detail/'.$this->session->userdata('id_register') , 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Payment Update Unsuccessfull');
        	redirect('_registration/detail/'.$this->session->userdata('id_register') , 'refresh');
        }
	}

	public function delete($id_register)
	{
		if ($this->_registrationmodel->delete($id_register) == true) {
			$this->session->set_flashdata('notif_sukses', 'Deleted Successfull');
        	redirect('_registration', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_registration', 'refresh');
        }
	}

}

/* End of file _registration.php */
/* Location: ./application/controllers/_registration.php */