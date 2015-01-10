<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/home
   *    http://example.com/index.php/home/index
   * Since this controller is set as the default controller in
   * config/routes.php, it's also displayed at:
   *    http://example.com/
   */
  public function index()
  {
    $this->load->helper('url');

    $this->data['title'] = 'Home - Northeastern SASE';

    $this->load->view('templates/header', $this->data);
    $this->load->view('home');
    $this->load->view('templates/footer');
  }
}

/* End of file */
