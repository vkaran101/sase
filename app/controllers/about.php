<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

  /**
   * Maps to the following URL
   *    http://example.com/index.php/about
   *    http://example.com/index.php/about/index
   *
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $this->load->helper('url');

    $data['title'] = 'About | Northeastern SASE';

    $this->load->view('templates/header',$data);
    $this->load->view('about_view');
    $this->load->view('templates/footer');
  }
}

/* End of file about.php */
/* Location: ./app/controllers/about.php */
