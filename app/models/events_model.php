<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    date_default_timezone_set('America/New_York');
  }

  // get all entries from table
  // if semester+year is specified, return those events only
  // sorted by year > semester > date > time
  function get_all($sem = NULL, $yr = NULL)
  {
    $this->db->order_by('year', 'desc');
    $this->db->order_by('semester', 'asc');
    $this->db->order_by('date', 'desc');
    $this->db->order_by('time', 'desc');

    if ($sem && $yr)
    {
      $this->db->where('semester', $sem);
      $this->db->where('year', $yr);
    }

    return $this->db->get('events');
  }

  // get all events that are older than today
  // if semester+year is specified, return those events only
  // sorted by year > semester > date > time
  function get_all_past($sem = NULL, $yr = NULL)
  {
    $today = date('Y-m-d');
    $this->db->where('date <', $today);
    $this->db->order_by('year', 'desc');
    $this->db->order_by('semester', 'asc');
    $this->db->order_by('date', 'desc');
    $this->db->order_by('time', 'desc');

    if ($sem && $yr)
    {
      $this->db->where('semester', $sem);
      $this->db->where('year', $yr);
    }

    return $this->db->get('events');
  }

  // get all semester+year combo in table
  function get_all_semesters()
  {
    $this->db->order_by('year', 'desc');
    $this->db->order_by('semester', 'asc');
    $this->db->distinct();
    $this->db->select('semester, year');

    return $this->db->get('events');
  }

  // get events that are not meetings or communnity services
  function get_upcoming_events($semester, $year)
  {
    $today = date('Y-m-d');
    $this->db->where('date >=', $today);
    $this->db->where('semester', $semester);
    $this->db->where('year', $year);

    $this->db->where('meeting', 0);
    $this->db->where('service', 0);

    $this->db->order_by('date', 'asc');
    $this->db->order_by('time', 'asc');

    return $this->db->get('events');
  }

  function get_upcoming_meetings($semester, $year)
  {
    $today = date('Y-m-d');
    $this->db->where('date >=', $today);
    $this->db->where('semester', $semester);
    $this->db->where('year', $year);

    $this->db->where('meeting', 1);

    $this->db->order_by('date', 'asc');
    $this->db->order_by('time', 'asc');

    return $this->db->get('events');
  }

  function get_upcoming_services($semester, $year)
  {
    $today = date('Y-m-d');
    $this->db->where('date >=', $today);
    $this->db->where('semester', $semester);
    $this->db->where('year', $year);

    $this->db->where('service', 1);

    $this->db->order_by('date', 'asc');
    $this->db->order_by('time', 'asc');

    return $this->db->get('events');
  }

  function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('events');
  }

  // insert new entry into table and return id of entry
  function save($data)
  {
    $data['created'] = date('Y-m-d H:i:s');
    $this->db->insert('events', $data);

    unset($data['time']);
    $this->db->select('id');
    $this->db->where($data);
    $query = $this->db->get('events');
    return $query->row()->id;
  }

  // update entry in table
  // timestamp automatically set to current update time
  function update($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('events', $data);
  }

  // remove entry from table and return a copy of the entry object
  function remove($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('events');

    $this->db->delete('events', array('id' => $id));
    return $query->row();
  }
}

/* End of file */
