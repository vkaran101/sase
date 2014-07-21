<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }

  public function index()
  {
    $data['title'] = 'Events | Northeastern SASE';

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

/* End of file events.php */
/* Location: ./app/controllers/events.php */
