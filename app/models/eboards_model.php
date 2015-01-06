<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eboards_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    date_default_timezone_set('America/New_York');
  }

  // get all members from table
  function get_all()
  {
    $this->db->order_by('year', 'desc');
    $this->db->order_by('semester', 'asc');
    $this->db->order_by('rank', 'asc');
    $this->db->order_by('name', 'asc');
    return $this->db->get('eboards');
  }

  function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('eboards');
  }

  // get eboard members in current semester and year sorted by rank
  function get_current_eboard($sem, $yr)
  {
    $this->db->order_by('rank', 'asc');
    $this->db->order_by('name', 'asc');
    $this->db->where('semester', $sem);
    $this->db->where('year', $yr);
    return $this->db->get('eboards');
  }

  // insert new member into table and return id of member
  // created and updated timestamps set to current time
  function save($data)
  {
    $data['created'] = date('Y-m-d H:i:s');
    $this->db->insert('eboards', $data);

    $this->db->select('id');
    $this->db->where($data);
    $query = $this->db->get('eboards');
    return $query->row()->id;
  }

  // update member in table
  // update timestamp automatically set to current time
  function update($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('eboards', $data);
  }

  // remove member from table and return a copy of the object
  function remove($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('eboards');

    $this->db->delete('eboards', array('id' => $id));
    return $query->row();
  }
}

/* End of file */
