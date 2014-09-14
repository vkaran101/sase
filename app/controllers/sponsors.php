<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sponsors extends CI_Controller {

  public function index()
  {
    $this->load->helper('url');

    $this->data['title'] = 'Sponsors - Northeastern SASE';

    $this->load->view('templates/header',$this->data);
    $this->load->view('sponsors');
    $this->load->view('templates/footer');
  }
}

/* End of file */
