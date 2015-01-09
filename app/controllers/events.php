<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('events_model');
    $this->load->model('settings_model');
    $this->load->helper('url');
  }

  public function index()
  {
    $semester = $this->settings_model->get_by_name('current_semester')->row()->value;
    $year = $this->settings_model->get_by_name('current_year')->row()->value;

    $this->data['title'] = 'Events - Northeastern SASE';
    $this->data['upcoming'] = $this->events_model->get_upcoming_events($semester, $year);
    $this->data['meetings'] = $this->events_model->get_upcoming_meetings($semester, $year);
    $this->data['services'] = $this->events_model->get_upcoming_services($semester, $year);

    $this->load->view('templates/header', $this->data);
    $this->load->view('events', $this->data);
    $this->load->view('templates/footer');
  }

  public function past($sem = NULL, $yr = NULL)
  {
    if (!$sem)
    {
      $sem = $this->settings_model->get_by_name('current_semester')->row()->value;
    }

    if (!$yr)
    {
      $yr = $this->settings_model->get_by_name('current_year')->row()->value;
    }

    $this->data['query'] = $this->events_model->get_all_past($sem, $yr);
    $this->data['semester_list'] = $this->events_model->get_all_semesters();
    $this->data['semester'] = $sem;
    $this->data['year'] = $yr;
    $this->data['title'] = 'Past Events - Northeastern SASE';

    $this->load->view('templates/header',$this->data);
    $this->load->view('past_events', $this->data);
    $this->load->view('templates/footer');
  }
}

/* End of file */
