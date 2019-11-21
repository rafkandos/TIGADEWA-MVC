<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _internationaltrip extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('_internationaltripmodel', 'itm');
	}
	

	public function index()
	{
		$data['mp'] = $this->itm->getMP();
		$data['sch'] = $this->itm->getSCH();
		$data['internationaltrip'] = $this->itm->getinternationaltrip();
		$this->load->view('admin/internationaltrip', $data);	
	}

	//internationaltrip
	public function add()
	{
		if ($this->input->post('add')) {
            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            $this->form_validation->set_rules('ov', 'Overview', 'trim|required');
            $this->form_validation->set_rules('pre', 'Prepararation', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->itm->add() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Trip Success');
                    redirect('_internationaltrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Trip Failure');
                    redirect('_internationaltrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_internationaltrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_internationaltrip','refresh');
        }
	}

	//pricing
	public function addmp()
	{
		if ($this->input->post('add')) {
            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            $this->form_validation->set_rules('mp', 'Meeting Point', 'trim|required');
            $this->form_validation->set_rules('pr', 'Price', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->itm->addmp() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Meeting Point Success');
                    redirect('_internationaltrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Meeting Point Failure');
                    redirect('_internationaltrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_internationaltrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_internationaltrip','refresh');
        }
	}

	//schedule
	public function addsch()
	{
		if ($this->input->post('add')) {
            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            $this->form_validation->set_rules('sd', 'Schedule Date', 'trim|required');
            $this->form_validation->set_rules('sl', 'Slot', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->itm->addsch() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Schedule Success');
                    redirect('_internationaltrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Schedule Failure');
                    redirect('_internationaltrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_internationaltrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_internationaltrip','refresh');
        }
	}

	//internationaltrip
	public function update()
	{
		if ($this->input->post('update')) {
            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            $this->form_validation->set_rules('ov', 'Overview', 'trim|required');
            $this->form_validation->set_rules('pre', 'Prepararation', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->itm->update() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Trip Success');
                    redirect('_internationaltrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Trip Failure');
                    redirect('_internationaltrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_internationaltrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_internationaltrip','refresh');
        }
	}

	//pricing
	public function updatemp()
	{
		if ($this->input->post('update')) {
            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            $this->form_validation->set_rules('mp', 'Meeting Point', 'trim|required');
            $this->form_validation->set_rules('pr', 'Price', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->itm->updatemp() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Meeting Point Success');
                    redirect('_internationaltrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Meeting Point Failure');
                    redirect('_internationaltrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_internationaltrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_internationaltrip','refresh');
        }
	}

	//schedule
	public function updatesch()
	{
		if ($this->input->post('update')) {
            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            $this->form_validation->set_rules('sd', 'Schedule Date', 'trim|required');
            $this->form_validation->set_rules('sl', 'Slot', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->itm->updatesch() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Schedule Success');
                    redirect('_internationaltrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Schedule Failure');
                    redirect('_internationaltrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_internationaltrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_internationaltrip','refresh');
        }
	}

	//internationaltrip
	public function get_id_it($id_internationaltrip)
    {
        $dt = $this->itm->get_id_it($id_internationaltrip);
        echo json_encode($dt);
	}
	
	//pricing
	public function get_id_pr($id_pricing)
    {
        $dt = $this->itm->get_id_pr($id_pricing);
        echo json_encode($dt);
	}
	
	//schedule
	public function get_id_sch($id_schedule)
    {
        $dt = $this->itm->get_id_sch($id_schedule);
        echo json_encode($dt);
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
                redirect('_internationaltrip');
            }
            else{
                $update = $this->itm->upload();
                if($update == true){
                    $this->session->set_flashdata('notif_sukses', 'Upload Banner Success');
                    redirect('_internationaltrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Upload Banner Failure');
                    redirect('_internationaltrip');
                }
                redirect('_internationaltrip');
            }      
	}
	
	//internationaltrip
	public function delete($id_internationaltrip)
	{
		if ($this->itm->delete($id_internationaltrip) == true) {
			$this->session->set_flashdata('notif_sukses', 'Deleted Successfull');
        	redirect('_internationaltrip', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_internationaltrip', 'refresh');
        }
	}

	//pricing
	public function deletemp($id_pricing)
	{
		if ($this->itm->deletepr($id_pricing) == true) {
			$this->session->set_flashdata('notif_sukses', 'Delete Successfull');
        	redirect('_internationaltrip', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_internationaltrip', 'refresh');
        }
	}

	//schedule
	public function deletesch($id_schedule)
	{
		if ($this->itm->deletesch($id_schedule) == true) {
			$this->session->set_flashdata('notif_sukses', 'Delete Successfull');
        	redirect('_internationaltrip', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_internationaltrip', 'refresh');
        }
	}

}

/* End of file _internationaltrip.php */
/* Location: ./application/controllers/_internationaltrip.php */