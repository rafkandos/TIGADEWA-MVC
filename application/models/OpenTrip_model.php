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
    return $this->db->get('opentrip')->result();
  }

  public function get_detail($id_opentrip)
  {
    //int i = 1;
    return $this->db->where('id_opentrip', $id_opentrip)->get('opentrip')->result();
  }

  public function get_schedule($id_opentrip)
  {
    return $this->db->where('id_opentrip', $id_opentrip)->get('schedule')->result();
  }

  public function get_price($id_opentrip)
  {
    return $this->db->where('id_opentrip', $id_opentrip)->get('pricing')->result();
  }

  public function APIProvince()
  {
    $headers = array('Content-Type: application/json',);

    // the url of the API you are contacting to 'consume' 
    $url = 'http://dev.farizdotid.com/api/daerahindonesia/provinsi' ; 

    // Open connection
    $ch = curl_init();

    // Set the url, number of GET vars, GET data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Execute request
    $result = curl_exec($ch);

    // Close connection
    curl_close($ch);

    // get the result and parse to JSON
    $items = json_decode($result);

       if(isset($items)){ return $items ; }

       else { return FALSE ; }
  }

  public function register()
  {
    // $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // $booking_code = substr(str_shuffle($permitted_chars), 0, 10);
    $vl = $this->input->post('province');
    $pro = substr($vl, 2);
    //die($this->input->post('city'));
    $data = array(
      'name'              => $this->input->post('fullname'),
      'identityNumber'    => $this->input->post('idno'),
      'gender'            => $this->input->post('gender'),
      'country'           => $this->input->post('country'),
      'province'          => $pro,
      'city'              => $this->input->post('city'),
      'fullAddress'       => $this->input->post('address'),
      'email'             => $this->input->post('email'),
      'teesSize'          => $this->input->post('tees_size'),
      'phoneNumber'       => $this->input->post('phone_number'),
      'emergencyContact'  => $this->input->post('emergency_contact'),
      'id_schedule'       => $this->input->post('schedule'),
      'id_pricing'        => $this->input->post('selitem'),
      'bookingCode'       => $this->input->post('booking_code')
    );

    $this->db->insert('register', $data);

    if ($this->db->affected_rows() > 0) {
        return true;
    } else {
        return false;
    }
  }

  // ------------------------------------------------------------------------

}

/* End of file OpenTripModel_model.php */
/* Location: ./application/models/OpenTripModel_model.php */