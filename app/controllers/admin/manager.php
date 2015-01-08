<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager extends CI_Controller {

  private $form_errors;

  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('America/New_York');
    $this->load->library('ion_auth');
    if (!$this->ion_auth->logged_in())
    {
      redirect('/admin/auth/login','refresh');
    }

    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('settings_model');
    $this->load->library('form_validation');
    $this->set_form_validation_delimiters();
    $this->form_errors = '';
  }

  public function index()
  {
    $this->data['title'] = 'Dashboard';
    $this->data['user'] = $this->ion_auth->user()->row();
    $this->data['current_semester'] = $this->get_current_semester();
    $this->data['current_year'] = $this->get_current_year();
    $this->data['semester_change_errors'] = $this->form_errors;
    $this->load->view('admin/index', $this->data);
  }

  public function change_current_semester()
  {
    if (!$this->form_validation->run('semester_change'))
    {
      $this->form_errors = validation_errors();
      $this->index();
      return;
    }

    // update semester
    $setting['value'] = $this->input->post('semester');
    $id = $this->settings_model->get_by_name('current_semester')->row()->id;
    $this->settings_model->update($id, $setting);

    // update year
    $setting['value'] = $this->input->post('year');
    $id = $this->settings_model->get_by_name('current_year')->row()->id;
    $this->settings_model->update($id, $setting);

    redirect('/admin', 'refresh');
  }

  private function get_current_semester()
  {
    $setting_name = 'current_semester';
    $setting_value_default = 'fall';

    $query = $this->settings_model->get_by_name($setting_name);
    if ($query->num_rows() == 0)
    {
      $setting['name'] = $setting_name;
      $setting['value'] = $setting_value_default;
      $id = $this->settings_model->save($setting);
      $query = $this->settings_model->get_by_id($id);
    }
    return $query->row()->value;
  }

  private function get_current_year()
  {
    $setting_name = 'current_year';
    $setting_value_default = '2012';

    $query = $this->settings_model->get_by_name($setting_name);
    if ($query->num_rows() == 0)
    {
      $setting['name'] = $setting_name;
      $setting['value'] = $setting_value_default;
      $id = $this->settings_model->save($setting);
      $query = $this->settings_model->get_by_id($id);
    }
    return $query->row()->value;
  }

  private function set_form_validation_delimiters()
  {
    $this->form_validation->set_error_delimiters(
      '<div data-alert class="alert-box alert radius">',
      '<a href="#" class="close">&times;</a></div>'
    );
  }
}

/* End of file */
