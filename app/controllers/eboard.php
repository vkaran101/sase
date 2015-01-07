<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('eboards_model');
    $this->load->helper('url');
  }

  public function index()
  {
    $semester = 'fall';
    $year = 2014;

    $this->data['title'] = 'Eboard - Northeastern SASE';
    $this->data['eboard'] = $this->eboards_model->get_eboard($semester, $year);

    $this->load->view('templates/header', $this->data);
    $this->load->view('eboard', $this->data);
    $this->load->view('templates/footer');
  }
}

/* End of file */
