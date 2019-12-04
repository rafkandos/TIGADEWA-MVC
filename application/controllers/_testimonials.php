<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller _testimonials
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

class _testimonials extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') != true) {
			redirect('Login','refresh');
    }
    $this->load->model('_testimonialsmodel', 'tm');
    
  }

  public function index()
  {
    $data['testi'] = $this->tm->getTesti();
    $this->load->view('admin/testimonials', $data);
  }

  public function add()
	{
		if ($this->input->post('add')) {
            $this->form_validation->set_rules('cn', 'Customer Name', 'trim|required');
            $this->form_validation->set_rules('cp', 'Caption', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->tm->add() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Testimonials Success');
                    redirect('_testimonials');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Testimonials Failure');
                    redirect('_testimonials');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_testimonials','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_testimonials','refresh');
        }
    }
  
    public function upload()
    {
		    $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZqwertyuioplkjhgfdsazxcvbnm';
        $name = substr(str_shuffle($permitted_chars), 0, 16);

            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '10000';
            $config['max_width']  = '102400';
			      $config['max_height']  = '76800';
			      $config['file_name'] = $name;
            
            $this->load->library('upload', $config);
            
            if ( !$this->upload->do_upload('banner')){
                $this->session->set_flashdata('notif_gagal', $this->upload->display_errors());
                redirect('_testimonials');
            }
            else{
                $update = $this->tm->upload();
                if($update == true){
                    $this->session->set_flashdata('notif_sukses', 'Upload Photo Success');
                    redirect('_testimonials');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Upload Photo Failure');
                    redirect('_testimonials');
                }
                redirect('_testimonials');
            }      
  }
  
  public function update()
	{
		if ($this->input->post('update')) {
            $this->form_validation->set_rules('cn', 'Customer Name', 'trim|required');
            $this->form_validation->set_rules('cp', 'Caption', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->tm->update() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Testimonials Success');
                    redirect('_testimonials');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Testimonials Failure');
                    redirect('_testimonials');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_testimonials','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_testimonials','refresh');
        }
	}

	public function get_id_ot($id_testimonials)
    {
        $dt = $this->tm->get_id_ot($id_testimonials);
        echo json_encode($dt);
  }
  
  public function delete($id_testimonials)
	{
		if ($this->tm->delete($id_testimonials) == true) {
			$this->session->set_flashdata('notif_sukses', 'Deleted Successfull');
        	redirect('_testimonials', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_testimonials', 'refresh');
        }
	}

}


/* End of file _testimonials.php */
/* Location: ./application/controllers/_testimonials.php */