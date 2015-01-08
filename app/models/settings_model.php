<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    date_default_timezone_set('America/New_York');
  }

  // get all the settings from table
  function get_all()
  {
    return $this->db->get('settings');
  }

  function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('settings');
  }

  function get_by_name($setting)
  {
    $this->db->where('name', $setting);
    return $this->db->get('settings');
  }

  // insert new setting into table and return id
  // created and updated timestamps set to current time
  function save($data)
  {
    $data['created'] = date('Y-m-d H:i:s');
    $this->db->insert('settings', $data);

    $this->db->select('id');
    $this->db->where($data);
    return $this->db->get('settings')->row()->id;
  }

  // update a setting in table
  // update timestamp automatically set to current time
  function update($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('settings', $data);
  }

  // remove setting from table and return a copy of the object
  function remove($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('settings');

    $this->db->delete('settings', array('id' => $id));
    return $query->row();
  }
}

/* End of file */
