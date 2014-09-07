<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('America/New_York');
    $this->load->library('email');
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters(
      '<small class="error">','</small>'
    );
    $this->load->helper('form');
    $this->load->helper('url');

    // tweak to make email work well
    $this->email->set_newline("\r\n");
  }

  public function index()
  {
    $this->data['title'] = 'Contact | Northeastern SASE';
    $this->load->view('templates/header',$this->data);
    $this->load->view('contact');
    $this->load->view('templates/footer');
  }

  public function send()
  {
    if ($this->form_validation->run('contact') == FALSE)
    {
      $this->data['title'] = 'Contact | Northeastern SASE';
      $this->load->view('templates/header',$this->data);
      $this->load->view('contact');
      $this->load->view('templates/footer');
    }
    else
    {
      $sase_email = 'northeastern.sase@gmail.com';
      $sase_name = 'Northeastern SASE';

      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $subject = $this->input->post('subject');
      $message = $this->input->post('message');

      // use gmail to send email to ourself
      // check reply-to email for user's email
      $this->email->clear(TRUE);
      $this->email->from($sase_email,$sase_name);
      $this->email->to($sase_email);
      $this->email->reply_to($email,$name);
      $this->email->subject('[SASE Website] '.$subject);
      $this->email->message($message);

      $result = $this->email->send();

      if ($result) {
        $this->data['title'] = 'Success - Northeastern SASE';
        $this->load->view('templates/header',$this->data);
        $this->load->view('contact_success');
        $this->load->view('templates/footer');
      } else {
        $this->data['title'] = 'Error - Northeastern SASE';
        $this->load->view('templates/header',$this->data);
        $this->load->view('contact_error');
        $this->load->view('templates/footer');
      }
    }
  }
}

/* End of file */
