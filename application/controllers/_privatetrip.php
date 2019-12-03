<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _privatetrip extends CI_Controller {

	
	public function __construct()
	{
        parent::__construct();
        if ($this->session->userdata('logged_in') != true) {
			redirect('Login','refresh');
		}
		$this->load->model('_privatetripmodel', 'ptm');
	}
	

	public function index()
	{
		$data['mp'] = $this->ptm->getMP();
		$data['sch'] = $this->ptm->getSCH();
		$data['privatetrip'] = $this->ptm->getprivatetrip();
		$this->load->view('admin/privatetrip', $data);	
	}

    public function itinerary($id_privatetrip)
    {
        $data['itinerary'] = $this->ptm->getITE($id_privatetrip);
        $this->load->view('admin/i_privatetrip', $data);

        $data = array(
            'idit' => $id_privatetrip
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
                if ($this->ptm->updateit() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Itinerary Success');
                    redirect('_privatetrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Itinerary Failure');
                    redirect('_privatetrip');
                    
                }
            // } else {
            //     $this->session->set_flashdata('notif_gagal', validation_errors());
            //     redirect('https://www.google.com/','refresh');   
            // }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_privatetrip','refresh');
        }
    }

	//privatetrip
	public function add()
	{
		if ($this->input->post('add')) {
            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            $this->form_validation->set_rules('ov', 'Overview', 'trim|required');
            $this->form_validation->set_rules('pre', 'Prepararation', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->ptm->add() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Trip Success');
                    redirect('_privatetrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Trip Failure');
                    redirect('_privatetrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_privatetrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_privatetrip','refresh');
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
                if ($this->ptm->addmp() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Meeting Point Success');
                    redirect('_privatetrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Meeting Point Failure');
                    redirect('_privatetrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_privatetrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_privatetrip','refresh');
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
                if ($this->ptm->addsch() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Schedule Success');
                    redirect('_privatetrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Schedule Failure');
                    redirect('_privatetrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_privatetrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_privatetrip','refresh');
        }
	}

	//privatetrip
	public function update()
	{
		if ($this->input->post('update')) {
            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            $this->form_validation->set_rules('ov', 'Overview', 'trim|required');
            $this->form_validation->set_rules('pre', 'Prepararation', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->ptm->update() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Trip Success');
                    redirect('_privatetrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Trip Failure');
                    redirect('_privatetrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_privatetrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_privatetrip','refresh');
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
                if ($this->ptm->updatemp() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Meeting Point Success');
                    redirect('_privatetrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Meeting Point Failure');
                    redirect('_privatetrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_privatetrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_privatetrip','refresh');
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
                if ($this->ptm->updatesch() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Schedule Success');
                    redirect('_privatetrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Schedule Failure');
                    redirect('_privatetrip');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_privatetrip','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_privatetrip','refresh');
        }
	}

	//privatetrip
	public function get_id_pt($id_privatetrip)
    {
        $dt = $this->ptm->get_id_pt($id_privatetrip);
        echo json_encode($dt);
	}
	
	//pricing
	public function get_id_pr($id_pricing)
    {
        $dt = $this->ptm->get_id_pr($id_pricing);
        echo json_encode($dt);
	}
	
	//schedule
	public function get_id_sch($id_schedule)
    {
        $dt = $this->ptm->get_id_sch($id_schedule);
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
                redirect('_privatetrip');
            }
            else{
                $update = $this->ptm->upload();
                if($update == true){
                    $this->session->set_flashdata('notif_sukses', 'Upload Banner Success');
                    redirect('_privatetrip');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Upload Banner Failure');
                    redirect('_privatetrip');
                }
                redirect('_privatetrip');
            }      
	}
	
	//privatetrip
	public function delete($id_privatetrip)
	{
		if ($this->ptm->delete($id_privatetrip) == true) {
			$this->session->set_flashdata('notif_sukses', 'Deleted Successfull');
        	redirect('_privatetrip', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_privatetrip', 'refresh');
        }
	}

	//pricing
	public function deletemp($id_pricing)
	{
		if ($this->ptm->deletepr($id_pricing) == true) {
			$this->session->set_flashdata('notif_sukses', 'Delete Successfull');
        	redirect('_privatetrip', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_privatetrip', 'refresh');
        }
	}

	//schedule
	public function deletesch($id_schedule)
	{
		if ($this->ptm->deletesch($id_schedule) == true) {
			$this->session->set_flashdata('notif_sukses', 'Delete Successfull');
        	redirect('_privatetrip', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_privatetrip', 'refresh');
        }
	}

}

/* End of file _privatetrip.php */
/* Location: ./application/controllers/_privatetrip.php */