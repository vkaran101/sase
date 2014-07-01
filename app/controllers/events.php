<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

  /**
   * Maps to the following URL
   *    http://example.com/index.php/events
   *    http://example.com/index.php/events/index
   *
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $this->load->helper('url');

    $data['title'] = 'Events | Northeastern SASE';

    $this->load->view('templates/header',$data);
    $this->load->view('events_view');
    $this->load->view('templates/footer');
  }
}

/* End of file events.php */
/* Location: ./app/controllers/events.php */
