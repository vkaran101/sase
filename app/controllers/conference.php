<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conference extends CI_Controller {

  public function index()
  {
    $this->load->helper('url');

    $this->data['title'] = 'Northeast Regional Conference 2016 - Northeastern SASE';

    $this->load->view('templates/header',$this->data);
    $this->load->view('conference');
    $this->load->view('templates/footer');
  }
}

/* End of file */
