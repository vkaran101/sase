<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join extends CI_Controller {

  /**
   * Maps to the following URL
   *    http://example.com/index.php/join
   *    http://example.com/index.php/join/index
   *
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $this->load->helper('url');

    $data['title'] = 'Join | Northeastern SASE';

    $this->load->view('templates/header',$data);
    $this->load->view('join_view');
    $this->load->view('templates/footer');
  }
}

/* End of file join.php */
/* Location: ./app/controllers/join.php */
