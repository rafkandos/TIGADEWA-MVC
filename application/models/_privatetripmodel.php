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
                    ->where('id_privatetrip !=', 22222)
                    ->get('privatetrip')->result();
    
  }

  public function getITE($id_privatetrip)
  {
    return $this->db->where('id_privatetrip', $id_privatetrip)
                    ->get('privatetrip')->result();
  }

  public function getMP()
  {
    return $this->db->join('privatetrip', 'privatetrip.id_privatetrip = pricing.id_pt')
                    ->where('pricing.id_pt !=', null, false)
                    ->where('pricing.id_pt !=', 22222)
                    ->get('pricing')->result();
  }

  public function getSCH()
  {
    return $this->db->join('privatetrip', 'privatetrip.id_privatetrip = schedule.pt_id')
                    ->where('schedule.pt_id !=', null, false)
                    ->where('schedule.pt_id !=', 22222)
                    ->get('schedule')->result();
  }

  //privatetrip
  public function add()
  {
    $data = array(
      'PtripName'       => $this->input->post('tn'), 
      'overview'        => $this->input->post('ov'),
      'preparation'     => $this->input->post('pre'),
      'include'         => $this->input->post('ic'),
      'exclude'         => $this->input->post('ec')
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
      'preparation'     => $this->input->post('pre'),
      'include'         => $this->input->post('ic'),
      'exclude'         => $this->input->post('ec')
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

  public function updateit()
  {
    $data = array(
      'day1'            => $this->input->post('day1'),
      'day2'            => $this->input->post('day2'),
      'day3'            => $this->input->post('day3'),
      'day4'            => $this->input->post('day4'),
      'day5'            => $this->input->post('day5'),
      'day6'            => $this->input->post('day6'),
      'day7'            => $this->input->post('day7'),
      'day8'            => $this->input->post('day8'),
      'day9'            => $this->input->post('day9'),
      'day10'            => $this->input->post('day10'),
      'day11'            => $this->input->post('day11'),
      'day12'            => $this->input->post('day12'),
      'day13'            => $this->input->post('day13'),
      'day14'            => $this->input->post('day14'),
      'day15'            => $this->input->post('day15'),
      'day16'            => $this->input->post('day16'),
      'day17'            => $this->input->post('day17'),
      'day18'            => $this->input->post('day18'),
      'day19'            => $this->input->post('day19'),
      'day20'            => $this->input->post('day20'),
      'day21'            => $this->input->post('day21'),
      'day22'            => $this->input->post('day22'),
      'day23'            => $this->input->post('day23'),
      'day24'            => $this->input->post('day24'),
      'day25'            => $this->input->post('day25'),
      'day26'            => $this->input->post('day26'),
      'day27'            => $this->input->post('day27'),
      'day28'            => $this->input->post('day28'),
      'day29'            => $this->input->post('day29'),
      'day30'            => $this->input->post('day30')
    );

    return $this->db->where('id_privatetrip', $this->session->userdata('idit'))
                    ->update('privatetrip', $data);
    

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