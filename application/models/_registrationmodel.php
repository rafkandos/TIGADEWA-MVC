<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _registrationmodel extends CI_Model {

	public function get_register()
	{
		return $this->db->join('pricing', 'pricing.id_pricing = register.id_pricing')
						->join('schedule', 'schedule.id_schedule = register.id_schedule' )
						->get('register')->result();
	}

	public function get_register_by_id($id_register)
	{
		return $this->db->join('pricing', 'pricing.id_pricing = register.id_pricing')
						->join('schedule', 'schedule.id_schedule = register.id_schedule' )
						->join('opentrip', 'opentrip.id_opentrip = register.id_opentrip')
						->join('privatetrip', 'privatetrip.id_privatetrip = register.id_privatetrip')
						->join('internationaltrip', 'internationaltrip.id_internationaltrip = register.id_internationaltrip')
						->where('id_register', $id_register)
						->get('register')->result();
	}

	public function updatePembayaran()
	{
		$data = array(
            'status'	=> $this->input->post('status') 
        );

        $this->db->where('id_register', $this->input->post('id_register'))
                 ->update('register', $data);
        
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
	}

	public function delete($id_register)
	{
		$this->db->where('id_register', $id_register)
				 ->delete('register');
		
		if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
	}

}

/* End of file _registrationmodel.php */
/* Location: ./application/models/_registrationmodel.php */