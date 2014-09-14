<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Programs extends CI_Controller {

  public function index()
  {
    $this->load->helper('url');

    $this->data['title'] = 'Programs - Northeastern SASE';

    $this->load->view('templates/header',$this->data);
    $this->load->view('programs');
    $this->load->view('templates/footer');
  }

  public function mentorship()
  {
    // redirect so we don't break links to this url
    $this->load->helper('url');
    redirect('/programs','refresh');
  }
}

/* End of file */
