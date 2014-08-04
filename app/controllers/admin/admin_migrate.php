<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_migrate extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('migration');
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
