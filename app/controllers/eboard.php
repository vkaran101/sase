<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eboard extends CI_Controller {

  /**
   * Maps to the following URL
   *    http://example.com/index.php/eboard
   *    http://example.com/index.php/eboard/index
   *
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $this->load->helper('url');

    $data['title'] = 'Eboard | Northeastern SASE';

    $this->load->view('templates/header',$data);
    $this->load->view('eboard_view');
    $this->load->view('templates/footer');
  }
}

/* End of file eboard.php */
/* Location: ./app/controllers/eboard.php */
