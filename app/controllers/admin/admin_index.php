<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_index extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('ion_auth');
    $this->load->helper('url');
    if (!$this->ion_auth->logged_in())
    {
      redirect('/admin/auth/login','refresh');
    }
  }

  public function index()
  {
    $this->data['title'] = 'Dashboard';
    $this->data['user'] = $this->ion_auth->user()->row();
    $this->load->view('admin/index_view',$this->data);
  }
}

/* End of file */
