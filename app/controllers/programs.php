<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Programs extends CI_Controller {

  /**
   * Maps to the following URL
   *    http://example.com/index.php/programs
   *    http://example.com/index.php/programs/index
   *
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $this->load->helper('url');

    $data['title'] = 'Programs | Northeastern SASE';

    $this->load->view('templates/header',$data);
    $this->load->view('programs');
    $this->load->view('templates/footer');
  }
}

/* End of file programs.php */
/* Location: ./app/controllers/programs.php */
