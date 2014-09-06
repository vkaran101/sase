<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

  public function index()
  {
    $this->load->helper('url');

    $this->data['title'] = 'About | Northeastern SASE';

    $this->load->view('templates/header',$this->data);
    $this->load->view('about');
    $this->load->view('templates/footer');
  }
}

/* End of file */
