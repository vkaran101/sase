<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('eboards_model');
    $this->load->model('settings_model');
    $this->load->helper('url');
  }

  public function index()
  {
    $semester = $this->settings_model->get_value('current_semester');
    $year = $this->settings_model->get_value('current_year');

    $this->data['title'] = 'Eboard - Northeastern SASE';
    $this->data['eboard'] = $this->eboards_model->get_all($semester, $year);

    $this->load->view('templates/header', $this->data);
    $this->load->view('eboard', $this->data);
    $this->load->view('templates/footer');
  }
}

/* End of file */
