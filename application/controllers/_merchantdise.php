<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller _merchantdise
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

class _merchantdise extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') != true) {
			redirect('Login','refresh');
		}
    $this->load->model('_merchantdisemodel', 'mm');
  }

  public function index()
  {
    $data['merchant'] = $this->mm->getMerchantdise();
    $this->load->view('admin/merchantdise', $data);
    
  }

    public function add()
	{
		if ($this->input->post('add')) {
            $this->form_validation->set_rules('mn', 'Merchantdise Name', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->mm->add() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Merchantdise Success');
                    redirect('_merchantdise');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Merchantdise Failure');
                    redirect('_merchantdise');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_merchantdise','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_merchantdise','refresh');
        }
    }
  
    public function upload()
    {
		    $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZqwertyuioplkjhgfdsazxcvbnm';
        $name = substr(str_shuffle($permitted_chars), 0, 16);

            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = '*';
            $config['max_size']  = '10000';
            $config['max_width']  = '102400';
			      $config['max_height']  = '76800';
			      $config['file_name'] = $name;
            
            $this->load->library('upload', $config);
            
            if ( !$this->upload->do_upload('banner')){
                $this->session->set_flashdata('notif_gagal', $this->upload->display_errors());
                redirect('_merchantdise');
            }
            else{
                $update = $this->mm->upload();
                if($update == true){
                    $this->session->set_flashdata('notif_sukses', 'Upload Photo Success');
                    redirect('_merchantdise');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Upload Photo Failure');
                    redirect('_merchantdise');
                }
                redirect('_merchantdise');
            }      
  }
  
  public function update()
	{
		if ($this->input->post('update')) {
            $this->form_validation->set_rules('mn', 'Merchantdise Name', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->mm->update() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Partnership Success');
                    redirect('_merchantdise');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Partnership Failure');
                    redirect('_merchantdise');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_merchantdise','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_merchantdise','refresh');
        }
	}

	public function get_id_ot($id_merchantdise)
    {
        $dt = $this->mm->get_id_ot($id_merchantdise);
        echo json_encode($dt);
  }
  
  public function delete($id_merchantdise)
	{
		if ($this->mm->delete($id_merchantdise) == true) {
			$this->session->set_flashdata('notif_sukses', 'Deleted Successfull');
        	redirect('_merchantdise', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_merchantdise', 'refresh');
        }
	}

}


/* End of file _merchantdise.php */
/* Location: ./application/controllers/_merchantdise.php */