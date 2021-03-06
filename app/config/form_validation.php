<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
  'events' => array(
    array('field' => 'title','label' => 'Title',
      'rules' => 'trim|required|max_length[65500]'
    ),
    array('field' => 'date_month','label' => 'Date Month',
      'rules' => 'required|integer|max_length[2]|greater_than[0]|less_than[13]'
    ),
    array('field' => 'date_day','label' => 'Date Day',
      'rules' => 'required|integer|max_length[2]|greater_than[0]|less_than[32]'
    ),
    array('field' => 'date_year','label' => 'Date Year',
      'rules' => 'required|integer|exact_length[4]|greater_than[2012]'
    ),
    array('field' => 'all_day','label' => 'All day','rules' => ''),
    array('field' => 'time_hour','label' => 'Time Hour',
      'rules' => 'integer|max_length[2]|greater_than[0]|less_than[13]'
    ),
    array('field' => 'time_minute','label' => 'Time Minute',
      'rules' => 'integer|exact_length[2]|greater_than[-1]|less_than[60]'
    ),
    array('field' => 'time_oclock','label' => 'Time Clock Zone','rules' => ''),
    array('field' => 'location','label' => 'Location',
      'rules' => 'trim|required|max_length[65500]'
    ),
    array('field' => 'description','label' => 'Description',
      'rules' => 'trim|required|max_length[65500]'
    ),
    array('field' => 'semester','label' => 'Semester',
      'rules' => 'required'
    ),
    array('field' => 'year','label' => 'Year',
      'rules' => 'required|integer|exact_length[4]|greater_than[2012]'
    ),
    array('field' => 'type','label' => 'Event Type',
      'rules' => 'required'
    )
  ),
  'eboards' => array(
    array('field' => 'name','label' => 'Name',
      'rules' => 'trim|required|max_length[65500]'
    ),
    array('field' => 'rank','label' => 'Rank',
      'rules' => 'required|integer|greater_than[0]'
    ),
    array('field' => 'position','label' => 'Position',
      'rules' => 'trim|required|max_length[65500]'
    ),
    array('field' => 'major','label' => 'Major',
      'rules' => 'trim|required|max_length[65500]'
    ),
    array('field' => 'grad_year','label' => 'Graduation Year',
      'rules' => 'required|integer|exact_length[4]|greater_than[2012]'
    ),
    array('field' => 'semester','label' => 'Semester',
      'rules' => 'required'
    ),
    array('field' => 'year','label' => 'Year',
      'rules' => 'required|integer|exact_length[4]|greater_than[2012]'
    ),
    array('field' => 'pic-value','label' => 'Picture Value','rules' => '')
  ),
  'newsletter' => array(
    array('field'=>'fname','label'=>'First Name',
      'rules'=>'trim|required|max_length[255]|alpha_dash'
    ),
    array('field'=>'lname','label'=>'Last Name',
      'rules'=>'trim|required|max_length[255]|alpha_dash'
    ),
    array('field'=>'email','label'=>'Email',
      'rules'=>'trim|required|valid_email'
    )
  ),
  'contact' => array(
    array('field' => 'name','label' => 'Name',
      'rules' => 'trim|required'
    ),
    array('field'=>'email','label'=>'Email',
      'rules'=>'trim|required|valid_email'
    ),
    array('field' => 'subject','label' => 'Subject',
      'rules' => 'trim|required'
    ),
    array('field' => 'message','label' => 'Message',
      'rules' => 'trim|required'
    )
  ),
  'settings' => array(
    array('field' => 'name', 'label' => 'Name',
      'rules' => 'trim|required'
    ),
    array('field' => 'value', 'label' => 'Value',
      'rules' => 'trim|required'
    )
  )
);

/* End of file */
