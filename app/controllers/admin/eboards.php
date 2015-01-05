<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eboards extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('eboards_model');
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
    $this->data['query'] = $this->eboards_model->get_all();
    $this->load->view('admin/eboards/index_view',$this->data);
  }

  public function create()
  {
    $this->data['title'] = 'Add New Eboard Member';
    $this->data['action'] = 'add';
    $this->data['cancel_action'] = base_url().'admin/eboards';
    $this->load->view('admin/eboards/form_view',$this->data);
  }

  public function add()
  {
    if ($this->form_validation->run('eboards') == FALSE)
    {
      $this->data['title'] = 'Add New Eboard Member';
      $this->data['action'] = 'add';
      $this->data['cancel_action'] = base_url().'admin/eboards';
      $this->load->view('admin/eboards/form_view',$this->data);
    }
    else
    {
      $input = $this->input->post(NULL,TRUE);
      $member = $this->eboards_model->parse_input($input);
      $id = $this->eboards_model->save($member);
      redirect('/admin/eboards/show/'.$id, 'refresh');
    }
  }

  public function show($id=0)
  {
    if ($id == 0)
    {
      show_error('Missing eboard member identifier.');
    }
    $this->data['member'] = $this->eboards_model->get_by_id($id)->row();
    $this->load->view('admin/eboards/show_view',$this->data);
  }

  public function edit($id=0)
  {
    if ($id == 0)
    {
      show_error('Missing eboard member identifier.');
    }
    $member = $this->eboards_model->get_by_id($id)->row();
    $member = $this->eboards_model->setup_form_entry($member);
    $this->data['title'] = 'Edit Eboard Member';
    $this->data['action'] = 'update/'.$id;
    $this->data['cancel_action'] = base_url().'admin/eboards/show/'.$id;
    $this->data['member'] = $member;
    $this->load->view('admin/eboards/form_view',$this->data);
  }

  public function update($id=0)
  {
    if ($id == 0)
    {
      show_error('Missing eboard memeber identifier. Update action not completed.');
    }
    if ($this->form_validation->run('eboards') == FALSE)
    {
      $this->data['title'] = 'Edit Eboard Member';
      $this->data['action'] = 'update/'.$id;
      $this->data['cancel_action'] = base_url().'admin/eboards/show/'.$id;
      $this->load->view('admin/eboards/form_view',$this->data);
    }
    else
    {
      $input = $this->input->post(NULL,TRUE);
      $member= $this->eboards_model->parse_input($input);
      $this->eboards_model->update($id,$member);
      redirect('/admin/eboards/show/'.$id, 'refresh');
    }
  }

  public function destroy($id=0)
  {
    if ($id == 0)
    {
      show_error('Missing eboard member identifier. No member deleted.');
    }
    $copy = $this->eboards_model->remove($id);
    redirect('/admin/eboards', 'refresh');
  }
}

/* End of file */
