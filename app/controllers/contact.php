<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

  /**
   * Maps to the following URL
   *    http://example.com/index.php/contact
   *    http://example.com/index.php/contact/index
   *
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $this->load->helper('url');

    $data['title'] = 'Contact | Northeastern SASE';

    $this->load->view('templates/header',$data);
    $this->load->view('contact_view');
    $this->load->view('templates/footer');
  }
}

/* End of file contact.php */
/* Location: ./app/controllers/contact.php */
