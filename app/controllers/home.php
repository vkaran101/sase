<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/home
   *    http://example.com/index.php/home/index
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/home/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $data['title'] = 'Home | Northeastern SASE';

    $this->load->helper('url');
    $this->load->view('templates/header',$data);
    $this->load->view('home');
    $this->load->view('templates/footer');
  }
}

/* End of file home.php */
/* Location: ./app/controllers/home.php */
