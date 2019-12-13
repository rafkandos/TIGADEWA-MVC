<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Admin_model
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

class Admin_model extends CI_Model {

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

  public function getAbout()
  {
    return $this->db->get('about')->result();
  }

  public function getPopTrip()
  {
    return $this->db->join('gallery', 'gallery.id_gallery = popular_trip.gallery_id')
                    ->get('popular_trip')->result();
  }

  public function getGallery()
  {
    return $this->db->get('gallery')->result();
  }

  public function update()
	  {
	    $data = array(
	      'visi'        => $this->input->post('visi'), 
	      'misi'        => $this->input->post('misi'),
	      'layanan'		  => $this->input->post('layanan')
	    );

	    return $this->db->where('id_about', $this->input->post('id_about'))
	                    ->update('about', $data);
	    

	    if ($this->db->affected_rows() > 0) {
	            return true;
	        } else {
	            return false;
	        } 
    }

  //poptrip
  public function addpt()
  {
    $data = array(
      'gallery_id'   => $this->input->post('tn')
    );

    return $this->db->insert('popular_trip', $data);

    if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        } 
  }

  //poptrip
  public function updatept()
  {
    $data = array(
     'gallery_id'   => $this->input->post('tn')
    );

    return $this->db->where('id_poptrip', $this->input->post('id_poptrip'))
                    ->update('popular_trip', $data);
    

    if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        } 
  }

  //poptrip
  public function delete($id_poptrip)
  {
    $this->db->where('id_poptrip', $id_poptrip)
            ->delete('popular_trip');
    
    if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
  }
    
    public function get_id_ot($id_about)
	  {
	    return  $this->db->where('id_about', $id_about)
	                    ->get('about')->row();
	  }

    //poptrip
    public function get_id_pt($id_poptrip)
    {
      return  $this->db->where('id_poptrip', $id_poptrip)
                      ->get('popular_trip')->row();
    }

    

  // ------------------------------------------------------------------------

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */