<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eboards_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    date_default_timezone_set('America/New_York');
  }

  // get all members from table
  // sorted by year > semester > name
  function get_all()
  {
    $this->db->order_by('year','asc');
    $this->db->order_by('semester','asc');
    $this->db->order_by('name','asc');
    return $this->db->get('eboards');
  }

  function get_by_id($id)
  {
    $this->db->where('id',$id);
    return $this->db->get('eboards');
  }

  // insert member into table and return id of member
  function save($data)
  {
    $this->db->insert('eboards',$data);

    $this->db->select('id');
    $this->db->where($data);
    $query = $this->db->get('eboards');
    return $query->row()->id;
  }

  // update member in table, timestamp automatically set to current update time
  function update($id,$data)
  {
    unset($data['created']);
    $this->db->where('id',$id);
    $this->db->update('eboards',$data);
  }

  // remove member from table and return a copy of the object
  function remove($id)
  {
    $this->db->where('id',$id);
    $query = $this->db->get('eboards');

    $this->db->delete('eboards', array('id' => $id));
    return $query->row();
  }

  // parse post data and return an array ready to be inserted into table
  function parse_input($input)
  {
    $member = array(
      'name' => $input['name'],
      'position' => $input['position'],
      'major' => $input['major'],
      'grad_year' => $input['grad_year'],
      'bio' => $input['bio'],
      'semester' => $input['semester'],
      'year' => $input['year'],
      'created' => date('Y-m-d H:i:s')
    );
    return $member;
  }

  // setup an entry from table ready to be put in form for edit
  function setup_form_entry($member)
  {
    switch ($member->semester) {
      case 'spring':
        $member->semester_spring = 'selected';
        break;
      case 'summer1':
        $member->semester_summer1 = 'selected';
        break;
      case 'summer2':
        $member->semester_summer2 = 'selected';
        break;
      case 'fall':
      default:
        $member->semester_fall = 'selected';
        break;
    }
    return $member;
  }
}

/* End of file */
