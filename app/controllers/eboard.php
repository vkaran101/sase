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
    $year = 2014;
    $semester = 'fall';

    $data['title'] = 'Eboard | Northeastern SASE';
    $data['eboard'] = $this->eboards_model->get_current_eboard($year,$semester);

    $this->load->view('templates/header',$data);
    $this->load->view('eboard_view',$data);
    $this->load->view('templates/footer');
  }
}

/* End of file */
