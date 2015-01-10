<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('America/New_York');
    $this->load->library('ion_auth');
    if (!$this->ion_auth->logged_in())
    {
      redirect('/admin/auth/login', 'refresh');
    }

    $this->load->model('events_model');
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->helper('url');
    $this->set_form_validation_delimiters();
  }

  public function index()
  {
    $this->data['query'] = $this->events_model->get_all();
    $this->load->view('admin/events/index', $this->data);
  }

  public function create()
  {
    $this->data['title'] = 'Create New Event';
    $this->data['action'] = 'add';
    $this->data['cancel_action'] = base_url().'admin/events';
    $this->load->view('admin/events/form', $this->data);
  }

  public function add()
  {
    if ($this->form_validation->run('events') == FALSE)
    {
      $this->create();
      return;
    }

    $input = $this->input->post(NULL, TRUE);
    if (!isset($input['all_day']) && ($input['time_hour'] == '' || $input['time_minute'] == ''))
    {
      // needs to have a time if not 'All day'
      $this->create();
      return;
    }

    $entry = $this->parse_post_input($input);
    $id = $this->events_model->save($entry);
    redirect('/admin/events/show/'.$id, 'refresh');
  }

  public function show($id = 0)
  {
    if ($id == 0)
    {
      show_error('Missing event entry identifier.');
    }

    $this->data['entry'] = $this->events_model->get_by_id($id)->row();
    $this->load->view('admin/events/show', $this->data);
  }

  public function edit($id = 0)
  {
    if ($id == 0)
    {
      show_error('Missing event entry identifier.');
    }

    $this->data['title'] = 'Edit Event Entry';
    $this->data['action'] = 'update/'.$id;
    $this->data['cancel_action'] = base_url().'admin/events/show/'.$id;
    $this->data['entry'] = $this->events_model->get_by_id($id)->row();
    $this->load->view('admin/events/form', $this->data);
  }

  public function update($id = 0)
  {
    if ($id == 0)
    {
      show_error('Missing event entry identifier. Update action not completed.');
    }

    if ($this->form_validation->run('events') == FALSE)
    {
      $this->data['title'] = 'Edit Event Entry';
      $this->data['action'] = 'update/'.$id;
      $this->data['cancel_action'] = base_url().'admin/events/show/'.$id;
      $this->load->view('admin/events/form', $this->data);
      return;
    }

    $input = $this->input->post(NULL, TRUE);
    if (!isset($input['all_day']) && ($input['time_hour'] == '' || $input['time_minute'] == ''))
    {
      // needs to have a time if not 'All day'
      $this->data['title'] = 'Edit Event Entry';
      $this->data['action'] = 'update/'.$id;
      $this->data['cancel_action'] = base_url().'admin/events/show/'.$id;
      $this->load->view('admin/events/form', $this->data);
      return;
    }

    $entry = $this->parse_post_input($input);
    $this->events_model->update($id, $entry);
    redirect('/admin/events/show/'.$id, 'refresh');
  }

  public function destroy($id = 0)
  {
    if ($id == 0)
    {
      show_error('Missing event entry identifier. No entried deleted.');
    }

    $copy = $this->events_model->remove($id);
    redirect('/admin/events', 'refresh');
  }

  private function set_form_validation_delimiters()
  {
    $this->form_validation->set_error_delimiters(
      '<div data-alert class="alert-box alert radius">',
      '<a href="#" class="close">&times;</a></div>'
    );
  }

  private function parse_post_input($input)
  {
    $parsed_date = $input['date_year'].'-'.$input['date_month'].'-'.$input['date_day'];
    $parsed_date = date('Y-m-d', strtotime($parsed_date));

    if (isset($input['all_day']))
    {
      $parsed_time = date('H:i:s', strtotime('00:00:00'));
    }
    else
    {
      $time = $input['time_hour'].':'.$input['time_minute'].' '.$input['time_oclock'];
      $parsed_time = date('H:i:s', strtotime($time));
    }

    $entry = array(
      'title' => $input['title'],
      'date' => $parsed_date,
      'time' => $parsed_time,
      'location' => $input['location'],
      'description' => $input['description'],
      'semester' => $input['semester'],
      'year' => $input['year'],
      'type' => $input['type'],
      'all_day' => (isset($input['all_day']) ? 1 : 0)
    );
    return $entry;
  }
}

/* End of file */
