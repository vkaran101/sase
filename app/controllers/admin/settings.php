<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('America/New_York');
    $this->load->library('ion_auth');
    if (!$this->ion_auth->logged_in())
    {
      redirect('/admin/auth/login', 'refresh');
    }

    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('settings_model');
    $this->load->library('form_validation');
    $this->set_form_validation_delimiters();
    $this->data['user'] = $this->ion_auth->user()->row();
  }

  public function index()
  {
    $this->data['title'] = 'Settings';
    $this->data['settings'] = $this->settings_model->get_all();
    $this->load->view('admin/templates/header', $this->data);
    $this->load->view('admin/settings/index', $this->data);
    $this->load->view('admin/templates/footer');
  }

  public function create()
  {
    $this->data['title'] = 'Create New Setting';
    $this->data['action'] = 'add';
    $this->data['cancel_action'] = base_url().'admin/settings';
    $this->load->view('admin/templates/header', $this->data);
    $this->load->view('admin/settings/form', $this->data);
    $this->load->view('admin/templates/footer');
  }

  public function add()
  {
    if (!$this->form_validation->run('settings'))
    {
      $this->create();
      return;
    }

    $input = $this->input->post(NULL, TRUE);
    $entry = array(
      'name' => $input['name'],
      'value' => $input['value']
    );
    $id = $this->settings_model->save($entry);
    redirect('/admin/settings', 'refresh');
  }

  public function edit($id = 0)
  {
    if ($id == 0)
    {
      show_error('Missing setting entry identifier.');
    }

    $this->data['setting'] = $this->settings_model->get_by_id($id)->row();
    $this->data['title'] = 'Edit Setting';
    $this->data['action'] = 'update/'.$id;
    $this->data['cancel_action'] = base_url().'admin/settings';
    $this->load->view('admin/templates/header', $this->data);
    $this->load->view('admin/settings/form', $this->data);
    $this->load->view('admin/templates/footer');
  }

  public function update($id = 0)
  {
    if ($id == 0)
    {
      show_error('Missing setting entry identifier.');
    }

    if (!$this->form_validation->run('settings'))
    {
      $this->data['title'] = 'Edit Setting';
      $this->data['action'] = 'update/'.$id;
      $this->data['cancel_action'] = base_url().'admin/settings';
      $this->load->view('admin/templates/header', $this->data);
      $this->load->view('admin/settings/form', $this->data);
      $this->load->view('admin/templates/footer');
      return;
    }

    $input = $this->input->post(NULL, TRUE);
    $entry = array(
      'name' => $input['name'],
      'value' => $input['value']
    );
    $this->settings_model->update($id, $entry);
    redirect('/admin/settings', 'refresh');
  }

  public function destroy($id = 0)
  {
    if ($id == 0)
    {
      show_error('Missing setting entry identifier. No setting deleted.');
    }

    $copy = $this->settings_model->remove($id);
    redirect('/admin/settings', 'refresh');
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
