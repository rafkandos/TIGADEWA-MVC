<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller _guides
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

class _guides extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('_guidesmodel', 'gm');
    
  }

  public function index()
  {
    $data['guides'] = $this->gm->getGuides();
    $this->load->view('admin/guides', $data);
  }

  public function add()
	{
		if ($this->input->post('add')) {
            $this->form_validation->set_rules('gn', 'Guides Name', 'trim|required');
            $this->form_validation->set_rules('jb', 'Jabatan', 'trim|required');
            $this->form_validation->set_rules('cp', 'Caption', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->gm->add() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Guides Success');
                    redirect('_guides');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Guides Failure');
                    redirect('_guides');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_guides','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_guides','refresh');
        }
  }
  
  public function upload()
    {
		    $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZqwertyuioplkjhgfdsazxcvbnm';
        $nam = substr(str_shuffle($permitted_chars), 0, 16);

            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '10000';
            $config['max_width']  = '102400';
			      $config['max_height']  = '76800';
			      $config['file_name'] = $nam;
            
            $this->load->library('upload', $config);
            
            if ( !$this->upload->do_upload('banner')){
                $this->session->set_flashdata('notif_gagal', $this->upload->display_errors());
                redirect('_guides');
            }
            else{
                $update = $this->gm->upload();
                if($update == true){
                    $this->session->set_flashdata('notif_sukses', 'Upload Photo Success');
                    redirect('_guides');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Upload Photo Failure');
                    redirect('_guides');
                }
                redirect('_guides');
            }      
  }
  
  public function update()
	{
		if ($this->input->post('update')) {
            $this->form_validation->set_rules('gn', 'Guides Name', 'trim|required');
            $this->form_validation->set_rules('jb', 'Jabatan', 'trim|required');
            $this->form_validation->set_rules('cp', 'Caption', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->gm->update() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Guides Success');
                    redirect('_guides');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Guides Failure');
                    redirect('_guides');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_guides','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_guides','refresh');
        }
	}

	public function get_id_ot($id_guides)
    {
        $dt = $this->gm->get_id_ot($id_guides);
        echo json_encode($dt);
  }
  
  public function delete($id_guides)
	{
		if ($this->gm->delete($id_guides) == true) {
			$this->session->set_flashdata('notif_sukses', 'Deleted Successfull');
        	redirect('_guides', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_guides', 'refresh');
        }
	}

}


/* End of file _guides.php */
/* Location: ./application/controllers/_guides.php */