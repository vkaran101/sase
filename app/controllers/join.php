<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join extends CI_Controller {

  public function index()
  {
    $this->load->helper('url');

    $this->data['title'] = 'Join - Northeastern SASE';

    $this->load->view('templates/header',$this->data);
    $this->load->view('join');
    $this->load->view('templates/footer');
  }
}

/* End of file */
