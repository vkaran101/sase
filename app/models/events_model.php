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
  function get_all($sem=NULL,$yr=NULL)
  {
    $this->db->order_by('year','asc');
    $this->db->order_by('semester','asc');
    $this->db->order_by('date','asc');
    $this->db->order_by('time','asc');

    if ($sem && $yr) {
      $this->db->where('semester',$sem);
      $this->db->where('year',$yr);
    }

    return $this->db->get('events');
  }

  function get_all_semesters()
  {
    $this->db->order_by('year','desc');
    $this->db->order_by('semester','asc');
    $this->db->distinct();
    $this->db->select('semester,year');
    return $this->db->get('events');
  }

  function get_upcoming_events($semester,$year)
  {
    $today = date('Y-m-d');
    $this->db->where('date >=',$today);
    $this->db->where('semester',$semester);
    $this->db->where('year',$year);
    $this->db->order_by('date','asc');
    $this->db->order_by('time','asc');
    return $this->db->get('events');
  }

  function get_upcoming_meetings($semester,$year)
  {
    $today = date('Y-m-d');
    $this->db->where('date >=',$today);
    $this->db->where('meeting',1);
    $this->db->where('semester',$semester);
    $this->db->where('year',$year);
    $this->db->order_by('date','asc');
    $this->db->order_by('time','asc');
    return $this->db->get('events');
  }

  function get_upcoming_services($semester,$year)
  {
    $today = date('Y-m-d');
    $this->db->where('date >=',$today);
    $this->db->where('service',1);
    $this->db->where('semester',$semester);
    $this->db->where('year',$year);
    $this->db->order_by('date','asc');
    $this->db->order_by('time','asc');
    return $this->db->get('events');
  }

  function get_by_id($id)
  {
    $this->db->where('id',$id);
    return $this->db->get('events');
  }

  // insert entry into table and return id of entry
  function save($data)
  {
    $this->db->insert('events',$data);

    $this->db->select('id');
    $this->db->where($data);
    $query = $this->db->get('events');
    return $query->row()->id;
  }

  // update entry in table, timestamp automatically set to current update time
  function update($id,$data)
  {
    unset($data['created']);
    $this->db->where('id',$id);
    $this->db->update('events',$data);
  }

  // remove entry from table and return a copy of the entry object
  function remove($id)
  {
    $this->db->where('id',$id);
    $query = $this->db->get('events');

    $this->db->delete('events', array('id' => $id));
    return $query->row();
  }

  // parse post data and return an array ready to be inserted into table
  function parse_input($input)
  {
    $parsed_date = $input['date_year'];
    $parsed_date .= '-' . $input['date_month'];
    $parsed_date .= '-' . $input['date_day'];
    $parsed_date = date('Y-m-d', strtotime($parsed_date));

    $time = $input['time_hour'];
    $time .= ':' . $input['time_minute'];
    $time .= ' ' . $input['time_oclock'];
    $parsed_time = date('H:i:s', strtotime($time));

    // current time
    $datetime = date('Y-m-d H:i:s');

    if ($input['meeting'] == 'meeting') {
      $meeting_checked = 1;
    } else {
      $meeting_checked = 0;
    }

    if ($input['service'] == 'service') {
      $service_checked = 1;
    } else {
      $service_checked = 0;
    }

    $entry = array(
      'title' => $input['title'],
      'date' => $parsed_date,
      'time' => $parsed_time,
      'location' => $input['location'],
      'description' => $input['description'],
      'semester' => $input['semester'],
      'year' => $input['year'],
      'meeting' => $meeting_checked,
      'service' => $service_checked,
      'created' => $datetime
    );
    return $entry;
  }

  // setup an entry from table ready to be put in form for edit
  function setup_form_entry($entry)
  {
    $entry->date_month = date('m',strtotime($entry->date));
    $entry->date_day = date('d',strtotime($entry->date));
    $entry->date_year = date('Y',strtotime($entry->date));
    $entry->time_hour = date('g',strtotime($entry->time));
    $entry->time_minute = date('i',strtotime($entry->time));

    switch (date('a',strtotime($entry->time))) {
      case 'am':
        $entry->time_oclock_am = 'selected';
        break;
      case 'pm':
      default:
        $entry->time_oclock_pm = 'selected';
        break;
    }

    switch ($entry->semester) {
      case 'spring':
        $entry->semester_spring = 'selected';
        break;
      case 'summer1':
        $entry->semester_summer1 = 'selected';
        break;
      case 'summer2':
        $entry->semester_summer2 = 'selected';
        break;
      case 'fall':
      default:
        $entry->semester_fall = 'selected';
        break;
    }

    if ($entry->meeting) {
      $entry->meeting_checkbox = 'checked="checked"';
    }
    if ($entry->service) {
      $entry->service_checkbox = 'checked="checked"';
    }

    return $entry;
  }
}

/* End of file */
