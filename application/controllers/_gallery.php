<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('_gallerymodel', 'gm');
	}

	public function index()
	{
		$data['gallery'] = $this->gm->getGallery();
		$this->load->view('admin/gallery', $data);
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
                redirect('_gallery');
            }
            else{
                $update = $this->gm->upload();
                if($update == true){
                    $this->session->set_flashdata('notif_sukses', 'Upload Banner Success');
                    redirect('_gallery');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Upload Banner Failure');
                    redirect('_gallery');
                }
                redirect('_gallery');
            }      
	}

	//opentrip
	public function add()
	{
		if ($this->input->post('add')) {
            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            $this->form_validation->set_rules('td', 'Trip Date', 'trim|required');
            $this->form_validation->set_rules('ye', 'Year', 'trim|required');
            $this->form_validation->set_rules('dt', 'Detail', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->gm->add() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Add Gallery Success');
                    redirect('_gallery');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Add Gallery Failure');
                    redirect('_gallery');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_gallery','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_gallery','refresh');
        }
	}

	public function update()
	{
		if ($this->input->post('update')) {
            $this->form_validation->set_rules('tn', 'Trip Name', 'trim|required');
            $this->form_validation->set_rules('td', 'Trip Date', 'trim|required');
            $this->form_validation->set_rules('ye', 'Year', 'trim|required');
            $this->form_validation->set_rules('dt', 'Detail', 'trim|required');
            
            if ($this->form_validation->run() == true) {
                if ($this->gm->update() == true) {
                    $this->session->set_flashdata('notif_sukses', 'Edit Gallery Success');
                    redirect('_gallery');
                } else {
                    $this->session->set_flashdata('notif_gagal', 'Edit Gallery Failure');
                    redirect('_gallery');
                    
                }
            } else {
                $this->session->set_flashdata('notif_gagal', validation_errors());
                redirect('_gallery','refresh');   
            }
        } else {
            $this->session->set_flashdata('notif_gagal', validation_errors());
            redirect('_gallery','refresh');
        }
	}

	public function get_id_ot($id_gallery)
    {
        $dt = $this->gm->get_id_ot($id_gallery);
        echo json_encode($dt);
	}

	public function delete($id_gallery)
	{
		if ($this->gm->delete($id_gallery) == true) {
			$this->session->set_flashdata('notif_sukses', 'Deleted Successfull');
        	redirect('_gallery', 'refresh');
            // redirect('regist/detail/'.$this->session->userdata('id_regist') , 'refresh');
        } else {
        	$this->session->set_flashdata('notif_gagal', 'Delete Unsuccessfull');
        	redirect('_gallery', 'refresh');
        }
	}

}

/* End of file _gallery.php */
/* Location: ./application/controllers/_gallery.php */