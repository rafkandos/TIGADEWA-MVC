<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model OpenTripModel_model
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

class OpenTrip_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  public function get_opentrip()
  {
    return $this->db->where('id_opentrip !=', 11111)
                    ->get('opentrip')->result();
  }

  public function get_detail($id_opentrip)
  {
    //int i = 1;
    return $this->db->where('id_opentrip', $id_opentrip)          
                    ->get('opentrip')->result();
  }

  public function get_schedule($id_opentrip)
  {
    return $this->db->where('ot_id', $id_opentrip)
                    ->where('slot >', '0')
                    ->get('schedule')->result();
  }

  public function get_sch($id_opentrip)
  {
    return $this->db->where('ot_id', $id_opentrip)
                    ->get('schedule')->result();
  }

  public function get_price($id_opentrip)
  {
    return $this->db->where('id_ot', $id_opentrip)->get('pricing')->result();
  }

  public function register()
  {
    // $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // $booking_code = substr(str_shuffle($permitted_chars), 0, 10);
    if ($this->input->post('region') == "Indonesia") {
      $pro = substr($this->input->post('province'), 2);
      $ct = $this->input->post('city');
      //$pro = substr($vl, 2);
    }
    else {
      $pro = $this->input->post('country');
      $ct = $this->input->post('_city');
    }
    // $vl = $this->input->post('province');
    // $pro = substr($vl, 2);
    //die($this->input->post('city'));
    $data = array(
      'name'              => $this->input->post('fullname'),
      'identityNumber'    => $this->input->post('idno'),
      'gender'            => $this->input->post('gender'),
      'region'            => $this->input->post('region'),
      'province'          => $pro,
      'city'              => $ct,
      'fullAddress'       => $this->input->post('address'),
      'email'             => $this->input->post('email'),
      'teesSize'          => $this->input->post('tees_size'),
      'phoneNumber'       => $this->input->post('phone_number'),
      'emergencyContact'  => $this->input->post('emergency_contact'),
      'id_schedule'       => $this->input->post('schedule'),
      'id_pricing'        => $this->input->post('selitem'),
      'bookingCode'       => $this->input->post('booking_code'),
      'id_opentrip'       => $this->session->userdata('id_opentrip'),
      'id_privatetrip'    => 11111,
      'id_internationaltrip'  => 11111
    );

    $id_sl = $this->input->post('schedule');
    $sl = $this->db->where('id_schedule', $id_sl)
                   ->get('schedule')->row();
    $ak = ($sl->slot - 1);

    $this->db->insert('register', $data);

    if ($this->db->affected_rows() > 0) {

        $dt = array(
          'slot' => $ak
        );

        $this->db->where('id_schedule', $id_sl)
                 ->update('schedule', $dt);

        return true;
    } else {
        return false;
    }
  }

  // ------------------------------------------------------------------------

}

/* End of file OpenTripModel_model.php */
/* Location: ./application/models/OpenTripModel_model.php */