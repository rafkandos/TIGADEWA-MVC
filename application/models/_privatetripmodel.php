<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model _privatetripmodel_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class _privatetripmodel extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  public function getprivatetrip()
  {
    return $this->db->where('id_privatetrip !=', 11111)
                    ->get('privatetrip')->result();
    
  }

  public function getMP()
  {
    return $this->db->join('privatetrip', 'privatetrip.id_privatetrip = pricing.id_pt')
                    ->where('pricing.id_pt !=', null, false)
                    ->get('pricing')->result();
  }

  public function getSCH()
  {
    return $this->db->join('privatetrip', 'privatetrip.id_privatetrip = schedule.pt_id')
                    ->where('schedule.pt_id !=', null, false)
                    ->get('schedule')->result();
  }

  //privatetrip
  public function add()
  {
    $data = array(
      'PtripName'       => $this->input->post('tn'), 
      'overview'        => $this->input->post('ov'),
      'preparation'     => $this->input->post('pre')
    );

    return $this->db->insert('privatetrip', $data);

    if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        } 
  }

  //pricing
  public function addmp()
  {
    $data = array(
      'id_pt'           => $this->input->post('tn'), 
      'meetingPoint'    => $this->input->post('mp'),
      'price'           => $this->input->post('pr')
    );

    return $this->db->insert('pricing', $data);

    if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        } 
  }

  //schedule
  public function addsch()
  {
    $data = array(
      'pt_id'           => $this->input->post('tn'), 
      'scheduleDate'    => $this->input->post('sd'),
      'slot'            => $this->input->post('sl')
    );

    return $this->db->insert('schedule', $data);

    if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        } 
  }

  //privatetrip
  public function update()
  {
    $data = array(
      'id_privatetrip'     => $this->input->post('id_privatetrip'),
      'PtripName'       => $this->input->post('tn'), 
      'overview'        => $this->input->post('ov'),
      'preparation'     => $this->input->post('pre')
    );

    return $this->db->where('id_privatetrip', $this->input->post('id_privatetrip'))
                    ->update('privatetrip', $data);
    

    if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        } 
  }

  //pricing
  public function updatemp()
  {
    $data = array(
      'id_pt'           => $this->input->post('tn'), 
      'meetingPoint'    => $this->input->post('mp'),
      'price'           => $this->input->post('pr')
    );

    return $this->db->where('id_pricing', $this->input->post('id_pricing'))
                    ->update('pricing', $data);
    

    if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        } 
  }

  //schedule
  public function updatesch()
  {
    $data = array(
      'pt_id'           => $this->input->post('tn'), 
      'scheduleDate'    => $this->input->post('sd'),
      'slot'            => $this->input->post('sl')
    );

    return $this->db->where('id_schedule', $this->input->post('id_schedule'))
                    ->update('schedule', $data);
    

    if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        } 
  }

  //privatetrip
  public function get_id_pt($id_privatetrip)
  {
    return  $this->db->where('id_privatetrip', $id_privatetrip)
                    ->get('privatetrip')->row();
  }

  //pricing
  public function get_id_pr($id_pricing)
  {
    return  $this->db->where('id_pricing', $id_pricing)
                    ->get('pricing')->row();
  }

  //schedule
  public function get_id_sch($id_schedule)
  {
    return  $this->db->where('id_schedule', $id_schedule)
                    ->get('schedule')->row();
  }

  public function upload()
  {
    $hai = $this->upload->data('file_name');

    $data = array(
      'tripImages' => $hai
    );

    return $this->db->where('id_privatetrip', $this->input->post('id_reg'))
                    ->update('privatetrip', $data);

      if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        } 
  }

  //privatetrip
  public function delete($id_privatetrip)
	{
		$this->db->where('id_privatetrip', $id_privatetrip)
				    ->delete('privatetrip');
		
		if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
  }
  
  //pricing
  public function deletepr($id_pricing)
	{
		$this->db->where('id_pricing', $id_pricing)
				    ->delete('pricing');
		
		if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
  }
  
  //schedule
  public function deletesch($id_schedule)
	{
		$this->db->where('id_schedule', $id_schedule)
				    ->delete('schedule');
		
		if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
	}

  // ------------------------------------------------------------------------

}

/* End of file _privatetripmodel_model.php */
/* Location: ./application/models/_privatetripmodel_model.php */