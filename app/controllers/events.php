<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('events_model');
    $this->load->helper('url');
  }

  public function index()
  {
    $semester = 'fall';
    $year = 2014;

    $data['title'] = 'Events | Northeastern SASE';
    $data['upcoming'] = $this->events_model->get_upcoming_events($semester,$year);
    $data['meetings'] = $this->events_model->get_upcoming_meetings($semester,$year);
    $data['services'] = $this->events_model->get_upcoming_services($semester,$year);

    $this->load->view('templates/header', $data);
    $this->load->view('events_view');
    $this->load->view('templates/footer');
  }

  public function past()
  {
    $data['title'] = 'Past Events | Northeastern SASE';

    $this->load->view('templates/header', $data);
    $this->load->view('past_events_view');
    $this->load->view('templates/footer');
  }
}

/* End of file */
