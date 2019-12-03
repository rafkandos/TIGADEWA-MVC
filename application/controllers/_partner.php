<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller _partner
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @parpm     ...
 * @return    ...
 *
 */

class _partner extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('_partnermodel', 'pm');
    
  }

  public function index()
  {
    $data['partner'] = $this->pm->getPartner();
    $this->load->view('admin/partner', $data);
  }

  public function add()
	{
		if ($this->input->post('add')) {
            $this->form_validation->set_rules('pn', 'Partner Npme', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->pm->add() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Partnership Success');
                    redirect('_partner');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Partnership Failure');
                    redirect('_partner');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_partner','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_partner','refresh');
        }
  }
  
  public function upload()
    {
		    $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZqwertyuioplkjhgfdsazxcvbnm';
        $npm = substr(str_shuffle($permitted_chars), 0, 16);

            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '10000';
            $config['max_width']  = '102400';
			      $config['max_height']  = '76800';
			      $config['file_npme'] = $npm;
            
            $this->load->library('upload', $config);
            
            if ( !$this->upload->do_upload('banner')){
                $this->session->set_flashdata('notif_gagal', $this->upload->display_errors());
                redirect('_partner');
            }
            else{
                $update = $this->pm->upload();
                if($update == true){
                    $this->session->set_flashdata('notif_sukses', 'Upload Photo Success');
                    redirect('_partner');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Upload Photo Failure');
                    redirect('_partner');
                }
                redirect('_partner');
            }      
  }
  
  public function update()
	{
		if ($this->input->post('update')) {
            $this->form_validation->set_rules('pn', 'Partnership Npme', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->pm->update() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Partnership Success');
                    redirect('_partner');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Partnership Failure');
                    redirect('_partner');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_partner','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_partner','refresh');
        }
	}

	public function get_id_ot($id_partner)
    {
        $dt = $this->pm->get_id_ot($id_partner);
        echo json_encode($dt);
  }
  
  public function delete($id_partner)
	{
		if ($this->pm->delete($id_partner) == true) {
			$this->session->set_flashdata('notif_sukses', 'Deleted Successfull');
        	redirect('_partner', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_partner', 'refresh');
        }
	}

}


/* End of file _partner.php */
/* Location: ./application/controllers/_partner.php */