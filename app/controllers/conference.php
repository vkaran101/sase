<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conference extends CI_Controller {

  public function index()
  {
    $this->load->helper('url');

    $this->data['title'] = 'Northeast Regional Conference 2016 - Northeastern SASE';

    $this->load->view('templates/conference_header',$this->data);
    $this->load->view('conference');
    $this->load->view('templates/conference_footer');
  }

  public function about()
  {
    $this->load->helper('url');

    $this->data['title'] = 'Northeast Regional Conference 2016 - Northeastern SASE';

    $this->load->view('templates/conference_header',$this->data);
    $this->load->view('conference/about');
    $this->load->view('templates/conference_footer');
  }

  public function programming()
  {
    $this->load->helper('url');

    $this->data['title'] = 'Northeast Regional Conference 2016 - Northeastern SASE';

    $this->load->view('templates/conference_header',$this->data);
    $this->load->view('conference/programming');
    $this->load->view('templates/conference_footer');
  }

  public function logistics()
  {
    $this->load->helper('url');

    $this->data['title'] = 'Northeast Regional Conference 2016 - Northeastern SASE';

    $this->load->view('templates/conference_header',$this->data);
    $this->load->view('conference/logistics');
    $this->load->view('templates/conference_footer');
  }

  public function registration()
  {
    $this->load->helper('url');

    $this->data['title'] = 'Northeast Regional Conference 2016 - Northeastern SASE';

    $this->load->view('templates/conference_header',$this->data);
    $this->load->view('conference/registration');
    $this->load->view('templates/conference_footer');
  }

  public function sponsors()
  {
    $this->load->helper('url');

    $this->data['title'] = 'Northeast Regional Conference 2016 - Northeastern SASE';

    $this->load->view('templates/conference_header',$this->data);
    $this->load->view('conference/sponsors');
    $this->load->view('templates/conference_footer');
  }
}

/* End of file */
