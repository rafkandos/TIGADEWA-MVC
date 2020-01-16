<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model _opentripmodel_model
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

class _opentripmodel extends CI_Model {

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

  public function getOpenTrip()
  {
    return $this->db->where('id_opentrip !=', 11111)
                    ->where('id_opentrip !=', 22222)
                    ->get('opentrip')->result();
  }

  public function getITE($id_opentrip)
  {
    return $this->db->where('id_opentrip', $id_opentrip)
                    ->get('opentrip')->result();
  }

  public function getMP()
  {
    return $this->db->join('opentrip', 'opentrip.id_opentrip = pricing.id_ot')
                    ->where('pricing.id_ot !=', null, false)
                    ->where('pricing.id_ot !=', 22222)
                    ->get('pricing')->result();
  }

  public function getSCH()
  {
    return $this->db->join('opentrip', 'opentrip.id_opentrip = schedule.ot_id')
                    ->where('schedule.ot_id !=', null, false)
                    ->where('schedule.ot_id !=', 22222)
                    ->get('schedule')->result();
  }

  //opentrip
  public function add()
  {
    $hai = $this->upload->data('file_name');

    $data = array(
      'OtripName'       => $this->input->post('tn'), 
      'overview'        => $this->input->post('ov'),
      'preparation'     => $this->input->post('pre'),
      'include'         => $this->input->post('ic'),
      'exclude'         => $this->input->post('ec'),
      'document'        => $hai
    );

    return $this->db->insert('opentrip', $data);

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
      'id_ot'           => $this->input->post('tn'), 
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
      'ot_id'           => $this->input->post('tn'), 
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

  //opentrip
  public function update()
  {
    $hai = $this->upload->data('file_name');

    $data = array(
      'id_opentrip'     => $this->input->post('id_opentrip'),
      'OtripName'       => $this->input->post('tn'), 
      'overview'        => $this->input->post('ov'),
      'preparation'     => $this->input->post('pre'),
      'include'         => $this->input->post('ic'),
      'exclude'         => $this->input->post('ec'),
      'document'        => $hai
    );

    return $this->db->where('id_opentrip', $this->input->post('id_opentrip'))
                    ->update('opentrip', $data);
    

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
      'id_ot'           => $this->input->post('tn'), 
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
      'ot_id'           => $this->input->post('tn'), 
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

    return $this->db->where('id_opentrip', $this->session->userdata('idot'))
                    ->update('opentrip', $data);
    

    if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        } 
  }

  //opentrip
  public function get_id_ot($id_opentrip)
  {
    return  $this->db->where('id_opentrip', $id_opentrip)
                    ->get('opentrip')->row();
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

    return $this->db->where('id_opentrip', $this->input->post('id_reg'))
                    ->update('opentrip', $data);

      if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        } 
  }

  //opentrip
  public function delete($id_opentrip)
	{
		$this->db->where('id_opentrip', $id_opentrip)
				    ->delete('opentrip');
		
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

/* End of file _opentripmodel_model.php */
/* Location: ./application/models/_opentripmodel_model.php */