<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('events_model');
    $this->load->library('ion_auth');
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters(
      '<div data-alert class="alert-box alert radius">',
      '<a href="#" class="close">&times;</a></div>'
    );
    $this->load->helper('form');
    $this->load->helper('url');
    if (!$this->ion_auth->logged_in())
    {
      redirect('/admin/auth/login','refresh');
    }
  }

  public function index()
  {
    $this->data['query'] = $this->events_model->get_all();
    $this->load->view('admin/events/index_view',$this->data);
  }

  public function create()
  {
    $this->data['title'] = 'Create New Event';
    $this->data['action'] = 'add';
    $this->data['cancel_action'] = base_url().'admin/events';
    $this->load->view('admin/events/form_view',$this->data);
  }

  public function add()
  {
    if ($this->form_validation->run('events') == FALSE)
    {
      $this->data['title'] = 'Create New Event';
      $this->data['action'] = 'add';
      $this->data['cancel_action'] = base_url().'admin/events';
      $this->load->view('admin/events/form_view',$this->data);
    }
    else
    {
      $input = $this->input->post(NULL,TRUE);
      $entry = $this->events_model->parse_input($input);
      $id = $this->events_model->save($entry);
      redirect('/admin/events/show/'.$id, 'refresh');
    }
  }

  public function show($id=0)
  {
    if ($id == 0)
    {
      show_error('Missing event entry identifier.');
    }
    $this->data['entry'] = $this->events_model->get_by_id($id)->row();
    $this->load->view('admin/events/show_view',$this->data);
  }

  public function edit($id=0)
  {
    if ($id == 0)
    {
      show_error('Missing event entry identifier.');
    }
    $entry = $this->events_model->get_by_id($id)->row();
    $entry = $this->events_model->setup_form_entry($entry);
    $this->data['title'] = 'Edit Event Entry';
    $this->data['action'] = 'update/'.$id;
    $this->data['cancel_action'] = base_url().'admin/events/show/'.$id;
    $this->data['entry'] = $entry;
    $this->load->view('admin/events/form_view',$this->data);
  }

  public function update($id=0)
  {
    if ($id == 0)
    {
      show_error('Missing event entry identifier. Update action not completed.');
    }
    if ($this->form_validation->run('events') == FALSE)
    {
      $this->data['title'] = 'Edit Event Entry';
      $this->data['action'] = 'update/'.$id;
      $this->data['cancel_action'] = base_url().'admin/events/show/'.$id;
      $this->load->view('admin/events/form_view',$this->data);
    }
    else
    {
      $input = $this->input->post(NULL,TRUE);
      $entry = $this->events_model->parse_input($input);
      $this->events_model->update($id,$entry);
      redirect('/admin/events/show/'.$id, 'location');
    }
  }

  public function destroy($id=0)
  {
    if ($id == 0)
    {
      show_error('Missing event entry identifier. No entried deleted.');
    }
    $copy = $this->events_model->remove($id);
    redirect('/admin/events', 'location');
  }
}

/* End of file */
