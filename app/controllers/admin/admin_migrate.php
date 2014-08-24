<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_migrate extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('migration');
    $this->load->library('ion_auth');
    if (!$this->ion_auth->logged_in())
    {
      redirect('/admin/auth/login','refresh');
    }
  }

  public function index()
  {
    if (!$this->migration->current())
    {
      show_error($this->migration->error_string());
    }
    else
    {
      echo 'Migration successful!'.PHP_EOL;
    }
  }
}

/* End of file */
