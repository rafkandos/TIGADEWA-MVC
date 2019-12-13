<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') != true) {
			redirect('Login','refresh');
		}
		$this->load->model('Admin_model', 'am');
		
	}

	public function index()
	{
		$data['about'] = $this->am->getAbout();
        $data['poptrip'] = $this->am->getPopTrip();
        $data['gallery'] = $this->am->getGallery();
		$this->load->view('admin/dashboard', $data);
	}

	public function update()
	{
		if ($this->input->post('update')) {
            $this->form_validation->set_rules('visi', 'Visi', 'trim|required');
            $this->form_validation->set_rules('misi', 'Misi', 'trim|required');
            $this->form_validation->set_rules('layanan', 'Layanan', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->am->update() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit About Success');
                    redirect('Admin');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit About Failure');
                    redirect('Admin');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('Admin','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('Admin','refresh');
        }
	}

    //poptrip
    public function addpt()
    {
        if ($this->input->post('add')) {
            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->am->addpt() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Popular Trip Success');
                    redirect('Admin');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Popular Trip Failure');
                    redirect('Admin');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('Admin','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('Admin','refresh');
        }
    }

    //updatepoptrip
    public function updatept()
    {
        if ($this->input->post('update')) {
            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->am->updatept() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Popular Trip Success');
                    redirect('Admin');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Popular Trip Failure');
                    redirect('Admin');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('Admin','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('Admin','refresh');
        }
    }

    //poptrip
    public function delete($id_poptrip)
    {
        if ($this->am->delete($id_poptrip) == true) {
            $this->session->set_flashdata('notif_sukses', 'Deleted Successfull');
            redirect('Admin', 'refresh');
            // redirect('regist/detail/'.$this->session->userdssaa('id_regist') , 'refresh');
        } else {
            $this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
            redirect('Admin', 'refresh');
        }
    }

	public function get_id_ot($id_about)
    {
        $dt = $this->am->get_id_ot($id_about);
        echo json_encode($dt);
	}

    public function get_id_pt($id_poptrip)
    {
        $dt = $this->am->get_id_pt($id_poptrip);
        echo json_encode($dt);
    }

	public function logout()
    {
        $data = array(
            'id_admin'    => "",
			'username'    => "",
			'adminName'	  => "",
            'logged_in'   => false
        );
        
        $this->session->unset_userdata('$data');
        $this->session->sess_destroy();
        redirect('admin');
    }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */