<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_migrate extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('America/New_York');
    $this->load->library('migration');
    $this->load->library('ion_auth');
  }

  public function index()
  {
    if (!$this->ion_auth->logged_in() && !$this->input->is_cli_request())
    {
      redirect('/admin/auth/login','refresh');
    }
    else
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

  public function rollback($steps=1)
  {
    if (!$this->ion_auth->logged_in())
    {
      redirect('/admin/auth/login','refresh');
    }
    if (!$this->ion_auth->is_admin()) {
      show_error('Only administrators have access to migration rollbacks.');
    }
    if ($steps < 0) {
      show_error('Migration rollback steps cannot be negative.');
    }

    $this->load->config('migration',TRUE);
    $latest = $this->config->item('migration_version','migration');
    $version = $latest - $steps;
    if ($version < 3) {
      // cap rollback to 3 to ensure we have auth system intact
      $version = 3;
    }

    if (!$this->migration->version($version)) {
      show_error('Migration rollback failed.');
    } else {
      echo 'Migration rollback to version '.$version.' successful!'.PHP_EOL;
    }
  }
}

/* End of file */
