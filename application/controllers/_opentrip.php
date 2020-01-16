<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _opentrip extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
        $this->load->model('_opentripmodel', 'otm');
        if ($this->session->userdata('logged_in') != true) {
            redirect('Login','refresh');
        }
	}
	

	public function index()
	{
		$data['mp'] = $this->otm->getMP();
		$data['sch'] = $this->otm->getSCH();
		$data['opentrip'] = $this->otm->getOpenTrip();
		$this->load->view('admin/opentrip', $data);	
    }
    
    public function itinerary($id_opentrip)
    {
        $data['itinerary'] = $this->otm->getITE($id_opentrip);
        $this->load->view('admin/i_opentrip', $data);

        $data = array(
            'idot' => $id_opentrip
        );
        $this->session->set_userdata( $data );
        
    }

    public function addit()
    {
        if ($this->input->post('add')) {
            // $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            // $this->form_validation->set_rules('ov', 'Overview', 'trim|required');
            // $this->form_validation->set_rules('pre', 'Prepararation', 'trim|required');
            // if ($this->form_validation->run() == true) {
                if ($this->otm->updateit() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Itinerary Success');
                    redirect('_opentrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Itinerary Failure');
                    redirect('_opentrip');
                    
                }
            // } else {
            //     $this->session->set_flashdata('notif_gagal', validation_errors());
            //     redirect('https://www.google.com/','refresh');   
            // }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_opentrip','refresh');
        }
    }

	//opentrip
	public function add()
	{
		if ($this->input->post('add')) {

            $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZqwertyuioplkjhgfdsazxcvbnm';
            $nam = substr(str_shuffle($permitted_chars), 0, 16);

            $config['upload_path'] = './assets/uploads/document/';
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']  = '10000';
            $config['max_width']  = '102400';
            $config['max_height']  = '76800';
            $config['file_name'] = $nam;
            
            $this->load->library('upload', $config);

            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            $this->form_validation->set_rules('ov', 'Overview', 'trim|required');
            $this->form_validation->set_rules('pre', 'Prepararation', 'trim|required');
            
            if ( !$this->upload->do_upload('document')){
                $this->session->set_flashdata('notif_gagal', $this->upload->display_errors());
                redirect('_opentrip');
            }
            else{
                $add = $this->otm->add();
                if($add == true){
                    $this->session->set_flashdata('notif_sukses', 'Add Trip Success');
                    redirect('_opentrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Trip Failure');
                    redirect('_opentrip');
                }
                redirect('_opentrip');
            }

        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_opentrip','refresh');
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
                if ($this->otm->addmp() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Meeting Point Success');
                    redirect('_opentrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Meeting Point Failure');
                    redirect('_opentrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_opentrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_opentrip','refresh');
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
                if ($this->otm->addsch() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Schedule Success');
                    redirect('_opentrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Schedule Failure');
                    redirect('_opentrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_opentrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_opentrip','refresh');
        }
	}

	//opentrip
	public function update()
	{
		if ($this->input->post('update')) {
            $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZqwertyuioplkjhgfdsazxcvbnm';
            $nam = substr(str_shuffle($permitted_chars), 0, 16);

            $config['upload_path'] = './assets/uploads/document/';
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size']  = '10000';
            $config['max_width']  = '102400';
            $config['max_height']  = '76800';
            $config['file_name'] = $nam;
            
            $this->load->library('upload', $config);

            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            $this->form_validation->set_rules('ov', 'Overview', 'trim|required');
            $this->form_validation->set_rules('pre', 'Prepararation', 'trim|required');
            
            if ( !$this->upload->do_upload('doc')){
                $this->session->set_flashdata('notif_gagal', $this->upload->display_errors());
                redirect('_opentrip');
            }
            else{
                $update = $this->otm->update();
                if($update == true){
                    $this->session->set_flashdata('notif_sukses', 'Edit Trip Success');
                    redirect('_opentrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Trip Failure');
                    redirect('_opentrip');
                    
                }
                redirect('_opentrip');
            }

        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_opentrip','refresh');
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
                if ($this->otm->updatemp() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Trip Success');
                    redirect('_opentrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Trip Failure');
                    redirect('_opentrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_opentrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_opentrip','refresh');
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
                if ($this->otm->updatesch() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Schedule Success');
                    redirect('_opentrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Schedule Failure');
                    redirect('_opentrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_opentrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_opentrip','refresh');
        }
	}

	//opentrip
	public function get_id_ot($id_opentrip)
    {
        $dt = $this->otm->get_id_ot($id_opentrip);
        echo json_encode($dt);
	}
	
	//pricing
	public function get_id_pr($id_pricing)
    {
        $dt = $this->otm->get_id_pr($id_pricing);
        echo json_encode($dt);
	}
	
	//schedule
	public function get_id_sch($id_schedule)
    {
        $dt = $this->otm->get_id_sch($id_schedule);
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
                redirect('_opentrip');
            }
            else{
                $update = $this->otm->upload();
                if($update == true){
                    $this->session->set_flashdata('notif_sukses', 'Upload Banner Success');
                    redirect('_opentrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Upload Banner Failure');
                    redirect('_opentrip');
                }
                redirect('_opentrip');
            }      
	}
	
	//opentrip
	public function delete($id_opentrip)
	{
		if ($this->otm->delete($id_opentrip) == true) {
			$this->session->set_flashdata('notif_sukses', 'Deleted Successfull');
        	redirect('_opentrip', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_opentrip', 'refresh');
        }
	}

	//pricing
	public function deletemp($id_pricing)
	{
		if ($this->otm->deletepr($id_pricing) == true) {
			$this->session->set_flashdata('notif_sukses', 'Delete Successfull');
        	redirect('_opentrip', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_opentrip', 'refresh');
        }
	}

	//schedule
	public function deletesch($id_schedule)
	{
		if ($this->otm->deletesch($id_schedule) == true) {
			$this->session->set_flashdata('notif_sukses', 'Delete Successfull');
        	redirect('_opentrip', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_opentrip', 'refresh');
        }
	}

}

/* End of file _opentrip.php */
/* Location: ./application/controllers/_opentrip.php */