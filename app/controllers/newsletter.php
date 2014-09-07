<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newsletter extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //$this->load->library('mailchimp');
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters(
      '<small class="error">','</small>'
    );
    $this->load->helper('form');
    $this->load->helper('url');
  }

  public function index()
  {
    $this->data['title'] = 'Subscribe - Northeastern SASE';
    $this->load->view('templates/header',$this->data);
    $this->load->view('newsletter/form');
    $this->load->view('templates/footer');
  }

  public function subscribe()
  {
    if ($this->form_validation->run('newsletter') == FALSE)
    {
      $this->data['title'] = 'Subscribe - Northeastern SASE';
      $this->load->view('templates/header',$this->data);
      $this->load->view('newsletter/form');
      $this->load->view('templates/footer');
    }
    else
    {
      $list_name = 'SASE Members';

      $filter = array('list_name' => $list_name);
      $lists = $this->mailchimp->call('lists/list',$filter);
      $list_id = $lists['data'][0]['id'];

      $fname = $this->input->post('fname');
      $lname = $this->input->post('lname');
      $email = $this->input->post('email');

      $data = array(
        'id' => $list_id,
        'email' => array('email'=>$email),
        'merge_vars' => array('FNAME'=>$fname,'LNAME'=>$lname),
        'double_optin' => true,
        'update_existing' => true,
        'replace_interests' => false,
        'send_welcome' => true
      );
      $result = $this->mailchimp->call('lists/subscribe',$data);

      if (isset($result['email'])) {
        $this->data['title'] = 'Success - Northeastern SASE';
        $this->load->view('templates/header',$this->data);
        $this->load->view('newsletter/success');
        $this->load->view('templates/footer');
      } else {
        $this->data['title'] = 'Error - Northeastern SASE';
        $this->load->view('templates/header',$this->data);
        $this->load->view('newsletter/error');
        $this->load->view('templates/footer');
      }
    }
  }

}

/* End of file */
