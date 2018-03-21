<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->helper(array('form'));
  }

  function index()
  {
    $this->load->view('login/header');
    $this->load->view('login/main');
  }

}
