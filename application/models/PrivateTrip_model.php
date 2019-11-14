<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrivateTrip_model extends CI_Model {

  public function get_privatetrip()
  {
    return $this->db->get('privatetrip')->result();
  }

  public function get_detail($id_privatetrip)
  {
    //int i = 1;
    return $this->db->where('id_privatetrip', $id_privatetrip)->get('privatetrip')->result();
  }

  public function get_schedule($id_privatetrip)
  {
    return $this->db->where('id_privatetrip', $id_privatetrip)
                    ->where('slot >', '0')
                    ->get('schedule')->result();
  }

  public function get_sch($id_privatetrip)
  {
    return $this->db->where('id_privatetrip', $id_privatetrip)
                    ->get('schedule')->result();
  }

  public function get_price($id_privatetrip)
  {
    return $this->db->where('id_privatetrip', $id_privatetrip)->get('pricing')->result();
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
      'bookingCode'       => $this->input->post('booking_code')
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

}

/* End of file PrivateTrip_model.php */
/* Location: ./application/models/PrivateTrip_model.php */