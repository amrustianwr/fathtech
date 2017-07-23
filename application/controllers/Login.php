<?php
  /**
   *
   */
  class Login extends CI_Controller
  {

    function index()
    {
      $data['dynamiccontent'] = 'form_login';
      $this->load->view('templates/template', $data);
    }
  }

 ?>
