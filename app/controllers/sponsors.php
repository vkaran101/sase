<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sponsors extends CI_Controller {

  /**
   * Maps to the following URL
   *    http://example.com/index.php/sponsors
   *    http://example.com/index.php/sponsors/index
   *
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $this->load->helper('url');

    $data['title'] = 'Sponsors | Northeastern SASE';

    $this->load->view('templates/header',$data);
    $this->load->view('sponsors');
    $this->load->view('templates/footer');
  }
}

/* End of file sponsors.php */
/* Location: ./app/controllers/sponsors.php */
