<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eboards extends CI_Controller {

  private $default_img = 'public/img/eboard/generic.png';

  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('America/New_York');
    $this->load->library('ion_auth');
    if (!$this->ion_auth->logged_in())
    {
      redirect('/admin/auth/login', 'refresh');
    }

    $this->load->model('eboards_model');
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->helper('url');
    $this->set_form_validation_delimiters();
  }

  public function index()
  {
    $this->data['query'] = $this->eboards_model->get_all();
    $this->load->view('admin/eboards/index', $this->data);
  }

  public function create()
  {
    $this->data['title'] = 'Add New Eboard Member';
    $this->data['action'] = 'add';
    $this->data['cancel_action'] = base_url().'admin/eboards';
    $this->data['pic_errors'] = '';
    $this->load->view('admin/eboards/form', $this->data);
  }

  public function add()
  {
    if ($this->form_validation->run('eboards') == FALSE)
    {
      // form validation failed, load the form view
      $this->create();
      return;
    }

    // grab the post data and set a default pic path
    $input = $this->input->post(NULL, TRUE);
    $member = $this->parse_post_input($input);
    $member['pic'] = $this->default_img;

    // configure and load the upload helper
    $config['upload_path'] = 'public/img/eboard/uploads/';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['overwrite'] = TRUE;
    $config['file_name'] = $member['position'].'_'.$member['semester'].'_'.$member['year'];
    $this->load->library('upload', $config);

    $field = 'pic';
    if (!$this->upload->do_upload($field))
    {
      // upload failed, reload the form view with upload errors
      $this->data['title'] = 'Add New Eboard Member';
      $this->data['action'] = 'add';
      $this->data['cancel_action'] = base_url().'admin/eboards';
      $this->data['pic_errors'] = $this->upload->display_errors(
        '<div data-alert class="alert-box alert radius">',
        '<a href="#" class="close">&times;</a></div>'
      );
      $this->load->view('admin/eboards/form', $this->data);
    }
    else
    {
      // upload successful, set the pic path
      $pic = $this->upload->data();
      $member['pic'] = 'public/img/eboard/uploads/'.$pic['file_name'];
    }

    $id = $this->eboards_model->save($member);
    redirect('/admin/eboards/show/'.$id, 'refresh');
  }

  public function show($id = 0)
  {
    if ($id == 0)
    {
      show_error('Missing eboard member identifier.');
    }

    $this->data['member'] = $this->eboards_model->get_by_id($id)->row();
    $this->load->view('admin/eboards/show', $this->data);
  }

  public function edit($id = 0)
  {
    if ($id == 0)
    {
      show_error('Missing eboard member identifier.');
    }

    $member = $this->eboards_model->get_by_id($id)->row();
    $this->data['title'] = 'Edit Eboard Member';
    $this->data['action'] = 'update/'.$id;
    $this->data['cancel_action'] = base_url().'admin/eboards/show/'.$id;
    $this->data['pic_errors'] = '';
    $this->data['member'] = $member;
    $this->load->view('admin/eboards/form', $this->data);
  }

  public function update($id = 0)
  {
    if ($id == 0)
    {
      show_error('Missing eboard memeber identifier. Update action not completed.');
    }

    if ($this->form_validation->run('eboards') == FALSE)
    {
      // form validation failed, load the form view
      $this->data['title'] = 'Edit Eboard Member';
      $this->data['action'] = 'update/'.$id;
      $this->data['cancel_action'] = base_url().'admin/eboards/show/'.$id;
      $this->data['pic_errors'] = '';
      $this->load->view('admin/eboards/form', $this->data);
    }

    // grab the post data
    $input = $this->input->post(NULL, TRUE);
    $member = $this->parse_post_input($input);

    // configure and load the upload helper
    $config['upload_path'] = 'public/img/eboard/uploads/';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['overwrite'] = TRUE;
    $config['file_name'] = $member['position'].'_'.$member['semester'].'_'.$member['year'];
    $this->load->library('upload', $config);

    $field = 'pic';
    if (!$this->upload->do_upload($field))
    {
      // upload failed, reload form view with upload errors
      $this->data['title'] = 'Edit Eboard Member';
      $this->data['action'] = 'update/'.$id;
      $this->data['cancel_action'] = base_url().'admin/eboards/show/'.$id;
      $this->data['pic_errors'] = $this->upload->display_errors(
        '<div data-alert class="alert-box alert radius">',
        '<a href="#" class="close">&times;</a></div>'
      );
      $this->load->view('admin/eboards/form', $this->data);
    }
    else
    {
      // upload successful, set the new pic path
      $pic = $this->upload->data();
      $member['pic'] = 'public/img/eboard/uploads/'.$pic['file_name'];
    }

    $this->eboards_model->update($id, $member);
    redirect('/admin/eboards/show/'.$id, 'refresh');
  }

  public function destroy($id = 0)
  {
    if ($id == 0)
    {
      show_error('Missing eboard member identifier. No member deleted.');
    }

    $copy = $this->eboards_model->remove($id);
    if (!file_exists($copy->pic) || $copy->pic ==  $this->default_img)
    {
      redirect('/admin/eboards', 'refresh');
    }

    if (!unlink($copy->pic))
    {
      // could not delete the uploaded picture, show error
      show_error('Unable to delete eboard picture: '.$copy->pic);
    }

    redirect('/admin/eboards', 'refresh');
  }

  public function delete_img($id = 0)
  {
    if ($id == 0)
    {
      show_error('Missing eboard member identifier. No eboard images deleted.');
    }

    $member = $this->eboards_model->get_by_id($id)->row();
    if ($member->pic == $this->default_img)
    {
      // already has default image
      redirect('/admin/eboards/show/'.$id, 'refresh');
    }

    if (file_exists($member->pic) && !unlink($member->pic))
    {
      // could not delete the uploaded picture, show error
      show_error('Unable to delete eboard picture: '.$member->pic);
    }

    // restore image to default
    $member->pic = $this->default_img;
    $this->eboards_model->update($id, $member);

    redirect('/admin/eboards/show/'.$id, 'refresh');
  }

  private function set_form_validation_delimiters()
  {
    $this->form_validation->set_error_delimiters(
      '<div data-alert class="alert-box alert radius">',
      '<a href="#" class="close">&times;</a></div>'
    );
  }

  private function parse_post_input($input)
  {
    $member = array(
      'name' => $input['name'],
      'rank' => $input['rank'],
      'position' => $input['position'],
      'major' => $input['major'],
      'grad_year' => $input['grad_year'],
      'semester' => $input['semester'],
      'year' => $input['year']
    );
    return $member;
  }
}

/* End of file */
